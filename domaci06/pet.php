<?php

session_start();

 if ($_SERVER["REQUEST_METHOD"]==='POST')
 {
    $rdb_value = $_POST['pet'];;
    $_SESSION['pet']= $rdb_value;
     header("Location: /domaci06/result.php");
     exit;

 }


?>
<!DOCTYPE html>
<html>
    <head>
            <title>pet</title>
    </head>
    <body>
        <div><h1>Harry Potter Quiz</h1></div>
        <div><h2>What pet would you bring  with you in Hogwarts?</h2></div>
        <div>
            <form action="pet.php" method="POST" id='quiz'>
            <div>
                    <label>
                
                        <input type="Radio" name='pet' value="owl"/>
                        owl<br/>
                    </label>
                    <label>
                        <input type="Radio" name="pet" value="cat"/>
                        cat<br/>
                    </label>
                    <label>
                        <input type="Radio" name="pet" value="spider"/>
                      spider<br/>
                    </label>
                    <label>
                
                        <input type="Radio" name='pet' value="toad"/>
                        toad<br/>
                    </label>
                    
                </div>
                <div>
                    <button>Continue</button>
                </div>


            </form>
        </div>
    
        
    </body>
</html>