<?php
    class House_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }


        public function get_house($id = FALSE){
            $this->db->select('*');
            $this->db->from('house');
            $this->db->join('zipcodes', 'zipcodes.zipcode = house.zip');
            $this->db->join('user', 'user.user_id = house.seller'); 
            if($id===FALSE){ 
                $query = $this->db->get();
                return $query->result_array();
            }
            $this->db->where('house.house_id', $id);
            $query = $this->db->get();
            return $query->row_array();
        }

        public function sell_house($house_image){
            $data = array(
                'seller' => $this->session->userdata('user_id'),
                'zip' => $this->input->post('city'),
                'addres' => $this->input->post('addres'),
                'rNum' => $this->input->post('rNum'),
                'price' => $this->input->post('price'),
                'size' => $this->input->post('size'),
                'floors' => $this->input->post('floors'),
                'description' => $this->input->post('description'),
                'images' => $house_image
            );
            return $this->db->insert('house', $data);
        }
        public function delete_house($houseid){
            $this->db->where('house_id', $houseid);
            $this->db->delete('house');
            return true;
        }
        public function update_house($house_image, $house_id){
            $id = url_title($this->input->post('id'));

            $data = array(
                'zip' => $this->input->post('city'),
                'addres' => $this->input->post('addres'),
                'Rnum' => $this->input->post('Rnum'),
                'price' => $this->input->post('price'),
                'floors' => $this->input->post('floors'),
                'size' => $this->input->post('size'),
                'description' => $this->input->post('description'),
                'images' => $house_image
            );

            $this->db->where('house_id', $house_id);
            return $this->db->update('house', $data);
        
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