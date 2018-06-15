<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***************************
 * Created by @ajaykan47.
 * User: admin**************
 * Date: 6/7/2018**********
 * Time: 5:52 PM**************
 **************************/
class Registration_Model extends CI_Model
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
        $query = $this->db->get();
        $ret = $query->row();
        return $ret->password;
    }

    public function getRegUserType($username)
    {
        $this->db->select('reguser_type');
        $this->db->from('tbl_userregistration');
        $this->db->where('reguser_mail', $username);
        $query = $this->db->get();
        $ret = $query->row();
        return $ret->reguser_type;
    }


}