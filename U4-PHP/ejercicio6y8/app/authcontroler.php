<?php  
session_start();

if (isset($_POST['action'])) {
	
	switch ($_POST['action']) {
		case 'login':

			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);
			
			$authController = new AuthController();
			$authController->login( $email,$password );

		break; 
	}
}

Class AuthController
{
	public function login($email,$password)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => array(
		  	'email' => $email,
		  	'password' => $password
		  ),
		));

		$response = curl_exec($curl); 
		curl_close($curl);
		$response_decode = json_decode($response);

		if ($response_decode->code > 0) {
			
			$_SESSION['user_id'] = $response_decode->data->id;
			$_SESSION['name'] = $response_decode->data->name;
	        $_SESSION['lastname'] = $response_decode->data->lastname;
	        $_SESSION['avatar'] =  $response_decode->data->avatar;
	        $_SESSION['email'] = $response_decode->data->email;
	        $_SESSION['phone_number'] = $response_decode->data->phone_number;
	        $_SESSION['role'] = $response_decode->data->role;
	        $_SESSION['token'] =  $response_decode->data->token;

            header("Location: ../ejercicio9/navbar_sidebar.php");
		}else{
			echo 'Error al decodificar JSON: ' . json_last_error_msg();            
 		}
	}
}





?>