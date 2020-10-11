<?php defined('BASEPATH') or exit('not allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();        
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->slice->view('default.dashboard', $data);
    }

}