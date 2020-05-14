<?php
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('user_model'); 
    
        }
        public function profile($id = NULL){
            $data['user'] = $this->user_model->get_user($id);

            if(empty($data['user'])){
                show_404();
            }
            $data['title'] = $data['user']['name'];
            $this->load->view('templates/header');
            $this->load->view('user/profile', $data);
            $this->load->view('templates/footer');
        }



        public function register(){
            $data['title'] = "Regisztráció";

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('mail', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('user/register', $data);
                $this->load->view('templates/footer');
            }else{
                    $enc_password = md5($this->input->post('password'));
                    $this->user_model->register($enc_password);

                    $this->session->set_flashdata('user_registered', 'Sikeres regisztráció. Most már bejelentkezhetsz.');

                    redirect('');
            }
        }

        public function login(){
            $data['title'] = 'Bejelentkezés';

            $this->form_validation->set_rules('mail', 'Mail', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('user/login', $data);
                $this->load->view('templates/footer');  
            }else{
                $mail = $this->input->post('mail');
                $password = md5($this->input->post('password'));

                $user_id = $this->user_model->login($mail, $password);

                if($user_id){
                    $user_data = array(
                        'user_id' => $user_id,
                        'mail' => $mail,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    $this->session->set_flashdata('user_loggedin', 'Sikeres bejelentkezés!');
                    redirect('');
                }else{
                    $this->session->set_flashdata('login_failed', 'Sikertelen bejelentkezés!');
                    redirect('user/login');
                }
            }
        }

        public function logout(){
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('mail');

            $this->session->set_flashdata('user_loggedout', 'Kijelentkeztél...');
            redirect('user/login');
        }

        
        function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'Ez az e-mail cím már foglalt. Válassz másikat.');

            if($this->user_model->check_email_exists($email)){
                    return true;
            }else{
                    return false;
            }
        }
    }