<?php
Class Laptop extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/restserverlaptop/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    
    // menampilkan data Laptop
    function index(){
        $data['dataLaptop'] = json_decode($this->curl->simple_get($this->API.'/Laptop'));
        $data['dataLaptop'] = $data['dataLaptop']->data ;
        $this->load->view('Laptop',$data);
    }
    

    // insert data laptop
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'merek'      =>  $this->input->post('merek'),
                'jenis'      =>  $this->input->post('jenis'),
                'tahun'=>  $this->input->post('tahun'));
            $insert =  $this->curl->simple_post($this->API.'/Laptop', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Laptop');
        }else{
            $this->load->view('akucreate');
        }
    }
    
    // edit data laptop
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'merek'      =>  $this->input->post('merek'),
                'jenis'      =>  $this->input->post('jenis'),
                'tahun'=>  $this->input->post('tahun'));
            $update =  $this->curl->simple_put($this->API.'/Laptop', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Laptop');
        }else{
            $params =  $this->uri->segment(3);
            $params = $params - 1;
            $data['dataLaptop'] = json_decode($this->curl->simple_get($this->API.'/Laptop'));
            $data['dataLaptop'] = $data['dataLaptop']->data[$params] ;
            $this->load->view('akuedit',$data);
        }
    }
    
    // delete data laptop
    function delete($id){
        if(empty($id)){
            redirect('Laptop');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/Laptop', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Laptop');
        }
    }
}