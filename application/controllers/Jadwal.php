<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

     public function __construct() {
        Parent::__construct();
        $this->load->model("calendar_model");
    }

     public function index()
     {
        $this->data['page'] = 'home/calendar';
        $this->parser->parse('home/layout/wrapper', $this->data);
     }
     public function lihat()
     {
       $start = $this->input->get("start");
     $end = $this->input->get("end");

     $startdt = new DateTime('now'); // setup a local datetime
     $startdt->setTimestamp($start); // Set the date based on timestamp
     $start_format = $startdt->format('Y-m-d H:i:s');

     $enddt = new DateTime('now'); // setup a local datetime
     $enddt->setTimestamp($end); // Set the date based on timestamp
     $end_format = $enddt->format('Y-m-d H:i:s');

     $events = $this->calendar_model->get_events($start_format, $end_format);

     $data = array();
     foreach ($events->result_array() as $row) {
       $data[] = array(
         'id' => $row['id'],
         'title' => $row['judul'],
         'description' => $row['deskripsi'],
         'start' => $row['start'],
         'end' => $row['end'],
       );
     }
     // foreach($events->result() as $r) {
     //     $data_events[] = array(
     //       'id' => $r->id,
     //       'title' => $r->judul,
     //       'description' => $r->deskripsi,
     //       'end' => $r->end,
     //       'start' => $r->start
     //     );
     // }
     print_r($data);
     echo json_encode(['events'=>$data]);
     exit();
     }

}
