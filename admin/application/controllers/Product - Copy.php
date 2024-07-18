<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Product_model');
    }

    public function index()
    {
        $data = array();
        $result = $this->Product_model->read();

        $data['base_url'] = base_url();
        $data['result_p'] = $result;
        $data['main_content'] = 'product/index';
        $this->load->view('common/template', $data);
    }

    public function add() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $product_category = $this->input->post('product_category');
            $config['upload_path'] = $base_url.'assets/product/'.$product_category.'/'; 
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000000; 

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('product_img')) {
                echo "<script>
                        alert('The filetype you are attempting to upload is not allowed.');
                    </script>";
                redirect($base_url.'product/add');
            } else {
                $data = $this->upload->data();
                $photo = $data['file_name'];

                $product_name = $this->input->post('product_name');
                $product_sku = $this->input->post('product_sku');
                $product_slug = $this->generate_slug($product_name); 
                $product_description = $this->input->post('product_description');
                $product_price = $this->input->post('product_price');

                $data = array(
                    'product_name' => $product_name,
                    'product_sku' => $product_sku,
                    'product_category_slug' => $product_category,
                    'product_slug' => $product_slug,
                    'photo' => $photo,
                    'description' => $product_description, 
                    'price' => $product_price
                );

                $this->Product_model->add($data);
                redirect($base_url.'product');
            }
        } else {
            $data = array();
            $data['base_url'] = base_url();
            $result = $this->Category_model->read();
            $data['result_c'] = $result;
            $data['main_content'] = 'product/add';
            $this->load->view('common/template', $data);
        }
    }

    public function edit($product_id) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $product_category = $this->input->post('product_category');
        $config['upload_path'] = $base_url.'assets/product/'.$product_category.'/'; 
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000000; 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('product_img')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error); 
        } else {
            $data = $this->upload->data();
            $photo = $data['file_name'];

            $product_name = $this->input->post('product_name');
            $product_sku = $this->input->post('product_sku');
            $product_slug = $this->generate_slug($product_name); 
            $product_description = $this->input->post('product_description');
            $product_price = $this->input->post('product_price');

            $data = array(
                'product_name' => $product_name,
                'product_sku' => $product_sku,
                'product_category_slug' => $product_category,
                'product_slug' => $product_slug,
                'photo' => $photo,
                'description' => $product_description, 
                'price' => $product_price
            );

            $this->Product_model->edit($product_id, $data);
            redirect($base_url.'product');
        }
    } else {
        $data = array();
        $data['base_url'] = base_url();
        $result = $this->Category_model->read();
        $data['result_c'] = $result;
        $product_data = $this->Product_model->get_product($product_id);
        $data['product_data'] = $product_data;
        $data['main_content'] = 'product/edit';
        $this->load->view('common/template', $data);
    }
}


    public function delete($id)
    {
        if (is_numeric($id)) {
            $status = $this->Product_model->delete($id);
            if ($status == true) {
                redirect(base_url('product/index'));
            } else {
                redirect(base_url('product/index'));
            }
        }
    }

    // Function to generate slug
    private function generate_slug($product_name) {
        // Convert to lowercase
        $slug = strtolower($product_name);
        $slug = preg_replace('/\s+/', '-', $slug);
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);        
        $slug = trim($slug, '-');
        
        return $slug;
    }
}
?>
