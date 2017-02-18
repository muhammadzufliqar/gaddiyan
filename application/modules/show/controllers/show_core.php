<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Memento admin Controller
 *
 * This class handles user account related functionality
 *
 * @package		Show
 * @subpackage	ShowCore
 * @author		webhelios
 * @link		http://webhelios.com
 */



class Show_core extends CI_controller {

	var $PER_PAGE = 2;
	var $active_theme = '';
	public function __construct()
	{

		parent::__construct();
		is_installed(); #defined in auth helper		

		$this->PER_PAGE = get_per_page_value();#defined in auth helper

		$this->active_theme = get_active_theme();

		$this->load->model('show_model');

		 $this->load->library('pagination');

        #$this->load->model('user/user_model');

		$this->load->library('encrypt');

		$this->load->helper('captcha');



		if(isset($_POST['view_orderby']))

		{

			$this->session->set_userdata('view_orderby',$this->input->post('view_orderby'));

		}

		if(isset($_POST['view_ordertype']))

		{

			$this->session->set_userdata('view_ordertype',$this->input->post('view_ordertype'));

		}

        $system_currency_type = get_settings('autocon_settings','system_currency_type',0);

        if($system_currency_type == 0){

            $system_currency = get_currency_icon(get_settings('autocon_settings','system_currency','USD'));

        }

        else{

            $system_currency = get_settings('autocon_settings','system_currency','USD');

        }

        $this->session->set_userdata('system_currency',$system_currency);

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    

	}



	public function index()

	{



		$this->posts();	


	}







	public function post($type='all',$start=0)



	{			



		$this->config->load('autocon');



		$options 				= $this->config->item('blog_post_types');



		$value['posts']			= $this->show_model->get_all_active_blog_posts_by_range($start,$this->PER_PAGE,'id','desc',$type);



		$total 					= $this->show_model->count_all_active_blog_posts($type);



		$value['pages']			= configPagination('show/post/'.$type,$total,5,$this->PER_PAGE);



		$value['page_title']	= (isset($options[$type]))?$options[$type]:$type;



		$data['sub_title']		= (isset($options[$type]))?$options[$type]:$type;



		$data['content'] 		= load_view('posts_view',$value,TRUE);



		load_template($data,$this->active_theme);







	}





	public function postdetail($id='')



	{			



		$this->load->model('admin/blog_model');

		$value['blogpost']			= $this->blog_model->get_post_by_id($id);

		if(isset($value['blogpost']->title) && $value['blogpost']->status!=0) {

			$data['sub_title']			= $value['blogpost']->title;

			$data['content'] 			= load_view('post_detail_view',$value,TRUE);

		}

		else {

			$data['sub_title']			= '';

			$data['content'] 			= load_view('post_detail_view',array(),TRUE);	

		}

		load_template($data,$this->active_theme);

	}





	public function posts($start=0)



	{			



		$value['recents']		=  $this->show_model->get_properties_by_range($start,$this->PER_PAGE,'id','desc');

		$value['featured']		=  $this->show_model->get_featured_properties_by_range($start,'','id','desc');

        $value['loc']		=  $this->show_model->get_city_vehicle();

        $value['view_style'] = 'grid';

		$data['content'] 	= load_view('home_view',$value,TRUE);

		$data['alias']	    = 'dbc_home';
        
		$data['home_contact']      =  $this->show_model->get_contact(1); 
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);
				
		$data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');

