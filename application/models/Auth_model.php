<?php
class Auth_model extends CI_Model
{
 function alreadyRegister($id)
 {
  $this->db->where('login_id', $id);
  $query = $this->db->get('users');
  if($query->num_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function updateUser($data, $id)
 {
  $this->db->where('login_id', $id);
  $this->db->update('users', $data);
 }

 function insertUser($data)
 {
  $this->db->insert('users', $data);
 }
}
?>
