<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ots_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllEntries() {
        // Fetch all entries from the "OTS" table
        $query = $this->db->get('ots');
        return $query->result_array();
    }

    public function addEntry($data) {
        // Insert a new entry into the "ots" table
        $this->db->insert('ots', $data);
        return $this->db->insert_id(); // Return the ID of the inserted entry
    }

    public function getEntryById($id) {
        // Fetch a specific entry from the "ots" table by ID
        $query = $this->db->get_where('ots', array('id' => $id));
        return $query->row_array();
    }

    public function addEntrys($data)
{
    $this->db->insert('ots', $data); // Insert data into 'ots' table
    return ($this->db->affected_rows() > 0) ? true : false;
}


    public function updateEntry($id, $data) {
        // Update a specific entry in the "ots" table based on ID
        $this->db->where('id', $id);
        $this->db->update('ots', $data);
    }

    public function deleteEntry($id) {
        // Delete a specific entry from the "ots" table by ID
        $this->db->where('id', $id);
        $this->db->delete('ots');
    }
}
?>

