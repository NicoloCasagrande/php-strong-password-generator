<?php 

function get_password($length){
    $alphabet = ['a', 'b', 'c'];
    $uppercase = ['A', 'B', 'C'];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $symbols = ['@', '#', '$', '*', ',', '.', '!'];

    $full_characters = array_merge($alphabet, $uppercase, $numbers, $symbols);

    if(isset($length)){
        if(is_numeric($length)){
            $error = "Hai inserito un parametro non valido, devi inserire un numero compreso tra 8 e 32";
        }

        if($length < 8]){
            $error = "La password deve essere lunga almeno 8 caratteri";
        }elseif($length > 32){
            $error = "La password deve essere lunga massimo 32 caratteri";
        }else{
            $password = "";
            for ($i=0; $i < $length; $i++) { 
                $random_characters_index = rand(0, count($full_characters) -1);
                $password .= $full_characters[$random_characters_index];
            }
        }
    }

    return [
        "password" => $password,
        "error" => $error,
    ];
}
?>