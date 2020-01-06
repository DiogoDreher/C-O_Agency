<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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

        $this->load->model("courses_model");
        $courses = $this->courses_model->show_course();

        $this->load->model("team_model");
        $members = $this->team_model->show_member();

        $data = array(
            "scripts" => array(
                "owl.carousel.min.js",
                "theme-scripts.js",
                "sweetalert2.all.min.js",
                "home.js",
                "util.js"
            ),
            "courses" => $courses,
            "members" => $members
        );
        $this->template->show('home', $data);
    }

    public function ajax_save_message()
    {

        if (!$this->input->is_ajax_request()) {
            exit("Nenhum acesso de script direto permitido!");
        }

        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();

        $this->load->model("messages_model");

        $data = $this->input->post();

        if (empty($data["message_user_name"])) {
            $json["error_list"]["#message_user_name"] = "Nome é obrigatório!"; 
        } 

        elseif (empty($data["message_user_email"])) {
            $json["error_list"]["#message_user_email"] = "Email é obrigatório!"; 
        }

        elseif (empty($data["message_text"])) {
            $json["error_list"]["#message_text"] = "Mensagem é obrigatória!"; 
        }

        if (!empty($json["error_list"])) {
            $json["status"] = 0;
        } else {            
            $this->messages_model->insert($data);            
        }

        echo json_encode($json);
    }
}
