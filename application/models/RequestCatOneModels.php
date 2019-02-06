<?php
class RequestCatOneModels extends CI_Model
{
    /**
     * RequestCatOneModels constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }

//========================= FILE UPLOAD ==========================//
    private function image()
    {
        //images
        $config['upload_path'] = './assets/upload/images/cat_one';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->upload->initialize($config);

        $img_name = $this->input->post('img_name');
        if ( !$this->upload->do_upload('img_catone'))
        {
            $file_name = $img_name;
        }
        else
        {
            $image_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['new_image'] = APPPATH . '../assets/upload/thumb/cat_one';
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 350;
            $config['height'] = 200;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $name = $this->upload->data();
            $file_name = $name['file_name'];
            if($img_name){
                unlink('assets/upload/images/cat_one/' . $img_name);
                unlink('assets/upload/thumb/cat_one/' . $img_name);
            }
        }
        return $file_name;
    }

//========================= CATALOG ONE ==========================//
//insert
    public function insert_cat_one()
    {
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
            $description = $this->input->post('content', true);
            $img = $this->image();
            $data = array(
                "title" => $title,
                "description" => $description,
                "image_name" => $img
            );
            $this->db->insert('category_one', $data);

    }

    //update
    public function update_cat_one()
    {
            $title = $this->input->post('title', true);
            $content = $this->input->post('content', true);
            $id_cat = $this->input->post('id', true);
            $price = $this->input->post('price');
            $img = $this->image();

                $data = array(
                    'title' => $title,
                    'description' => $content,
                    'image_name' => $img,
                    'price' => $price
                );


        $this->db->where('id', $id_cat);
        $this->db->update('books', $data);
    }

    //delete
    public function delete_cat_one()
    {
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_one/' . $cat_img);
        unlink('assets/upload/thumb/cat_one/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('category_one');
    }
}