<?php
    class Zip_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_zipcodes(){
            $this->db->order_by('city', 'ASC');
            $query = $this->db->get('zipcodes');
            return $query->result_array();
           
        }




        public function get_cities_by_county($county){
            $query = $this->db->get_where('zipcodes', array('county' => $county));
            return $query->result_array(); 
        }

        public function get_counties(){
            $this->db->distinct();
            $this->db->select('county');
            $query = $this->db->get('zipcodes');
            return $query->result_array(); 
        }
    }
