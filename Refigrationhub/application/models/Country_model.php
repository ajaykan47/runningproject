<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/29/2018
 * Time: 6:32 PM
 */
class Country_model extends CI_Model
{

    public function getExistingData($countryName)
    {

        $this->db->select('country_name')
            ->from('mast_tbl_countries')
            ->where('country_name', $countryName);
        $query = $this->db->get();
        return $query->result();
    }

    public function getListByUserType($tableName)
    {
        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        if ($user_type == 1) {
            $this->db->select('*')
                ->from($tableName);

        } else {
            $this->db->select('*')
                ->from($tableName)
                ->where('delStatus', 'no');
        }
        $query = $this->db->get();
        return $query->result();
    }


    public function getCountryDDlList()
    {
        $condition = array('status' => 'Active', 'delStatus' => 'no');
        $this->db->select('country_name,country_id')
            ->from('mast_tbl_countries')
            ->where($condition);
        $query = $this->db->get();
        return $query->result();
    }

    /***************State*****************/
    public function getExistingStateData($stateName)
    {

        $this->db->select('state_name')
            ->from('mast_tbl_states')
            ->where('state_name', $stateName);
        $query = $this->db->get();
        return $query->result();
    }

    public function getListByUserTypeJoin()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        if ($user_type == 1) {
            $this->db->select('sts.*,ctry.country_name,ctry.country_id')
                ->from('mast_tbl_states sts')
                ->join('mast_tbl_countries as ctry', 'ctry.country_id=sts.country_id', 'left');
            $this->db->group_by('sts.state_id');
            $query = $this->db->get();
            return $query->result();
        } else {
            $this->db->select('sts.*,ctry.country_name,ctry.country_id')
                ->from('mast_tbl_states sts')
                ->join('mast_tbl_countries as ctry', 'ctry.country_id=sts.country_id', 'left')
                ->where('sts.delStatus', 'no');
            $this->db->group_by('sts.state_id');
            $query = $this->db->get();
            return $query->result();
        }
    }

    /***************State*****************/

    public function getStateDDlList()
    {
        $condition = array('status' => 'Active', 'delStatus' => 'no');
        $this->db->select('state_name,state_id')
            ->from('mast_tbl_states')
            ->where($condition);
        $query = $this->db->get();
        return $query->result();
    }

    public function getListByID($tableName, $where)
    {

        $this->db->select('*')
            ->from($tableName)
            ->where($where);
        $query = $this->db->get();
        return $query->result();

    }

    public function getExistingCityData($cityName)
    {

        $this->db->select('city_name')
            ->from('mast_tbl_cities')
            ->where('city_name', $cityName);
        $query = $this->db->get();
        return $query->result();
    }

    public function getListByUserTypeJoinCity()
    {

        $data['value'] = $this->session->userdata('logindetails');
        $user_type = $data['value']['user_type'];
        if ($user_type == 1) {
            $this->db->select('cty.*,ctry.country_name,ctry.country_id,sts.state_id,sts.state_name')
                ->from('mast_tbl_cities cty')
                ->join('mast_tbl_countries as ctry', 'ctry.country_id=cty.country_id')
                ->join('mast_tbl_states as sts', 'sts.state_id=cty.state_id');

            $query = $this->db->get();
            return $query->result();
        } else {
            $this->db->select('cty.*,ctry.country_name,ctry.country_id,sts.state_id,sts.state_name')
                ->from('mast_tbl_cities cty')
                ->join('mast_tbl_countries as ctry', 'ctry.country_id=cty.country_id')
                ->join('mast_tbl_states as sts', 'sts.state_id=cty.state_id')
                ->where('sts.delStatus', 'no');

            $query = $this->db->get();
            return $query->result();
        }
    }

    public function getCityListbyJoining($idG)
    {
        $where= array('cty.city_id'=>$idG);
        $this->db->select('cty.*,ctry.country_name,ctry.country_id,sts.state_id,sts.state_name')
            ->from('mast_tbl_cities cty')
            ->join('mast_tbl_countries as ctry', 'ctry.country_id=cty.country_id','left')
            ->join('mast_tbl_states as sts', 'sts.state_id=cty.state_id','left')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }


}