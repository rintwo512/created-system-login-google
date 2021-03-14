<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('auth_model');
 }

 function index()
 {
      include_once APPPATH . "libraries/vendor/autoload.php";

      $google_client = new Google_Client();

      $google_client->setClientId('973263021378-0jvkouce7pvpv0a1cc079e7o3gr9ehh9.apps.googleusercontent.com');

      $google_client->setClientSecret('xUhwYlNHTpgMRvSCouS1xewz');

      $google_client->setRedirectUri('http://localhost/new-app');

      $google_client->addScope('email');

      $google_client->addScope('profile');

      if(isset($_GET["code"]))
      {
       $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

       if(!isset($token["error"]))
       {
        $google_client->setAccessToken($token['access_token']);

        $this->session->set_userdata('access_token', $token['access_token']);

        $google_service = new Google_Service_Oauth2($google_client);

        $data = $google_service->userinfo->get();


        $current_datetime = date('Y-m-d H:i:s');

        if($this->auth_model->alreadyRegister($data['id']))
        {
         //update user
         $user_data = array(
          'first_name' => $data['given_name'],
          'last_name'  => $data['family_name'],
          'role'  => "admin",
          'email_address' => $data['email'],
          'profile_picture'=> $data['picture'],
          'updated_at' => $current_datetime
         );

         $this->auth_model->updateUser($user_data, $data['id']);
        }
        else
        {
         //insert user
         $user_data = array(
          'login_id' => $data['id'],
          'first_name'  => $data['given_name'],
          'last_name'   => $data['family_name'],
          'role'   => "admin",
          'email_address'  => $data['email'],          
          'profile_picture' => $data['picture'],
          'is_active' => 1,
          'created_at'  => $current_datetime
         );

         $this->auth_model->insertUser($user_data);
        }
        $this->session->set_userdata('user_data', $user_data);        
       
       }
      }
     $login_button = '';
  if(!$this->session->userdata('access_token'))
  {
   $login_button = $google_client->createAuthUrl();
   $data['login_button'] = $login_button;
   $this->load->view('login', $data);
  }
  else
  {
   redirect('home');
  }
 }           

 function logout()
 {
  $this->session->unset_userdata('access_token');

  $this->session->unset_userdata('user_data');

  redirect('auth');
 }
 
}
?>