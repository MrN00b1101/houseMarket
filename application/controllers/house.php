<?php
class House extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('house_model'); 
        $this->load->model('zip_model'); 

    }
        public function index(){
            $data['title'] = 'Házak';
            $data['houses'] = $this->house_model->get_house();

            $this->load->view('templates/header');
            $this->load->view('house/list', $data);
            $this->load->view('templates/footer');
        }

        public function view($id = NULL){
            $data['house'] = $this->house_model->get_house($id);

            if(empty($data['house'])){
                show_404();
            }
            $data['title'] = $data['house']['addres'];
            $this->load->view('templates/header');
            $this->load->view('house/view', $data);
            $this->load->view('templates/footer');
        }
        public function add(){
            if(!$this->session->userdata('logged_in')){
                redirect('user/login');
            }


            $data['title'] = 'Ház meghírdetése';
            $data['cities'] = $this->zip_model->get_zipcodes();
            
            $this->form_validation->set_rules('addres', 'Cím', 'required');
            $this->form_validation->set_rules('description', 'Leírás', 'required');
            $this->form_validation->set_rules('size', 'Méret' ,'required');
            $this->form_validation->set_rules('rNum', 'Szobák száma' ,'required');
            $this->form_validation->set_rules('floors', 'Emeletek száma' ,'required');
            $this->form_validation->set_rules('price', 'Ár' ,'required');
            $this->form_validation->set_rules('city', 'Település' ,'required');


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('house/add', $data);
                $this->load->view('templates/footer');
            }else{
                $config['upload_path'] = './assets';
                $config['allowed_types'] = 'gif|jpg|png|jfif';
                $config['max_size'] = '2048';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                
                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('userfile')){
                    $errors = array('error' =>$this->upload->display_errors());
                    $house_image = 'noimage.jpg';
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $house_image= $_FILES['userfile']['name'];
                }

                $this->house_model->sell_house($house_image);

                $this->session->set_flashdata('advertisment_created', 'A hirdetés elkészült.');

                redirect('');
            }
        }
    }