<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestCatOne extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
        $this->load->library('upload');
    }

//======================= CATALOG ONE ==========================//
    /*public function insert_cat_one()
    {
        $this->load->model('RequestCatOneModels');
        $this->RequestCatOneModels->insert_cat_one();
    }*/

    public function update_cat_one()
    {
        $this->load->model('RequestCatOneModels');
        $this->RequestCatOneModels->update_cat_one();
    }

    /*public function delete_cat_one()
    {
        $this->load->model('RequestCatOneModels');
        $this->RequestCatOneModels->delete_cat_one();
    }*/
}