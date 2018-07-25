<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***************************
 * Created by @ajaykan47.
 * User: admin**************
 * Date: 6/7/2018**********
 * Time: 5:52 PM**************
 **************************/
class Registration_model extends CI_Model
{

    public function getData($tableName, $data)
    {
        $query = $this->db->get_where($tableName, $data);
        //echo $this->db->last_query(); die;
        return $query->result();

    }

    public function getRegisteredUserPass($username)
    {
        $this->db->select('resuser_password');
        $this->db->from('tbl_userregistration');
        $this->db->where('reguser_mail', $username);
        $this->db->where('status', 'Active');
        $this->db->where('delStatus', 'no');
        $query = $this->db->get();
        $ret = $query->row();

        return $ret->resuser_password;
    }

    public function getRegUserType($username)
    {
        $this->db->select('reguser_type');
        $this->db->from('tbl_userregistration');
        $this->db->where('reguser_mail', $username);
        $this->db->where('status', 'Active');
        $this->db->where('delStatus', 'no');
        $query = $this->db->get();
        $ret = $query->row();
        return $ret->reguser_type;
    }


    public function getRegUserDetailByJoining($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_userregistration as reg');
        $this->db->join('tbl_userregistrationdetail as rdt', 'rdt.reguser_id=reg.reguser_id');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

}