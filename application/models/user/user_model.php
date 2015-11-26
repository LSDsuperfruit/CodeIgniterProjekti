<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class User_model extends CI_Model{
	function get_user()
	{
		$query=$this->db->get('tbluser');
		return $query->result();
	}

	function submit()
	{
		$arr = array(
			'username'=>$this->input->post('txtusername'),
			'gender'=>$this->input->post('slogender'),
			'address'=>$this->input->post('txtaddress'),
			);
		$this->db->insert('tbluser', $arr);
		if($this->db->affected_rows()>0)
		{
			redirect(base_url(). 'index.php/user/user/');
		}
	}

	function get_edit($id)
	{
		$query=$this->db->get_where('tbluser', array('user_id'=>$id));
		return $query->row();
	}
	
	function update()
	{
		$id=$this->input->post('txtid');
		$arr = array(
			'username'=>$this->input->post('txtusername'),
			'gender'=>$this->input->post('slogender'),
			'address'=>$this->input->post('txtaddress'),
			);
		$this->db->where('user_id', $id);
		$this->db->update('tbluser', $arr);
		if($this->db->affected_rows()>0)
		{
			redirect(base_url(). 'index.php/user/user');	
		}
	}

	function delete($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('tbluser');
		if($this->db->affected_rows()>0)
		{
			redirect(base_url().'user/user');
		}
	}
}