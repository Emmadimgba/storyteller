<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    
    public $data = [];
    
     public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'language']);
                 $this->load->model('Admin_model');
	}
        
	public function index()
	{
            $this->data['locations']=$this->Admin_model->viewLocations();
            $this->data['categories']=$this->Admin_model->viewCategories();
            $this->data['stories']=$this->Admin_model->viewPublishedStory();
            $this->_render_page('home', $this->data);
	}
        
        public function story($id=NULL) {
            $this->data['stories']=$this->Admin_model->viewPublishedStory();
            $this->data['story']=$this->Admin_model->getStory($id);
            $this->_render_page('storydetails', $this->data);
        }
        
        	public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{

		$viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}
}
