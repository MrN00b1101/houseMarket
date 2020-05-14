<?php
    class Message extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('message_model');
            $this->load->model('user_model'); 
    
        }
        public function list(){
            $data['title'] = 'Üzenetek';
            $data['messages'] = $this->message_model->get_messages($this->session->userdata('user_id'));

            $this->load->view('templates/header');
            $this->load->view('message/list', $data);
            $this->load->view('templates/footer');
        }


        public function read($message_id){
            $data['title'] = $message_id;
            $data['message'] = $this->message_model->get_message($message_id);

            $this->load->view('templates/header');
            $this->load->view('message/read', $data);
            $this->load->view('templates/footer');
        }



        public function write($reciever = NULL ){
            $data['title'] = "Üzenet írás";
            $data['reciever'] = $reciever;
            $this->form_validation->set_rules('message', 'Üzenet', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('message/write', $data);
                $this->load->view('templates/footer');
            }else{
                $this->message_model->send_message($reciever);
                $this->session->set_flashdata('message_sent', 'Az üzenet elküldve');
                redirect('');
            }
        }

        
    }