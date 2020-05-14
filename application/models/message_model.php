<?php
    class Message_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_messages($userid){
            $this->db->select('*');
            $this->db->from('messages');
            $this->db->join('user', 'user.user_id = messages.sender');
            $this->db->where('reciever', $userid);
            $query = $this->db->get();
            return $query->result_array(); 
        }

        public function get_message($messageid){
            $this->db->select('*');
            $this->db->from('messages');
            $this->db->join('user', 'user.user_id = messages.sender');
            $this->db->where('message_id', $messageid);
            $query = $this->db->get();

            return $query->row_array();
        }

        public function send_message($reciever){
            $data = array(
                'sender' =>$this->session->userdata('user_id'),
                'reciever' =>$this->input->post('reciever'),
                'message' => $this->input->post('message')
            );
            return $this->db->insert('messages', $data);
        }

    }