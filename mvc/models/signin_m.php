<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signin_m extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	public function signin() {
		$tables = array('student' => 'student', 'parent' => 'parent', 'teacher' => 'teacher', 'user' => 'user', 'setting' => 'setting');
		$array = array();
		$i = 0;
		$username = $this->input->post('username');
		$password = $this->hash($this->input->post('password'));
		$userdata = '';
		foreach ($tables as $table) {
			$user = $this->db->get_where($table, array("username" => $username, "password" => $password));
			$alluserdata = $user->row();

			if(count($alluserdata)) {
				$userdata = $alluserdata;
				$array['permition'][$i] = 'yes';
			} else {
				$array['permition'][$i] = 'no';
			}
			$i++;
		}

		if(in_array('yes', $array['permition'])) {
			$data = array(
				"name" => $userdata->name,
				"email" => $userdata->email,
				"usertype" => $userdata->usertype,
				"username" => $userdata->username,
				"photo" => $userdata->photo,
				"lang" => "english",
				"loggedin" => TRUE
			);
			$this->session->set_userdata($data);
			return TRUE;
		} else {
			return FALSE;
		}			
	}

	function change_password() {
		$table = strtolower($this->session->userdata("usertype"));
		if($table == "admin") {
			$table = "setting";
		}

		if($table == "accountant") {
			$table = "user";
		}
		if($table == "librarian") {
			$table = "user";
		}
		

		$username = $this->session->userdata("username");
		$old_password = $this->hash($this->input->post('old_password'));
		$new_password = $this->hash($this->input->post('new_password'));

		$user = $this->db->get_where($table, array("username" => $username, "password" => $old_password));

		$alluserdata = $user->row();

		if(count($alluserdata)) {
			if($alluserdata->password == $old_password){
				$array = array(
					"password" => $new_password
				);
				$this->db->where(array("username" => $username, "password" => $old_password));
				$this->db->update($table, $array);
				$this->session->set_flashdata('success', $this->lang->line('menu_success'));
				return TRUE; 
			}
		} else {
			return FALSE;
		}
	}

	public function signout() {
		$this->session->sess_destroy();
	}

	public function loggedin() {
		return (bool) $this->session->userdata("loggedin");
	}
}

/* End of file signin_m.php */
/* Location: .//D/xampp/htdocs/school/mvc/models/signin_m.php */