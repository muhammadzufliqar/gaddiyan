<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Memento admin Controller
 *
 * This class handles user account related functionality
 *
 * @package		Show
 * @subpackage	ShowModelCore
 * @author		webhelios
 * @link		http://webhelios.com
 */


class Show_model_core extends CI_Model 

{

	function __construct()

	{

		parent::__construct();

		$this->load->database();
	}











	function get_all_active_blog_posts_by_range($start,$limit='',$sort_by='',$sort='desc',$type="all")







    {







        if($type!='all')



            $this->db->where('type',$type);







        $this->db->order_by($sort_by, $sort);







        $this->db->where('status',1); 







        if($start==='all')







        {







            $query = $this->db->get('blog');







        }







        else







        {







            $query = $this->db->get('blog',$limit,$start);







        }







        return $query;







    }







    







    function count_all_active_blog_posts($type="all")







    {







        if($type!='all')



            $this->db->where('type',$type);







        $this->db->where('status',1);







        $query = $this->db->get('blog');







        return $query->num_rows();







    }











	function get_all_active_posts_by_range($start,$limit='',$sort_by='',$sort='desc')







	{







		$this->db->order_by($sort_by, $sort);







		$this->db->where('status',1); 







		if($start==='all')







		{







			$query = $this->db->get('posts');







		}







		else







		{







			$query = $this->db->get('posts',$limit,$start);







		}







		return $query;







	}







	







	function count_all_active_posts()







	{







		$this->db->where('status',1);







		$query = $this->db->get('posts');







		return $query->num_rows();







	}















	#get all recent cars information







	#set a big number as the limit value to get all the records from start to the end







    function get_recent_cars($start,$limit='10',$order_by='id',$order_type='desc') {







    	







    	$this->db->order_by($order_by,$order_type);







		if($this->session->userdata('view_orderby')!='')







		{







			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';







			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';







			$this->db->order_by($order_by,$order_type);







		}



		else



			$this->db->order_by($order_by,$order_type);















    	if($start==='all')







		{







			$query = $this->db->get('posts');







		}







		else







		{







			//$this->db->offset($start);







			$query = $this->db->get('posts',$limit,$start);







		}







		







		return $query;







    }























    #get all featured cars information







	#set a big number as the limit value to get all the records from start to the end







    function get_featured_cars($start,$limit='10',$order_by='id',$order_type='desc') {







    	











		if($this->session->userdata('view_orderby')!='')







		{







			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';







			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';







			$this->db->order_by($order_by,$order_type);







		}



		else



			$this->db->order_by($order_by,$order_type);







    	$this->db->where('featured',1);



    	$this->db->where('status',1);















    	if($start==='all')







		{







			$query = $this->db->get('posts');







		}







		else







		{







			$query = $this->db->get('posts',$limit,$start);







		}















		return $query;







    }















    function get_cars_by_agent($agent_id, $start='all', $limit='10') {







    	







    	$this->db->order_by('id','desc');







    	$this->db->where('created_by',$agent_id);















    	if($start==='all')







		{







			$query = $this->db->get('posts');







		}







		else







		{







			$query = $this->db->get('posts',$limit,$start);







		}







		return $query;







    }















    function get_plain_search_result($search_string) {







    	







    	#format the search string for fulltext search







    	$search_string = trim($search_string);







    	$search_string = explode(" ", $search_string);















		$sql = "SELECT * FROM ".$this->db->dbprefix('posts')." WHERE ";







		$flag = 0;







		foreach ($search_string as $key) {







			if($flag==0) {







				$flag = 1;







			}







			else {







				$sql .= "OR ";







			}







			$sql .= "search_meta LIKE '%".$key."%' ";















		}















		$sql .= "ORDER BY ";







		







		$flag = 0;







		foreach ($search_string as $key) {







			if($flag==0) {







				$flag = 1;







				$sql .= "case when search_meta LIKE '%".$key."%' ". "then 1 else 0 end ";







			}







			else {







				







				$sql .= "+ case when search_meta LIKE '%".$key."%' ". "then 1 else 0 end ";







			}















		}















		$sql .= "DESC LIMIT 0,8";		















	    $query = $this->db->query($sql);















	    return $query;







    }















