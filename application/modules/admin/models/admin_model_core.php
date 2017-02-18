<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**

 * Memento admin_model_core model

 *

 * This class handles admin_model_core management related functionality

 *

 * @package		Admin

 * @subpackage	admin_model_core

 * @author		webhelios

 * @link		http://webhelios.com

 */



class Admin_model_core extends CI_Model 

{

	function __construct()

	{

		parent::__construct();

		$this->load->database();

	}



	function get_user_profile($user_name)

	{

		$query = $this->db->get_where('users',array('user_name'=>$user_name));

		return $query->row();

	}



	function get_user_profile_by_id($user_id)

	{

		$query = $this->db->get_where('users',array('id'=>$user_id));

		return $query->row();

	}

	

	function update_profile($data,$id)

	{

		$this->db->update('users',$data,array('id'=>$id));

		$this->session->set_userdata('user_name',$data['user_name']);

	}
	
	function add_contact($data,$id)

	{  
		
		if(empty($id)){

		$this->db->insert('contact',$data);
		}else{
			
			$this->db->update('contact',$data,array('id'=>$id));
		}
	}
	
	function get_all_contact($id  = '')

	{
		if(empty($id)){
		$query = $this->db->get_where('contact');
		}else{
		$q = $this->db->get_where('contact',array('id'=>$id));	
		$query = $q->row();	
		}
		return $query;

	}
	
	function delete($id){
		
		
		$this->db->delete('contact',array('id'=>$id));

		
	}

	

}



/* End of file admin_model_core.php */

/* Location: ./system/application/models/admin_model_core.php */