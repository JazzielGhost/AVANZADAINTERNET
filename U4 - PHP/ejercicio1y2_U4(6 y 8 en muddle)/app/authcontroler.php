<?php
    session_start();
    #var_dump($_POST);
    if(isset($_POST['action'])){
        switch($_POST['action']){
            case 'login':
                $email = strip_tags($_POST['email']);
                $password = strip_tags($_POST['password']);

                $authcontroler = new Authcontroler();
                $authcontroler->login($email, $password);
            break;
        default:
            echo "accion no valida";
            
        }
    }else{
        echo "error, no se proporciono una accion";
    }
    #echo json_encode($_POST);
    class Authcontroler{
        public function login($email, $password){
            #proceso para logiar el usuario
            #echo "login ";
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
            CURLOPT_POSTFIELDS => array('email' => 'jazziel@fakemail.com','password' => 'password123'),
            $data = array('email' => 'jazziel@fakemail.com',
                            'password' => 'password123'),
            CURLOPT_SSL_VERIFYPEER => false,  // Desactivar verificación SSL    
            ));
            $response = curl_exec($curl);

            $decoded_response = json_decode($response);
            curl_close($curl);
            #var_dump($response);
            if($decoded_response -> code > 0){
                echo "login -> paso el if de decoded response <br>";
                $_SESSION['id'] = $decoded_response->data->id;
                $_SESSION['name'] = $decoded_response->data->name;
                $_SESSION['lastname'] = $decoded_response->data->lastname;
                $_SESSION['avatar'] = $decoded_response->data->avatar;
                $_SESSION['email'] = $decoded_response->data->email;
                $_SESSION['phone_number'] = $decoded_response->data->phone_number;
                $_SESSION['created_by'] = $decoded_response->data->created_by;
                $_SESSION['role'] = $decoded_response->data->role;
                $_SESSION['created_at'] = $decoded_response->data->created_at;
                $_SESSION['updated_at'] = $decoded_response->data->updated_at;
                $_SESSION['token'] = $decoded_response->data->token; 
                #echo $email ." " . $password;
                #echo $decoded_response->data->email ." " , $decoded_response->data->password;
                if($email === $data['email'] && $password === $data['password']){
                    header("Location: http://localhost:3000/U4/ejercicio3%20(9%20en%20muddle)/navbar_sidebar.php");
                    exit(); 
                }else{
                    echo "error, credenciales incorrectas";
                }
                
                
            }else{
                echo 'Error al decodificar JSON: ' . json_last_error_msg();            }
            }
        

    }

?>