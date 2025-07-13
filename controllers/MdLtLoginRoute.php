<?php


///  Login Route
LtRoute::post('/user-accounts/login', 'mdLtLogin@TbRegistrationsController@login');
/// Sign Up route
LtRoute::post('/user-accounts/signup', 'mdLtLogin@TbRegistrationsController@signup');
/// change password route
LtRoute::post('/user-accounts/change-password', 'mdLtLogin@TbRegistrationsController@changePassword');
/// forgot password generate and send token route
LtRoute::post('user-accounts/forgot-password/get-token', 'mdLtLogin@TbRegistrationsController@sendToken');
/// forgot password validate token route
LtRoute::post('/user-accounts/validate/token', 'mdLtLogin@TbRegistrationsController@validateToken');
/// forgot password resend token route
LtRoute::post('/user-accounts/resend-token', 'mdLtLogin@TbRegistrationsController@resendToken');
/// forgot password resend token route
LtRoute::post('/user-accounts/password/reset/', 'mdLtLogin@TbRegistrationsController@resetPassword');









// Login Route
// LtRoute::post('userLogins@LoginUser', function(){
//   // ob_end_clean();
//  //echo LtResponse::json("weldone");
//  //exit();
//   ltImport('mdLtLogin','TbRegistrationsController.php') ;
//   ob_end_clean();
//   $registrationInstance = new TbRegistrationsController();
//   echo $registrationInstance->login(); 
//   exit();
// });
/*

// Login Route
if(LtRoute::post('userLogins', 'LoginUser')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->login(); 
  exit();
}

// Registration Route
if(LtRoute::post('userReg', 'RegUser')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->registration(); 
  exit();
}

// Change Password Route
if(LtRoute::post('changePasswordAction', 'changePasswordValue')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->changePassword(); 
  exit();
}

//  Forgot Password Route
if(LtRoute::post('forgetMail', 'valSendforgetMail')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->forgotPassword(); 
  exit();
}


// Validate Token Route
if(LtRoute::post('validateTokenAction', 'validateTokenValue')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->verifyToken(); 
  exit();
}

// Resend Email Route
if(LtRoute::post('resendMail', 'valResendMail')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->resendToken(); 
  exit();
}

// Set New Password Route

if(LtRoute::post('setForgotPassAction', 'setForgotPassValue')){
 
  ltImport('mdLtLogin','TbRegistrationsController.php') ;
  $registrationInstance = new TbRegistrationsController();
  echo $registrationInstance->resetPassword(); 
  exit();
}
*/




?>
      
      
      
      
      
      