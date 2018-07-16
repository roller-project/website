<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Upload extends Admin {

	function __construct()
	{
		parent::__construct();
		
	}

	public function manager(){

	}

	public function model(){
		$file = glob(FCPATH.'uploads/*');
		$files = [];
		foreach ($file as $key => $value) {
			$path = str_replace(FCPATH, '', $value);
			$files[] = ["name" => basename($path), "paths" => $path, "url" => store_url($path)];
		}
		return $this->load->view("upload/manager",["flash" => $this->get_flash(), "file" => $files]);
	}

	public function validate_upload(){

		$config['upload_path']          = FCPATH.'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('uploadfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                
                $this->flash("error","Upload Error");
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                
                $this->flash("success","Upload success");
        }

		redirect(admin_url("upload/model"));
	}

	public function remove(){
		
	}
}
