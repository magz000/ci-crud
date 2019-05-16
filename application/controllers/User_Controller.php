<?php

class User_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function index()
    {
        $query = $this->db->get("users");
        $data['users'] = $query->result();

        $this->load->view('layouts/header');
        $this->load->view('users/list', $data);
        $this->load->view('layouts/footer');
    }

    public function create() {
        $this->load->view('layouts/header');
        $this->load->view('users/create');
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $this->load->model('User_Model');

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'contact_number' => $this->input->post('contact_number')
        );

        $this->User_Model->insert($data);

        redirect(base_url(). 'index.php/user');
    }

    public function edit() {
        $id = $this->uri->segment('3');
        $query = $this->db->get_where("users",array("id"=>$id));
        $result= $query->result();
        $data['user'] = $result[0];
        $data['id'] = $id;

        $this->load->view('layouts/header');
        $this->load->view('users/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function update() {
        $id = $this->uri->segment('3');
        $this->load->model('User_Model');

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'contact_number' => $this->input->post('contact_number')
        );

        $this->User_Model->update($data, $id);

        redirect(base_url(). 'index.php/user');
    }

    public function delete() {
        $this->load->model('User_Model');
        $id = $this->uri->segment('3');
        $this->User_Model->delete($id);

        redirect(base_url(). 'index.php/user');
    }
}