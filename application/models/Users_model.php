<?php

class Users_model extends CORE_Model{

    protected  $table="user_accounts"; //table name
    protected  $pk_id="user_id"; //primary key id


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
 
    function create_default_user(){

        //return;
        $sql="INSERT IGNORE INTO user_accounts
                  (user_id,user_name,user_pword,user_lname,user_fname,user_mname,user_address,user_email,user_mobile,user_group_id)
              VALUES
                  (1,'admin',SHA1('admin'),'Solutions','JDev IT Business','','Balibago, Angeles City','jdevbiz@yahoo.com','900 3988',1)
        ";
        $this->db->query($sql);

    }

    function authenticate_user($uname,$pword){
        $this->db->select('ua.user_id,ua.user_name,ua.user_group_id,ua.photo_path,ua.user_email,CONCAT_WS(" ",ua.user_fname,ua.user_mname,ua.user_lname) as user_fullname');
        $this->db->from('user_accounts as ua');
        $this->db->join('user_groups as ug', 'ua.user_group_id = ug.user_group_id','left');
        $this->db->where('ua.user_name', $uname);
        $this->db->where('ua.user_pword', sha1($pword));
        $this->db->where('ua.is_deleted', FALSE);
        $this->db->where('ua.is_active', TRUE);
        return $this->db->get();

    }

    function get_user_list($id=null){

        $this->db->select('ua.user_id,ua.user_name,ua.user_lname,ua.user_fname,ua.user_mname,ua.photo_path');
        $this->db->select('ua.user_address,ua.user_email,ua.user_mobile,ua.user_telephone');
        $this->db->select('DATE_FORMAT(ua.user_bdate,"%m/%d/%Y")as user_bdate,ua.user_group_id');
        $this->db->select('ua.is_active,ug.user_group,CONCAT_WS(" ",ua.user_fname,ua.user_mname,ua.user_lname)as full_name');
        $this->db->from('user_accounts as ua');
        $this->db->join('user_groups as ug', 'ua.user_group_id = ug.user_group_id','left');
        $this->db->where('ua.is_active=', 1);
        $this->db->where('ua.is_deleted=', 0);

        if($id!=null){ $this->db->where('ua.user_id=', $id); }

        return $this->db->get()->result();
    }






}




?>