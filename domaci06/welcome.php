<?php 



 
 session_start();

 if ($_SERVER["REQUEST_METHOD"]==='POST')
 {
     $name = $_POST['name'];
    $_SESSION['username']= $name;
     header("Location: /domaci06/house.php");
     exit;
    

 }   
?>

 


<!DOCTYPE html>
<html>
<HEAd>          <title> Welcome</title>
</HEAd>
<body>
    <div> <h1>Welcome to Harry Potter Quiz!</h1> </div>
    <div>
    <form action="welcome.php" method="POST" >
    
    <label for="name">Plase enter your name:</label><br/>
    <input require    type='text' name="name" id="nameInput"/>
    <div>  
    <button>Continue</button>
    </div>
    </form>
    </div>
    
</body>

</html>