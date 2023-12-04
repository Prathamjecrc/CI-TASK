<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        // Load the session library
        $this->load->library('session');
        $this->load->helper('url');

    }
    public function index() {
        $this->load->helper('form');
        $this->load->view('login_view');
    }

    public function process() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Perform validation and authentication (check against database)
        // Implement your authentication logic here
        // Example: Check if the user exists in the database and validate the password
        
        // Example: Dummy authentication (Replace this with your actual authentication logic)
        if ($email === 'admin@example.com' && $password === 'password') {
            // Set session variables upon successful login
            $user_data = array(
                'email' => $email,
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);

            // Redirect to dashboard or any desired page after successful login
            redirect('Dashboard');
        } else {
            // If authentication fails, redirect back to login page with an error message
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('login');
        }
    }

    public function logout() {
        // Unset user session and redirect to the login page
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('email');
        redirect('login');
    }
}
?>
