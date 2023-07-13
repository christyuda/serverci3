<?php
defined("BASEPATH") or exit('No direct script access allowed');

class Drivers_Model extends CI_Model
{

    private $_table_order = 'drivers';

    public function get_all_drivers()
    {
        // Mengambil semua data driver
        $query = $this->db->get('drivers');
        return $query->result_array();
    }

    public function get_driver($id)
    {
        // Mengambil data driver berdasarkan ID
        $query = $this->db->get_where('drivers', array('id' => $id));
        return $query->row_array();
    }

    public function add_driver($data)
    {
        // Menambahkan data driver baru
        return $this->db->insert('drivers', $data);
    }

    public function update_driver($id, $data)
    {
        // Mengubah data driver berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->update('drivers', $data);
    }

    public function delete_driver($id)
    {
        // Menghapus data driver berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->delete('drivers');
    }
}