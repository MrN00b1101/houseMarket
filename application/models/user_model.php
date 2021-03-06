<?php
    class User_model extends CI_Model{
        
        public function register($enc_password){
            $data = array(
                'name' => $this->input->post('name'),
                'mail' => $this->input->post('mail'),
                'tel' => $this->input->post('tel'),
                'password' => $enc_password,
            );
            return $this->db->insert('user', $data);
        }

        public function login($mail, $password){
            $this->db->where('mail', $mail);
            $this->db->where('password', $password);

            $result = $this->db->get('user');
            if($result->num_rows()==1){
                return $result->row(0)->user_id;
            }else{
                return false;
            }
        }

        public function get_user($id = FALSE){
            
            if($id===FALSE){ 
                $query = $this->db->get('user');
                return $query->result_array();
            }
            $this->db->where('user.user_id', $id);
            $query = $this->db->get('user');
            return $query->row_array();
        }

        public function check_email_exists($mail){
            $query = $this->db->get_where('user', array('mail' => $mail));
    
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
                }
            }

        }
    