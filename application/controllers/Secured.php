<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Secured extends CI_Controller
{
    public $data = [];
    
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->lang->load('auth');
                 $this->load->model('Admin_model');
	}
        
        
        public function index()
	{
            
            $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'home', $this->data);

	}
        
        public function new_category(){
             if($this->input->post('submit') != NULL ){
                
                   $postData = $this->input->post();
                   $this->data['response'] = $this->Admin_model->newCategory($postData);
             }
            
             $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'new_category', $this->data);
        }
        
        public function all_categories(){
            $this->data['categories']=$this->Admin_model->viewCategories();
            $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'all_categories', $this->data);
        }
        
        
        public function new_location(){
             if($this->input->post('submit') != NULL ){
                
                   $postData = $this->input->post();
                   $this->data['response'] = $this->Admin_model->newLocation($postData);
             }
            
             $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'new_location', $this->data);
        }
        
        public function all_location(){
            $this->data['locations']=$this->Admin_model->viewLocations();
            $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'all_location', $this->data);
        }
        
        public function new_story(){
            $this->data['locations']=$this->Admin_model->viewLocations();
            $this->data['categories']=$this->Admin_model->viewCategories();
            if($this->input->post('submit') != NULL ){
                
                   $postData = $this->input->post();
                   $config['upload_path'] = './uploads/';
                   $config['allowed_types'] = 'gif|jpg|png';
                   $config['max_size'] = '4000';
                   $this->upload->initialize($config);
                   if ( ! $this->upload->do_upload('image'))
                    {
                       $this->data['error'] = $this->upload->display_errors();
                    }
                    else
                    {
                        $postData['image'] = $this->upload->data()['file_name'];
                        $this->data['response'] = $this->Admin_model->newStory($postData);
                    }
                   
             }
            $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'new_story', $this->data);
        }
        
        
        public function all_stories(){
            if ($this->ion_auth->is_admin())
            {
                $this->data['stories']=$this->Admin_model->viewStory();
            }
            else{
                $this->data['stories']=$this->Admin_model->getStoryByUserID($this->ion_auth->user()->row()->id);
            }
             $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'all_stories', $this->data);
        }
        
        
        public function publish_story($id){
            $this->Admin_model->publish_story($id);
            $this->session->set_flashdata('message', 'Stroy has been published successfuly');
            redirect('Secured/all_stories', 'refresh'); 
        }
        
        public function unpublish_story($id){
            $this->Admin_model->unpublish_story($id);
            $this->session->set_flashdata('message', 'Stroy has been unpublished successfuly');
            redirect('Secured/all_stories', 'refresh');
        }
        
        
        public function new_user(){
             $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'new_user', $this->data);
        }
        
        public function view_users() {
             $this->_render_page('admin' . DIRECTORY_SEPARATOR . 'view_users', $this->data);
        }
        
        	/**
	 * @param string     $view
	 * @param array|null $data
	 * @param bool       $returnhtml
	 *
	 * @return mixed
	 */
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