		load_template($data,$this->active_theme);

	}

	public function type()



	{		
        
        $type = $this->uri->segment(4);
		
		$total   = $this->show_model->count_type_vehicle($type);
		
		$segment = $this->uri->segment(5);
		
		$config["base_url"] = site_url().'/show/type/'.$type.'/';

		$config["uri_segment"] = 5;

		$config["per_page"] = 8;

	    $config['total_rows'] = $total;

		$config['num_links'] = $total;

		

		$config['next_link'] = '<span>></span>';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';

	

		$config['prev_link'] = '<span><</span>';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

	

		$config['cur_tag_open'] = '<li><a href="" class="active">';

		$config['cur_tag_close'] = '</a></li>';

	

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';



		

        $this->pagination->initialize($config);



        $page = ($segment) ? $segment : 0;

		$data['content']	  = $this->show_model->get_properties_by_type_range($type,$config["per_page"] ,$page,'id');

        $data['body_class']   = 'm-listingsTwo';

        $data['alias']	      = $type .' Vehicle';
		
		$data['rec']          =  $total;

        $data["pages"]        = $this->pagination->create_links();
		
		$data['home_contact']      =  $this->show_model->get_contact(1);
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);

       	$data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');

		load_template($data,$this->active_theme,'general_view');

	}
 public function list_view($type)



    {

        if($type == 'car'){

		    $id = 1;	

		}else{

		    $id = 2;	

		}

		

        $total   = $this->show_model->count_vehicle($id);

        $segment = $this->uri->segment(5);

		$config["base_url"] = site_url().'/show/list_view/'.$type.'/';

		$config["uri_segment"] = 5;

		$config["per_page"] = 8;

	    $config['total_rows'] = $total;

		$config['num_links'] = $total;

		

		$config['next_link'] = '<span>></span>';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';

	

		$config['prev_link'] = '<span><</span>';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

	

		$config['cur_tag_open'] = '<li><a href="" class="active">';

		$config['cur_tag_close'] = '</a></li>';

	

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';



		

        $this->pagination->initialize($config);



        $page = ($segment) ? $segment : 0;

		$data['content']	  = $this->show_model->get_vehicle($id,$config["per_page"] ,$page);

	

       /* echo '<pre>';

        print_r($data['content']);*/

		//$data['content'] 	= load_view('home_view',$value,TRUE);

        $data['body_class']   = 'm-listingsTwo';

        $data['alias']	      = 'Vehicle';
		
		$data['rec']          =  $total;

        $data["pages"]        = $this->pagination->create_links();
		
		$data['home_contact']      =  $this->show_model->get_contact(1);
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);

       	$data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');

		load_template($data,$this->active_theme,'list_view');

 }



	public function detail($unique_id='')
	{	

//		$captcha = $this->get_new_captcha();
//
//		$this->session->set_userdata('captcha_word',$captcha['word']);
//
//		$data['captcha_img']	= $captcha['image'];

     	$data['post']		= $this->show_model->get_post_by_unique_id($unique_id);
   
        //  load_view('detail_view',$value,TRUE);

		//$data['alias']	    = 'detail';
		$data['home_contact']      =  $this->show_model->get_contact(1);
		
        $data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');
		
		load_template($data,$this->active_theme,'detail_view');

	}




	public function contact()



	{



		$data['content'] 	= load_view('contact_view','',TRUE);

		$data['alias']	    = 'contact';
		
		$data['home_contact']      =  $this->show_model->get_contact(1);
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);
        
        $data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');
		
		load_template($data,$this->active_theme,'contact_view');

	}



	public function search()



	{

		$this->load->model('admin/autocon_model');

		$data['data']		= array();

		$total   = count($this->show_model->get_search($this->input->post()));

	    $segment = $this->uri->segment(4);

		$config["base_url"] = site_url().'/show/search/';

		$config["uri_segment"] = 4;

		$config["per_page"] = 8;

	    $config['total_rows'] = $total;

		$config['num_links'] = $total;

		

		$config['next_link'] = '<span>></span>';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';

	

		$config['prev_link'] = '<span><</span>';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

	

		$config['cur_tag_open'] = '<li><a href="" class="active">';

		$config['cur_tag_close'] = '</a></li>';

	

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';



		

        $this->pagination->initialize($config);



        $page = ($segment) ? $segment : 0;

		$data['content']	= $this->show_model->get_search($this->input->post(),$config["per_page"] ,$page);

		

		$total = $this->show_model->count_properties();

		$data["pages"]      = $this->pagination->create_links();

		$data['alias']	    = 'search';
		
		$data['rec']          =  $total;

		$data['loc']        = $this->autocon_model->get_all_city();
		
		$data['home_contact']      =  $this->show_model->get_contact(1); 
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);

		$data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');

		load_template($data,$this->active_theme,'search_view');		

	}

	public function dealer($start='0')

	{

        $total 			= count($this->show_model->get_users_by_range());
		
	    $segment = $this->uri->segment(4);

		$config["base_url"] = site_url().'/show/dealer/';

		$config["uri_segment"] = 4;

		$config["per_page"] = 8;

	    $config['total_rows'] = $total;

		$config['num_links'] = $total;

		$config['next_link'] = '<span>></span>';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '<span><</span>';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li><a href="" class="active">';

		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($segment) ? $segment : 0;	

		$data['query']	= $this->show_model->get_users_by_range($config["per_page"] ,$page);

		$data["pages"]      = $this->pagination->create_links();

		$data['alias']	    = 'dealer';
		
		$data['home_contact']      =  $this->show_model->get_contact(1);
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);

		$data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');

		load_template($data,$this->active_theme,'agent_view');	

	}


   public function content()

	{

        $type    = $this->uri->segment(4);

        $total 			   = count($this->show_model->get_content($type,'',''));
 
        $segment = $this->uri->segment(5);

		$config["base_url"] = site_url().'/show/content/'.$type;

		$config["uri_segment"] = 5;

		$config["per_page"] = 8;

	    $config['total_rows'] = $total;

		$config['num_links'] = $total;

		$config['next_link'] = '<span>></span>';

		$config['next_tag_open'] = '<li>';

		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '<span><</span>';

		$config['prev_tag_open'] = '<li>';

		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li><a href="" class="active">';

		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';		

        $this->pagination->initialize($config);

        $page = ($segment) ? $segment : 0;	

		$data['query']	= $this->show_model->get_content($type,$config["per_page"] ,$page);

		$data["pages"]      = $this->pagination->create_links();

		$data['alias']	    = $type;
		
		$data['home_contact']      =  $this->show_model->get_contact(1);
		
		$data['about']	= $this->show_model->get_content('about',0 ,1);
				
		$data['footer_latest']		=  $this->show_model->get_properties_by_range(0,3,'id','desc');

		load_template($data,$this->active_theme,'content');	

	}


	public function newsletter()
		{	
	
				$data 					= array();			
				$data['email'] 			= $this->input->post('email');
				if(!empty($data['email']) and filter_var($data['email'] , FILTER_VALIDATE_EMAIL) == true){
				$rec = $this->show_model->check_newsletter($data['email']);
				if($rec == 1)
				{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">Email already exists.</div>');
				}
				else
				{
	
					$this->show_model->insert_newsletter($data);
					$this->session->set_flashdata('msg', '<div class="alert alert-success">You has been subscribe successfully.</div>');
				}
				}else{
		$this->session->set_flashdata('msg', '<div class="alert alert-warning">Please enter valid email.</div>');		
				}
				redirect(site_url('#newsletter'));		
		
		}

	public function sendemailtoagent($agent_id='0')

	{



		$this->form_validation->set_rules('sender_name', 'Name', 'required');

		$this->form_validation->set_rules('sender_email', 'Email', 'required|valid_email');

		$this->form_validation->set_rules('subject', 'Subject', 'required');

		$this->form_validation->set_rules('msg', 'Message', 'required');

		$this->form_validation->set_rules('captcha_ans', 'Code', 'required|callback_check_captcha_code');

		$unique_id 	= $this->input->post('unique_id');		

		$title 		= $this->input->post('title');		

		if ($this->form_validation->run() == FALSE)

		{

			$this->detail($unique_id,$title);	

		}



		else

		{



			$data['sender_email'] = $this->input->post('sender_email');

			$data['sender_name']  = $this->input->post('sender_name');

			$data['subject']  	  = $this->input->post('subject');

			$data['msg']  		  = $this->input->post('msg');

			$data['msg']		 .= "<br /><br /> This email was sent from the following page:<br /><a href=\"".site_url('show/detail/'.$unique_id.'/'.$title)."\" target=\"_blank\">".site_url('show/detail/'.$unique_id.'/'.$title)."</a>";



			add_user_meta($agent_id,'query_email#'.time(),json_encode($data));



			$this->load->library('email');

			$config['mailtype'] = "html";

			$config['charset'] 	= "utf-8";

			$this->email->initialize($config);

			$this->email->from($this->input->post('sender_email'),$this->input->post('sender_name'));

			$this->email->to(get_user_email_by_id($agent_id));

			$detail_link = site_url('show/detail/'.$unique_id);

			$msg = $this->input->post('msg');

			$msg .= "<br/><br/>Email sent from : ".'<a href="'.$detail_link.'">'.$detail_link.'</a>';

			$this->email->subject($this->input->post('subject'));

			$this->email->message($msg);

			$this->email->send();

			$this->session->set_flashdata('msg', '<div class="alert alert-success">Email sent</div>');

			redirect(site_url('show/detail/'.$unique_id.'/'.$title));			

		}

	}


	public function sendcontactemail()

	{

		$this->form_validation->set_rules('user-name', 'Name', 'required');

		$this->form_validation->set_rules('user-email', 'Email', 'required|valid_email');

		$this->form_validation->set_rules('user-phone', 'Phone Number', 'required');

		$this->form_validation->set_rules('user-message', 'Message', 'required');

		if ($this->form_validation->run() == FALSE)

				{

			$this->contact();	

		}

		else

		{
			$this->load->library('email');

			$config['mailtype'] = "html";

			$config['charset'] 	= "utf-8";

			$this->email->initialize($config);

			$this->email->from($this->input->post('user-email'),$this->input->post('user-name'));

			$this->email->to(get_settings('webadmin_email','contact_email','support@example.com'));

			$this->email->subject(lang_key('contact_subject'));

			$this->email->message($this->input->post('msg'));

			$this->email->send();

			$this->session->set_flashdata('msg', '<div class="alert alert-success">Email sent</div>');

			redirect(site_url('show/contact/'));			

		}

	}

}



/* End of file install.php */

/* Location: ./application/modules/show/controllers/show_core.php */