    function get_latitude_longitude($address) {







    	







    	$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$address."&sensor=false";















		$ch = curl_init();







		curl_setopt($ch, CURLOPT_URL, $details_url);







		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);







		$response = json_decode(curl_exec($ch), true);















		// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST







		if ($response['status'] != 'OK') {







			return null;







		}















		//print_r($response);







		//print_r($response['results'][0]['geometry']['location']);















		$latLng = $response['results'][0]['geometry']['location'];















		return $latLng;







    }















    function get_advanced_search_result($data,$start = '0',$limit = '10') {



    	





    	if(isset($data['plainkey']) && trim($data['plainkey'])!='') {















    		$search_string = rawurldecode($data['plainkey']);







    		$search_string = trim($search_string);







			$search_string = explode(" ", $search_string);







    		







    		$sql = "";







    		$flag = 0;















    		foreach ($search_string as $key) {







			if($flag==0) {







				$flag = 1;







			}







			else {







				$sql .= "AND ";







			}







			$sql .= "search_meta LIKE '%".$key."%' ";















			}















			$this->db->where($sql);







    	}





    	$string_for_lat_long = "";







		if(isset($data['car_type']) && trim($data['car_type'])!='') {







			$this->db->where('car_type', rawurldecode($data['car_type']));







    	}











    	if(isset($data['brand']) && trim($data['brand'])!='') {







			$this->db->where('brand', rawurldecode($data['brand']));







    	}











    	if(isset($data['model']) && trim($data['model'])!='') {







			$this->db->where('model', rawurldecode($data['model']));







    	}











    	if(isset($data['year_from']) && trim($data['year_from'])!='') {







    		$this->db->where('year >=', $data['year_from']);







    	}















    	if(isset($data['year_to']) && trim($data['year_to'])!='') {







    		$this->db->where('year <=', $data['year_to']);







    	}











    	if(isset($data['condition']) && trim($data['condition'])!='') {







			$this->db->where('condition', rawurldecode($data['condition']));







    	}











    	if(isset($data['mileage_min']) && trim($data['mileage_min'])!='') {







    		$this->db->where('mileage >=', $data['mileage_min']);







    	}















    	if(isset($data['mileage_max']) && trim($data['mileage_max'])!='') {







    		$this->db->where('mileage <=', $data['mileage_max']);







    	}











    	if(isset($data['transmission']) && trim($data['transmission'])!='') {







			$this->db->where('transmission', rawurldecode($data['transmission']));







    	}











    	if(isset($data['price_min']) && trim($data['price_min'])!='') {







    		$this->db->where('price >=', $data['price_min']);







    	}















    	if(isset($data['price_max']) && trim($data['price_max'])!='') {







    		$this->db->where('price <=', $data['price_max']);







    	}











    	if(isset($data['engine_type']) && trim($data['engine_type'])!='') {







			$this->db->where('engine_type', $data['engine_type']);







    	}











    	if(isset($data['fuel_type']) && trim($data['fuel_type'])!='') {







			$this->db->where('fuel_type', $data['fuel_type']);







    	}





    	if($this->session->userdata('view_orderby')!='')



		{







			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';







			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';







			$this->db->order_by($order_by,$order_type);







		}







		$this->db->where('status','1');







    	$query = $this->db->get('posts',$limit,$start);







	    return $query;







    }















    function count_search_result($data) {











    	if(isset($data['plainkey']) && trim($data['plainkey'])!='') {















    		$search_string = rawurldecode($data['plainkey']);







    		$search_string = trim($search_string);







			$search_string = explode(" ", $search_string);







    		







    		$sql = "";







    		$flag = 0;















    		foreach ($search_string as $key) {







			if($flag==0) {







				$flag = 1;







			}







			else {







				$sql .= "AND ";







			}







			$sql .= "search_meta LIKE '%".$key."%' ";















			}















			$this->db->where($sql);







    	}















    	$string_for_lat_long = "";















    	// if(isset($data['country']) && trim($data['country'])!='') {







    	// 	$string_for_lat_long .= $data['country']."+";







    	// 	$this->db->where('country', $data['country']);







    	// }















    	// if(isset($data['state']) && trim($data['state'])!='') {







    	// 	$string_for_lat_long .= $data['state']."+";







    	// 	$this->db->where('state', $data['state']);







    	// }















    	// if(isset($data['city']) && trim($data['city'])!='') {







    	// 	$string_for_lat_long .= $data['city']."+";







    	// 	$this->db->where('city', $data['city']);







    	// }















		if(isset($data['car_type']) && trim($data['car_type'])!='') {







			$this->db->where('car_type', rawurldecode($data['car_type']));







    	}











    	if(isset($data['brand']) && trim($data['brand'])!='') {







			$this->db->where('brand', rawurldecode($data['brand']));







    	}











    	if(isset($data['model']) && trim($data['model'])!='') {







			$this->db->where('model', rawurldecode($data['model']));







    	}











    	if(isset($data['year_from']) && trim($data['year_from'])!='') {







    		$this->db->where('year >=', $data['year_from']);







    	}















    	if(isset($data['year_to']) && trim($data['year_to'])!='') {







    		$this->db->where('year <=', $data['year_to']);







    	}











    	if(isset($data['condition']) && trim($data['condition'])!='') {







			$this->db->where('condition', $data['condition']);







    	}











    	if(isset($data['mileage_min']) && trim($data['mileage_min'])!='') {







    		$this->db->where('mileage >=', $data['mileage_min']);







    	}















    	if(isset($data['mileage_max']) && trim($data['mileage_max'])!='') {







    		$this->db->where('mileage <=', $data['mileage_max']);







    	}











    	if(isset($data['transmission']) && trim($data['transmission'])!='') {







			$this->db->where('transmission', $data['transmission']);







    	}











    	if(isset($data['price_min']) && trim($data['price_min'])!='') {







    		$this->db->where('price >=', $data['price_min']);







    	}















    	if(isset($data['price_max']) && trim($data['price_max'])!='') {







    		$this->db->where('price <=', $data['price_max']);







    	}











    	if(isset($data['engine_type']) && trim($data['engine_type'])!='') {







			$this->db->where('engine_type', $data['engine_type']);







    	}











    	if(isset($data['fuel_type']) && trim($data['fuel_type'])!='') {







			$this->db->where('fuel_type', $data['fuel_type']);







    	}











    // 	if(isset($data['radius']) && trim($data['radius'])!='') {















    // 		$string_for_lat_long = rtrim($string_for_lat_long, "+");















    // 		$lat_long = $this->get_latitude_longitude($string_for_lat_long);















    // 		if($lat_long != null) {















	   //  		$radius_condition = "((ACOS(SIN(".$lat_long['lat']." * PI() / 180) *







	   //  			 SIN(latitude * PI() / 180) + COS(".$lat_long['lat']." * PI() / 180) *







	   //  			 COS(latitude * PI() / 180) * 







	   //  			 COS((".$lat_long['lng']." - longitude) * PI() / 180)) * 180 / PI())) <= ";















				// $this->db->where($radius_condition,$data['radius']);















    // 		}







    		



    // 	}







    	$this->db->where('status','1');







    	$query = $this->db->get('posts');















	    return $query->num_rows();







    }















    function get_properties_by_range($start,$limit='',$sort_by='',$sort='desc')



	{



		if($this->session->userdata('view_orderby')!='')



		{



			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';



			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';

			$this->db->order_by($order_by,$order_type);

		}



		else



		$this->db->order_by($sort_by,$sort);	

		$this->db->where('status !=',0); 



		if($start==='all')

		{



			$query = $this->db->get('posts');

		}

		else

		{

			$query = $this->db->get('posts',$limit,$start);

		}

		return $query;

	}







	







	function count_properties()







	{







		$this->db->where('status !=',0);







		$query = $this->db->get('posts');







		return $query->num_rows();







	}























	function get_featured_properties_by_range($start,$limit='',$sort_by='',$sort='desc')







	{







		if($this->session->userdata('view_orderby')!='')







		{







			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';







			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';







			$this->db->order_by($order_by,$order_type);







		}



		else



		{



			$this->db->order_by($sort_by,$sort);



		}















		$this->db->where('featured',1);







		$this->db->where('status !=',0); 







		if($start==='all')







		{







			$query = $this->db->get('posts');







		}







		else







		{







			$query = $this->db->get('posts',$limit,$start);







		}







		return $query;







	}







	







	function count_featured_properties()







	{







		$this->db->where('featured',1);







		$this->db->where('status !=',0);







		$query = $this->db->get('posts');







		return $query->num_rows();







	}















	function get_properties_by_type_range($type,$start,$limit='',$sort_by='',$sort='desc')







	{







		if($this->session->userdata('view_orderby')!='')







		{







			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';







			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';







			$this->db->order_by($order_by,$order_type);







		}



		else



			$this->db->order_by($sort_by,$sort);















		$this->db->where('car_type',$type);







		$this->db->where('status =',1); 







		if($start==='all')







		{







			$query = $this->db->get('posts');







		}







		else







		{







			$query = $this->db->get('posts',$start,$limit);







		}






		return $query;







	}







	







	function count_properties_by_type($type)







	{







		$this->db->where('car_type',$type);







		$this->db->where('status !=',0);







		$query = $this->db->get('posts');







		return $query->num_rows();







	}















	function get_properties_by_purpose_range($purpose,$start,$limit='',$sort_by='',$sort='desc')



	{



		if($this->session->userdata('view_orderby')!='')

		{

			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';

			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';

			$this->db->order_by($order_by,$order_type);

		}

		else

	    $this->db->order_by($sort_by,$sort);

		$this->db->where('purpose',$purpose);

		$this->db->where('status !=',0); 

		if($start==='all')

		{

			$query = $this->db->get('posts');

		}

		else

		{

			$query = $this->db->get('posts',$limit,$start);

		}

		return $query;

	}





	function count_properties_by_purpose($purpose)



	{

		$this->db->where('purpose',$purpose);

		$this->db->where('status !=',0);

		$query = $this->db->get('posts');

		return $query->num_rows();



	}







	function get_post_by_unique_id($unique_id)



	{



		$query = $this->db->get_where('posts',array('id'=>$unique_id));

		return $query;

	}





	function get_page_by_alias($alias)

    {

    	$query = $this->db->get_where('pages',array('alias'=>$alias));

    	return $query;

    }





    function get_alias_by_url($url)



    {



    	$query = $this->db->get_where('pages',array('content_from'=>'Url','url'=>$url));

    	if($query->num_rows()>0)

    	{

    		$row = $query->row();

    		return $row->alias;

    	}



    	else

    		return '';



    }







    function get_page_by_url($url)

    {



    	$query = $this->db->get_where('pages',array('url'=>$url));

    	return $query;

    }







    function get_user_by_userid($user_id)

    {



    	$query = $this->db->get_where('users',array('id'=>$user_id));

    	return $query;

    }





    function get_users_by_range($start,$limit='',$sort_by='',$sort='asc')



    {

    	if($this->input->post('dealer_key')!='')
        {

            $key = $this->input->post('dealer_key');
            $this->db->where("(`first_name` LIKE '%$key%' OR `last_name` LIKE '%$key%' OR `user_email` LIKE '%$key%')");

        }

        $this->db->order_by($sort_by, $sort);
        $this->db->where('status',1);
        if($start==='all')
        {
            $query = $this->db->get('users');
        }
        else
        {
            $query = $this->db->get('users',$limit,$start);
        }
        #echo "<pre>";print_r($query->result());die;
        return $query;
    }





    function count_users()

    {



    	if($this->input->post('dealer_key')!='')

        {



            $key = $this->input->post('dealer_key');

            $this->db->where("(`first_name` LIKE '%$key%' OR `last_name` LIKE '%$key%' OR `user_email` LIKE '%$key%')");

        }



        $this->db->where('status',1);

        $query = $this->db->get('users');

        return $query->num_rows();

    }





    function get_all_cars_agent($user_id,$start,$limit,$order_by='id',$order_type='asc')

	{



		if($this->session->userdata('view_orderby')!='')

		{



			$order_by 	= ($this->session->userdata('view_orderby')!='')?$this->session->userdata('view_orderby'):'id';

			$order_type = ($this->session->userdata('view_ordertype')!='')?$this->session->userdata('view_ordertype'):'ASC';

			$this->db->order_by($order_by,$order_type);



		}

		else



		$this->db->order_by($order_by,$order_type);

		$this->db->where('created_by',$user_id);

		$this->db->where('status',1);

		$query = $this->db->get('posts',$limit,$start);

		return $query;

	}















	function count_all_cars_agent($user_id)







	{







		$this->db->where('created_by',$user_id);



		$this->db->where('status',1);







		$query = $this->db->get('posts');







		return $query->num_rows();







	}





 function get_city_vehicle()



	{

		

	    $this->db->select('COUNT(a.id) AS num,a.name');

		$this->db->from('locations AS a');

        $this->db->join('posts AS b', 'a.id = b.loc_id');

		$this->db->where('a.status',1);

		$this->db->where('a.type','city');

        $this->db->group_by('a.id');

		$query = $this->db->get();

		

		return $query->result();



	}

	

	function get_vehicle($id,$limit,$start)



	{

		$this->db->select('*');

        $this->db->from('posts AS a');

		$this->db->where('a.status',1);

		$this->db->where('a.vehicle_type',$id);

		$this->db->limit($limit,$start);

		$query = $this->db->get();

		if($query->num_rows() > 0){

		return $query->result();

		}



	}

	

	 function get_search($post,$limit,$start)



	{

		

		        $this->db->select('*');

				$this->db->from('posts AS a');

				$this->db->where('a.status',1);

				if(!empty($post['condition'])){

				$this->db->where('a.condition',$post['condition']);

				}

				if(!empty($post['brand'])){

				$this->db->where('a.brand',$post['brand']);

				}

				if(!empty($post['model'])){

				$this->db->where('a.model',$post['model']);

				}

				if(!empty($post['year'])){

				$this->db->where('a.year',$post['year']);

				}

				if(!empty($post['transmission'])){

				$this->db->where('a.transmission',$post['transmission']);

				}

				if(!empty($post['price'])){

				$this->db->where('a.price',$post['price']);

				}

				if(!empty($post['city'])){

				$this->db->where('a.loc_id',$post['city']);

				}

				if(!empty($post['fuel_type'])){

				$this->db->where('a.fuel_type',$post['fuel_type']);

				}

				if(!empty($post['engine_size'])){

				$this->db->where('a.engine_size',$post['engine_size']);

				}

				if(!empty($post['exterior_color'])){

				$this->db->where('a.exterior_color',$post['exterior_color']);

				}

				

				if(!empty($limit)){

				$this->db->limit($limit,$start);

				}

				$query = $this->db->get();

				if($query->num_rows() > 0){

				return $query->result();

				}

		

	}





	

	function count_vehicle($id)



	{

		$this->db->select('*');

        $this->db->from('posts AS a');

		$this->db->where('a.status',1);

		$this->db->where('a.vehicle_type',$id);

		$query = $this->db->get();

		if($query->num_rows() > 0){

		return $query->num_rows();

		}



	}
	
	function count_type_vehicle($type)



	{

		$this->db->select('*');

        $this->db->from('posts AS a');

		$this->db->where('a.status',1);

		$this->db->where('a.car_type',$type);

		$query = $this->db->get();

		if($query->num_rows() > 0){

		return $query->num_rows();

		}



	}


function get_content($type,$start,$limit='')

    {
         $this->db->select('*');

				$this->db->from('blog AS a');

				$this->db->where('a.status',1);

				$this->db->where('a.type',$type);

				if(!empty($limit)){

				$this->db->limit($limit,$start);

				}

				$query = $this->db->get();

				if($query->num_rows() > 0){

				return $query->result();

				}


    }



function get_contact($limit='')

    {
         $this->db->select('*');

				$this->db->from('contact');
				
				if(!empty($limit)){

				$this->db->limit($limit,$start);

				}

				$query = $this->db->get();

				if($query->num_rows() > 0){

				return $query->result();

				}


    }
	
	function insert_newsletter($data)
	{
		$this->db->insert('newsletter',$data);
		return $this->db->insert_id();
	}

	function check_newsletter($email)
	{
		$query = $this->db->get_where('newsletter',array('email'=>$email));
		
		if($query->num_rows() > 0)
		{
			return  1;
		}
		else
		{
			return 0;
		}
	}



}















/* End of file install.php */







/* Location: ./application/modules/show/models/show_model_core.php */