<?php

session_start();

if ($_SERVER["REQUEST_METHOD"]==="POST")
 {
     if (!($_POST['password']=== $_POST['passwordagain'])){
       
        echo "Lozinka i ponovljena lozinka se ne poklapaju.";
        header ("Location: /domaci04/registracija.html");
    }
    
    
 }
 function broj($phone)
{
	$times=strlen(trim(substr($phone,5,6)));
	$star='';
	for ($i=0; $i <$times ; $i++) { 
		$star.='*';
	}
    $star;
    return $star;
}
$phone=(string)$_POST['phone'];
$result=str_replace(substr($phone, 4,5), broj($phone), $phone);


 

 ?>

 <html>
     <head>
         <title>Obrada</title>
     </head>
     <body>
         <div>
             <table border='1'>
                 <tbody>
                     <tr>
                         <th>Ime: </th>
                         <th><?=  $_POST['name'] ?></th>
                    </tr>           
                    <tr>
                         <th>Prezime: </th>
                         <th><?=  $_POST['surname']?></th>
                    </tr>           
                    <tr>
                    
                         <th>Email:  </th>
                         <th><?= $_POST['email'] ?></th>
                    </tr>           
                    <tr>
                         <th>Phone number: </th>
                         <th><?= $result ?></th>
                     </tr>           
                    <tr>
                         <th>Profile picture: </th>
                         <th><?= base64_encode(file_get_contents($_POST['url_photo']));?></th>
                     </tr>
                 </tbody>

             </table>
         </div>
     </body>
 </html>








