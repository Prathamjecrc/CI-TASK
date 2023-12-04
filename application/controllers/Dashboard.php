<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();

        // Load necessary models and helpers
        $this->load->model('ots_model'); // Load the model handling OTS table operations
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $data['ots_data'] = $this->ots_model->getAllEntries();
        $this->load->view('dashboard_view', $data);
    }

    public function edit($id) {
        $data['entry'] = $this->ots_model->getEntryById($id);
        $this->load->view('edit_view', $data);
    }

    public function delete($id) {
        $this->ots_model->deleteEntry($id);
        redirect('dashboard');
    }

   public function print($id) {
    // Load the entry from the database using the provided ID
    $data['entry'] = $this->ots_model->getEntryById($id);
    $this->load->view('pdf', $data);
    // Load the view content into a variable
    $pdf_content = $this->load->view('pdf', $data, true);

    // Load Dompdf library
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($pdf_content);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("TASK_PDF.pdf");
}

public function add()
{
    $this->load->view('add_entry_view');
}

public function insert()
{
    $data = array(
        'accounts' => $this->input->post('accounts'),
        'customer_name' => $this->input->post('customer_name'),
        'ots_amount' => $this->input->post('ots_amount'),
        'sanction_date' => $this->input->post('sanction_date'),
        'expiry_date' => $this->input->post('expiry_date'),
        'updated_by' => $this->input->post('updated_by')
        // Add other fields as needed
    );

    $this->ots_model->addEntrys($data); // Call the method in the model to insert data
    redirect('dashboard'); // Redirect back to the dashboard after adding the entry
}

    

    public function update() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Form validation rules can be set here before updating the entry
            // Example validation rules:
            $this->form_validation->set_rules('accounts', 'Accounts', 'required');
            $this->form_validation->set_rules('customer_name', 'Customer Name', 'required');
            $this->form_validation->set_rules('ots_amount', 'OTS Amount', 'required|numeric');
            $this->form_validation->set_rules('sanction_date', 'Sanction Date', 'required');
            $this->form_validation->set_rules('expiry_date', 'Expiry Date', 'required');
            $this->form_validation->set_rules('updated_by', 'Updated By', 'required');
            if ($this->form_validation->run() === FALSE) {
                // Validation failed, reload the edit view with validation errors
                $id = $this->input->post('id');
                $data['entry'] = $this->ots_model->getEntryById($id);
                $this->load->view('edit_view', $data);
            } else {
                // Validation passed, update the entry
                $id = $this->input->post('id');
                $data = array(
                    'accounts' => $this->input->post('accounts'),
                    'customer_name' => $this->input->post('customer_name'),
                    'ots_amount' => $this->input->post('ots_amount'),
                    'sanction_date' => $this->input->post('sanction_date'),
                    'expiry_date' => $this->input->post('expiry_date'),
                    'updated_by' => $this->input->post('updated_by'),
                    // Add other fields here...
                );
    
                // Call the updateEntry method in your Ots_model passing $id and $data
                $this->ots_model->updateEntry($id, $data);
    
                // Redirect to the dashboard after the update
                redirect('dashboard');
            }
        } else {
            // If accessed directly without form submission, redirect to the dashboard
            redirect('dashboard');
        }
    }
    
}
?>

