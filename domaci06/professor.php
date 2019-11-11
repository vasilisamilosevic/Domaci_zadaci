<?php

session_start();

 if ($_SERVER["REQUEST_METHOD"]==='POST')
 {
    $rdb_value = $_POST['professor'];;
    $_SESSION['prof']= $rdb_value;
     header("Location: /domaci06/pet.php");
     exit;

    

 }

?>
<!DOCTYPE html>
<html>
    <head>
            <title>Professor</title>
    </head>
    <body>
        <div><h1>Harry Potter Quiz</h1></div>
        <div><h2>Please choose your favourite professor!</h2></div>
        <div>
            <form action="professor.php" method="POST" id='quiz'>
            <div>
                    <label>
                
                        <input type="Radio" name='professor' value="Minerva Mc Gronagall"/>
                        Minerva Mc Gronagall<br/>
                    </label>
                    <label>
                        <input type="Radio" name="professor" value="Severus Snape"/>
                        Severus Snape<br/>
                    </label>
                    <label>
                        <input type="Radio" name="professor" value="Albus Dumbledor"/>
                        Albus Dumbledor<br/>
                    </label>
                    <label>
                
                        <input type="Radio" name='professor' value="Filius Flitwick"/>
                        Filius Flitwick<br/>
                    </label>
                    <label>
                        <input type="Radio" name="professor" value="Alastor Moody"/>
                        Alastor Moody<br/>
                    </label>
                    <label>
                        <input type="Radio" name="professor" value="Remus Lupin"/>
                        Remus Lupin<br/>
                    </label>
                </div>
                <div>
                    <button>Continue</button>
                </div>


            </form>
        </div>
    
        
    </body>
</html>