<?php 

class Hobby_m extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();

    }
    
    public $column_order = array('id','name', 'id_hobby', 'id_category',null);
    public $column_search = array('id','name', 'id_hobby', 'id_category');
    public $order = array('id' => 'desc'); 

    public function _get_datatables_query()
    {
        $this->db->from('nama');
        $i = 0;

        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                {
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if (isset($_POST['order']))
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function loadHobbyTabel()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from('nama');
        return $this->db->count_all_results();
    }

    public function tambahDataHobby($data)
    {
        $this->db->insert('nama', $data);
        return $this->db->affected_rows();
    }

    public function hapusDataHobby($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nama');
        return $this->db->affected_rows();
    }

    public function cariDataHobby($id)
    {
        $this->db->where('id', $id);
        $this->db->from('nama');
        $query = $this->db->get();

        return $query->result();
    }

    public function ubahDataHobby($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('nama', $data);
        return $this->db->affected_rows();
    }
    
}