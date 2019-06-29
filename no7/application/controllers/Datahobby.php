<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datahobby extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hobby_m', 'hobby');
    }

    public function index()
    {
        $this->load->view("v_hobby");
    }

    public function tambah()
    {
        $name = $this->input->post('name');
        $hobby = $this->input->post('hobby');
        $category = $this->input->post('category');
      
        $data = array(
            'name' => $name,
            'id_hobby' => $hobby,
            'id_category' => $category
        );

        $kirimDb = $this->hobby->tambahDataHobby($data);
         
        if($kirimDb == '1'){
            echo json_encode(array('status' => true));
        }else{
            echo json_encode(array('status' => false));
        }
    }

    public function loadHobbyTabel()
    {
        $list = $this->hobby->loadHobbyTabel();
        $data = array();

		foreach ($list as $key=>$dataHobby) {
            $row = array();
        
            $row[] = $dataHobby->name;
        
            if($dataHobby->id_hobby == '1'){
                $row[] = 'Mobile Legend' ;
            }else{
                $row[] = 'Futsal' ;
            }

            if($dataHobby->id_category == '1'){
                $row[] = 'Game';
            }else{
                $row[] = 'Olahraga';
            }
      
            $row[] = '
            <a href="javascript:void(0)" class="btn btn-info btn-circle" title="Edit Data Hobby" onclick="editDataHobby('."'".$dataHobby->id."'".')"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" class="btn btn-danger btn-circle" title="Hapus Data Hobby" onclick="hapusDataHobby('."'".$dataHobby->id."'".')"><i class="fas fa-trash"></i></a>
            ';
		
			$data[] = $row;
		}

		$output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->hobby->count_all(),
            "recordsFiltered" => $this->hobby->count_filtered(),
            "data" => $data,
        );
		echo json_encode($output);
    }

    public function hapusDataHobby($id)
    {
        $kirimDb = $this->hobby->hapusDataHobby($id);
        if($kirimDb == '1'){
            echo json_encode(array('status' => true));
        }else{
            echo json_encode(array('status' => false));
        }
    }

    public function cariDataHobby($id)
    {
        $kirimDb = $this->hobby->cariDataHobby($id);
        echo json_encode($kirimDb );
    }

    public function ubahDataHobby($id)
    {
        $name = $this->input->post('edit-name');
        $hobby = $this->input->post('edit-hobby');
        $category = $this->input->post('edit-category');
      
        $data = array(
            'name' => $name,
            'id_hobby' => $hobby,
            'id_category' => $category
        );

        $kirimDb = $this->hobby->ubahDataHobby($id, $data);
         
        if($kirimDb == '1'){
            echo json_encode(array('status' => true));
        }else{
            echo json_encode(array('status' => false));
        }
    }
}
