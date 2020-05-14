<?php
    class Message_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_messages($userid){
            $query = $this->db->get_where('messages', array('reciever' => $userid));
            return $query->result_array(); 
        }

        public function get_message($messageid){
            $query = $this->db->get_where('messages', array('id' => $messageid));
            return $query->row();
        }

        public function send_message(){
            $data = array(
                'sender' =>$this->session->userdata('user_id'),
                'reciever' => $this->input->post('reciever'),
                'message' => $this->input->post('message')
            );
            return $this->db->insert('messages', $data);
        }

