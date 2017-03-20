<?php
class Todo_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
//        $this->load->helper('url');
//        $this->load->database();
    }

    public function index() {
        $query = $this->db->get("todo");
        $data['records'] = $query->result();

        $this->load->helper('url');
        $this->load->view('todo/Todo_view',$data);
    }

    public function add_todo_view() {
        $this->load->helper('form');
        $this->load->view('todo/Todo_add');
    }

    public function add_todo() {
        $this->load->model('Todo_Model');

        $data = array(
            'title' => $this->input->post('title'),
            'priority_id' => $this->input->post('priority_id')
        );
        $this->db->set('date_added', 'NOW()', FALSE);
        $this->Todo_Model->insert($data);

        $query = $this->db->get("todo");
        $data['records'] = $query->result();
        $this->load->view('todo/Todo_view',$data);
    }

    public function update_todo_view() {
        $this->load->helper('form');
        $old_id = $this->uri->segment('3');
        $query = $this->db->get_where("todo",array("id"=>$old_id));
        $data['records'] = $query->result();
        $data['old_id'] = $old_id;

        $this->load->view('todo/Todo_edit',$data);
    }

    public function update_todo(){
        $this->load->model('Todo_Model');

        $data = array(
            'id' => $this->input->post('id'),
            'title' => $this->input->post('title'),
            'priority_id' => $this->input->post('priority_id')
        );

        $old_id = $this->input->post('old_id');
        $this->Todo_Model->update($data,$old_id);

        $query = $this->db->get("todo");
        $data['records'] = $query->result();

        $this->load->view('todo/Todo_view',$data);
    }

    public function delete_todo() {
        $this->load->model('Todo_Model');
        $id = $this->uri->segment('3');
        $this->Todo_Model->delete($id);

        $query = $this->db->get("todo");
        $data['records'] = $query->result();
        $this->load->view('todo/Todo_view',$data);
    }
}
?>