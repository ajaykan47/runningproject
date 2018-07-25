<?php
/******************************
 * Created by $Ajaykan47****
 * User: Mudrak InfoTech****
 * Date: 11/6/2017**********
 * Time: 10:38 AM*************
 *******************************
 */

class Login_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getData($tableName, $data)
    {
        $query = $this->db->get_where($tableName, $data);
        //echo $this->db->last_query(); die;
        return $query->result();

    }

    public function getUserPass($username)
    {
        $this->db->select('password');
        $this->db->from('tbl_login');
        $this->db->where('username', $username);
        $query = $this->db->get();
        $ret = $query->row();
        return $ret->password;
    }

    public function getUserType($username)
    {
        $this->db->select('user_type');
        $this->db->from('tbl_login');
        $this->db->where('username', $username);
        $query = $this->db->get();
        $ret = $query->row();
        return $ret->user_type;
    }


}