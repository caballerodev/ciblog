<?php
/**
 * Created by PhpStorm.
 * User: caballero
 * Date: 18/04/17
 * Time: 01:32 AM
 */
class Posts extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Latest Posts';
        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data); //Pass $data to $page
        $this->load->view('templates/footer');
    }
}

