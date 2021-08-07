<?php

class Dashboard_Model extends CI_Model
{

   public function getMenus($role_id){
      $qry= $this->db->select('m.*')
                     ->from('user_permission p')
                     ->join('menu_master m','m.menu_id=p.menu_id','left')
                     ->where('p.role_id',$role_id)
                     ->get();
      if($qry->num_rows()){
         return $qry->result_array();
       }else{
        return FALSE;
       }
   }





}

?>