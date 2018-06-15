<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 5/26/2018
 * Time: 4:35 PM
 */
class Category_model extends CI_Model
{


    public function getListByUserType()
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        if ($user_type == 1) {
            $this->db->select('*')
                ->from('tbl_category');

        } else if ($user_type == 2) {
            $this->db->select('*')
                ->from('tbl_category')
                ->where('delStatus', 'no');
        }
        $query = $this->db->get();
        return $query->result();

    }

    public function showDataById($idShow, $where, $tableName)
    {
        $this->db->select('*')
            ->from($tableName)
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function getddlCategory()
    {
        $this->db->select('cat_id,cat_name')
            ->from('tbl_category')
            ->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();

    }

    public function getListbyJoining(){

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        if($user_type==1){
            $where=array('sub.status'=>'Active');
            $this->db->select('sub.subcat_id,sub.subcat_name,sub.subcat_filename,sub.delIp,sub.created_at,sub.created_by,sub.status,sub.delDate,sub.delStatus,cat.cat_name,cat.cat_id')
                ->from('tbl_subcategory as sub')
                ->join('tbl_category as cat', 'cat.cat_id=sub.cat_id')
                ->where($where);
        }else{
            $where=array('sub.status'=>'Active','sub.delStatus'=>'no');
            $this->db->select('sub.subcat_id,sub.subcat_name,sub.subcat_filename,sub.delIp,sub.created_at,sub.created_by,sub.status,sub.delDate,sub.delStatus,cat.cat_name,cat.cat_id')
                ->from('tbl_subcategory as sub')
                ->join('tbl_category as cat', 'cat.cat_id=sub.cat_id')
                ->where($where);
        }

        $query = $this->db->get();
        return $query->result();

    }


}