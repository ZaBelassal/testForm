<?php

// $dolar = extract($_GET);
// var_dump($dolar);
// echo "<br>";
// if(!empty($_GET['nom'])){           //nom huwa lkey li kayen f

//     if(strlen($_GET['nom'])>6){
//         echo "Tout est bon";
//     }else{
//         echo "Votre nom doît être supérieur à 6 caractères";
//     }

// }

// else {
//     echo "Vous devez tapper un nom";
// }


/// 2nd form 


// echo "<br>";
// print_r(extract($_POST));
// if(strlen($fullname)>=2){
//     if(strlen($fullname)<2){
//         echo "Veuillez entrer un nom avec plus que 2 caractère";
//     }else {
    
    //         if(strlen($password)>6 & ($confirmPassword ==$password) ){
        
        //             echo "Tout est Bon !";
        //         }else if(strlen($confirmPassword) != strlen($password) ){
            //             echo "Les mots de passe ne sont pas identiques";
            //         }
            //         else if((strlen($confirmPassword)== strlen($password)) & strlen($password) <6){
                //             echo "le Mot de passe doit au mnimum avoir 6 caractères";
                //         }
                //     }
                
                // }else {
                    //     echo "veuillez entrer au minimum 2 caractères";
                    // }
                    

extract($_POST);
$email_Status = filter_var($email,FILTER_VALIDATE_EMAIL);

if(strlen($fullname)>=2){
            if ($email_Status){
                if(strlen($password)>=6 & ($confirmPassword ==$password) ){
                    setcookie("fullname", $fullname, time() + 2 * 24 * 60 * 60);
                    setcookie("email", $email, time() + 2 * 24 * 60 * 60);
                    setcookie("password", $password, time() + 2 * 24 * 60 * 60);

                header("Location: info.php"); 
                exit();
                
                }
                else if(strlen($confirmPassword) != strlen($password) ){
                    echo "Les mots de passe ne sont pas identiques";
                }
                else if((strlen($confirmPassword)== strlen($password)) & strlen($password) <6){
                    echo "le Mot de passe doit au mnimum avoir 6 caractères";
                }
        
            }else {
                echo "Veuillez rentrez un eamil Valide";
               
            }
            
        
}else {
    echo "veuillez entrer au minimum 2 caractères";
}

// if ($email_Status){
//             echo "Le mail est correct";
//     }else {
//         echo "le mail n'est pas correct";
    
// }


/* traitment des cookies */



$fullname =  $_POST['fullname'];
$email =  $_POST['email'];
$password =  $_POST['password'];



	// setcookie("fullname", $fullname, time() + 2 * 24 * 60 * 60);
	// setcookie("email", $email, time() + 2 * 24 * 60 * 60);
	// setcookie("password", $password, time() + 2 * 24 * 60 * 60);



	if (isset($_COOKIE["fullname"])&& isset($_COOKIE["email"]) && isset($_COOKIE["password"]))
	{
		echo "cookies created succssuflu";
		
	}
	else
	{
		echo "No items for auction.";
	}
	


