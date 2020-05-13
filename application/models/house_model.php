<?php
    class house_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_houses(){
            $this->db->order_by('price');
            $query = $this->db->get('house');
            return $query->result_array(); 
        }

        public function sell_house(){
            $data = array(
                'seller' => $this->session->userdata('user_id')
                'zip' => $this->input->post('zip'),
                'addres' => $this->input->post('addres'),
                'rNum' => $this->input->post('addres'),
                'comf' => $this->input->post('addres'),
                'price' => $this->input->post('addres'),
                'size' => $this->input->post('addres'),
                'floors' => $this->input->post('addres'),
                'images' => $images
            );
            return $this->db->insert('house', $data);
        }

        public function get_house($houseid){
            $query = $this->db->get_where('house', array('id' => $houseid));
            return $query->row();
        }

        public function delete_house($houseid){
            $this->db->where('id', $houseid);
            $this->db->delete('house');
            return true;
        }

        public function delete_house($houseid){
            $this->db->where('id', $houseid);
            $this->db->delete('house');
            return true;
        }
        public function get_houses_by_seller($houseid){
            $query = $this->db->get_where('house', array('seller' => $sellerid));
            return $query->result_array(); 
        }
        public function get_houses_by_zip($zip){
            $query = $this->db->get_where('house', array('zip' => $zip));
            return $query->result_array(); 
        }
        public function get_houses_by_county($zip){
            $this->db->order_by('house.price', 'ASC');
            $this->db->join('house', 'house.zip = zipcodes.zipcode');
                $query = $this->db->get_where('house', array('zip' => $zip));
                return $query->result_array();
        }

    }