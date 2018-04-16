<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {
    public function get_events($start, $end)
    {
      return $this->db->where(['start >='=>$start, 'end <='=>$end])->get("jadwal");
    }

    public function add_event($data)
    {
      $this->db->insert("jadwal", $data);
    }

    public function get_event($id)
    {
      return $this->db->where("id", $id)->get("jadwal");
    }

    public function update_event($id, $data)
    {
      $this->db->where("id", $id)->update("jadwal", $data);
    }

    public function delete_event($id)
    {
      $this->db->where("id", $id)->delete("jadwal");
    }
}
