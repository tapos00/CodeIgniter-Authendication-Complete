<?php
/**
 * Created by PhpStorm.
 * User: taposh
 * Date: 2015-06-01
 * Time: 4:14 PM
 */

class Dashboard extends  CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->auth = new stdClass;
        $this->load->library('flexi_auth');
        $this->data = null;
        if (!($this->flexi_auth->is_logged_in())) {
            redirect('auth', 'refresh');
        } else {
            $this->data['infoResult'] = $this->flexi_auth->get_user_by_id()->row();
        }
    }

    public function index(){
        $this->data['title'] = 'Dashboard';
        $this->data['container'] = 'dashboard/index';
        $this->load->view('main_page', $this->data);
    }
}