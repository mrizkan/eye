<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->view('insert');
	}

	public function cinsert()
    {
        $this->form_validation->set_rules('cname', 'cname', 'required');


        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('Welcome/add');

        }
        else
        {


            $data2 = array(
                'cname' => $this->input->post('cname'),

            );
            $this->insert_model->form_insert($data2);
            $this->session->set_flashdata('msg', 'Customer Inserted Successfully');
            $this->session->flashdata('msg');
            redirect("Addcustomer/add");


        }
    }
}
