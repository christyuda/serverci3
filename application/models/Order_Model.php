<?php
defined("BASEPATH") or exit('No direct script access allowed');

class Order_Model extends CI_Model
{

    private $_table_order = 'orders';

    public function get_all_orders()
    {
        // Mengambil semua data pesanan
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function get_order($id)
    {
        // Mengambil data pesanan berdasarkan ID
        $query = $this->db->get_where('orders', array('id' => $id));
        return $query->row_array();
    }

    public function add_order($data)
    {
        // Menambahkan data pesanan baru
        return $this->db->insert('orders', $data);
    }

    public function update_order($id, $data)
    {
        // Mengubah data pesanan berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->update('orders', $data);
    }

    public function delete_order($id)
    {
        // Menghapus data pesanan berdasarkan ID
        $this->db->where('id', $id);
        return $this->db->delete('orders');
    }

}