<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    error_reporting(0);
    $this->load->library('pdf');
    if (!$this->session->has_userdata('pondokbambu')) {
      redirect('login');
    }
    $pegawai = $this->crud_model->_read_where('pegawai', ['nip'=>$this->session->userdata('pondokbambu')['nip']])->result_array();
    foreach ($pegawai as $row) {
      $this->data['nip'] = $row['nip'];
      $this->data['nama_pegawai'] = $row['nama_depan'];
      $this->data['jabatan'] = $row['jabatan'];
      $this->data['foto'] = $row['foto'];
    }
    $this->data['katlap'] = $this->crud_model->_read('kategori_laporan')->result_array();
  }
	public function detail()
	{
    $slug = $this->uri->segment(3);
    $this->data['kategori'] = $this->crud_model->_read_where('kategori_laporan', ['slug'=>$slug])->row_array();
    $this->db->order_by('id', 'DESC');
    $this->data['laporan'] = $this->crud_model->_read_where('laporan', ['kat_id'=>$this->data['kategori']['id'], 'peg_id'=>$this->data['nip']])->result_array();
    $this->data['page'] = 'dashboard/laporan';
    $this->parser->parse('dashboard/layout/wrapper', $this->data);
	}
  public function tambah()
  {
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');
    if($this->form_validation->run())
    {
      $s = $this->input->post('nama',true);
      $slug = strtolower(url_title(convert_accented_characters($s)));
      $d = array(
        'peg_id' => $this->data['nip'],
        'kat_id' => $this->input->post('kategoriid',true),
        'nama' =>  $this->input->post('nama',true),
        'isi' => $this->input->post('isi',true),
        'no_laporan' => $this->input->post('nosurat',true),
        'slug' => $slug,
        'created_at' => date('Y-m-d H:i:s')
      );

      $this->crud_model->_create('laporan',$d);

      $this->session->set_flashdata('msg_berhasil','Data Berhasil Ditambahkan');
      redirect(base_url('laporan/tambah'));
    }else{
      $this->data['page'] = 'dashboard/tambah_laporan';
      $this->data['listKategori'] = $this->crud_model->_read('kategori_laporan')->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function edit($id)
  {
    $this->form_validation->set_rules('nama', 'Judul', 'required');
    $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
    $this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');

    if($this->form_validation->run())
    {
      $s = $this->input->post('nama',true);
      $slug = strtolower(url_title(convert_accented_characters($s)));
      $d = array(
        'peg_id' => $this->data['nip'],
        'kat_id' => $this->input->post('kategoriid',true),
        'nama' =>  $this->input->post('nama',true),
        'isi' => $this->input->post('isi',true),
        'no_laporan' => $this->input->post('nosurat',true),
        'slug' =>$slug ,
        'updated_at' => date('Y-m-d H:i:s'),
      );
      $w = array('id' => $this->input->post('id',true));

      $this->crud_model->_update('laporan',$d,$w);

      $this->session->set_flashdata('msg_berhasil','Data Berhasil Diperbaharui');
      echo '<script>window.history.back();</script>';
    }else{
      $this->data['page'] = 'dashboard/edit_laporan';
      $this->data['listData'] = $this->crud_model->_read_where('laporan', ['id'=>$id,'peg_id'=>$this->session->userdata('pondokbambu')['nip']])->result();
      $this->data['listKategori'] = $this->crud_model->_read('kategori_laporan')->result();
      $this->parser->parse('dashboard/layout/wrapper', $this->data);
    }
  }
  public function delete($id)
  {
    if ($this->crud_model->_delete('laporan',['id'=>$id,'peg_id'=>$this->session->userdata('pondokbambu')['nip']])) {
      $this->session->set_flashdata('msg_berhasil','Data Berhasil Dihapus');
      echo '<script>window.history.back();</script>';
    }
  }
  public function lihat()
  {
    $id = $this->uri->segment(4);
    $kat_id = $this->uri->segment(3);

    $dataa = $this->data['surat_masuk'] = $this->crud_model->_read_where('laporan', ['kat_id'=>$kat_id, 'id'=>$id])->result_array();
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('Web Aplikasi Gudang');
    $pdf->SetTitle('Laporan Data Barang Keluar');
    $pdf->SetSubject('Barang Keluar');

    //header Data
    // $pdf->SetHeaderData('unsada.jpg',20,'Laporan','Surat Masuk',array(203, 58, 44),array(0, 0, 0));
    // $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));


    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',12,'',true);

    $pdf->AddPage('L');

    $html =
      '<div></h1>
        <table><br>';
        $no = 1;
        foreach($dataa as $d) {
          $html .= '<tr>';
          $html .= '<td colspan="5"><p>No Laporan   : '.$d['no_laporan'].'</p></td>';
          $html .= '<td><p>'.$d['created_at'].'</p></td><br>';
          $html .= '</tr>';
          $html .= '<tr>';
          $html .= '<td colspan="20"><p>Perihal      : '.$d['nama'].'</p></td><br><br>';
          $html .= '</tr><br><br>';
          $html .= '<tr>';
          $html .= '<td colspan="100"><p>'.$d['isi'].'</p></td>';
          $html .= '</tr>';
        }


        $html .='
          <br>
              <h6 align="right">Hormat Saya</h6><br><br><br>
              <h6 align="right">Admin</h6>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('invoice_barang_keluar.pdf','I');
  }
}
