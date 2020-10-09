<?php
class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('session');
		
	}
    
	public function authenticate($email, $password) {
		// $query = $this->db->get_where("users", array('email' => $email));
		$query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
		
		$row = $query->row_array();

		if (isset($row)) {
	    if($password == $row['password']){
				$_SESSION['firstname'] = $row['firstname'];
                $_SESSION['username'] = $row['username'];
				$_SESSION['lastname'] = $row['lastname'];
				$_SESSION['img1'] = $row['img'];
				return true;
			}
			
			
		} else {
			return FALSE;
		}
	}

	public function verifyemail($email,$vkey){
		$data = array('verified' => 1);
    $this->db->where('email', $email);
    $this->db->where('vkey', $vkey);
    return $this->db->update('users', $data);
	}

	public function new_password($email,$password){
		$data = array('password' => $password);
    $this->db->where('email', $email);
    return $this->db->update('users', $data);
	}

	public function img($img){
		$data = array('img' => $img);
    $this->db->where('email', $_SESSION['email']);
    return $this->db->update('users', $data);
	}

	public function new_detail($data){
		$this->db->where('email', $_SESSION['email']);
    return $this->db->update('users', $data);
	}

	public function register_user($data){
		$condition = "username =" . "'" . $data['username'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$condition1 = "email =" . "'" . $data['email'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition1);
		$this->db->limit(1);
		$query1 = $this->db->get();
		if ($query->num_rows() == 0&&$query1->num_rows() == 0) {

			// Query to insert data in database
			$this->db->insert('users', $data);
			if ($this->db->affected_rows() > 0) {
			return true;
			}
			} else {
			return false;
			}
	}

	public function find_users($email) {
		// $query = $this->db->get_where("users", array('email' => $email));
		$query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
		$row = $query->row_array();

		if (isset($row)) {
			return true;
		} else {
			return FALSE;
		}
	}

	public function get_comment() {

		$query= $this->db->select('*')->from('comment')->where('itemname', $_SESSION['itemname'])->get();
     return $query->result();
}

public function get_item() {

	$query= $this->db->select('*')->from('shopcart')->where('username', $_SESSION['username'])->get();
	 return $query->result();
}

public function delete_item($itemname){
	$this -> db -> where('username', $_SESSION['username']);
	$this -> db -> where('itemname', $itemname);
	$this -> db -> delete('shopcart');
}



	public function find_item($data){
		$condition = "itemname =" . "'" . $data['search'] . "'";
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}

	}

	public function add_item($data){
		$this->db->insert('item', $data);
	}
	public function comment($data){
		return $this->db->insert('comment', $data);
	}

	public function cart($data){
		return $this->db->insert('shopcart', $data);
	}
	
	
	public function getUsername($username){
  	$this->db->where('username' , $username);
  	$query = $this->db->get('users');
  if($query->num_rows()>0){
   return true;
  }
  else {
   return false;
  }
 }
}