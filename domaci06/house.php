<?php 



 
 session_start();

 if ($_SERVER["REQUEST_METHOD"]==='POST')
 {
    $rdb_value = $_POST['house'];
    $_SESSION['house']= $rdb_value;

    if ($rdb_value=='Gryffindor'){

    $_SESSION['photo']='https://vignette.wikia.nocookie.net/harrypotter/images/b/b1/Gryffindor_ClearBG.png/revision/latest/scale-to-width-down/350?cb=20190222162949';
    }    
    if ($rdb_value=='Slytherin'){
    $_SESSION['photo']='https://vignette.wikia.nocookie.net/harrypotter/images/0/00/Slytherin_ClearBG.png/revision/latest/scale-to-width-down/350?cb=20161020182557';
    }
    if ($rdb_value=='Ravenclaw'){
    $_SESSION['photo']='https://vignette.wikia.nocookie.net/harrypotter/images/4/4e/RavenclawCrest.png/revision/latest/scale-to-width-down/350?cb=20161020182442';
    }
    if ($rdb_value=='Hufflepuff'){
    $_SESSION['photo']='https://vignette.wikia.nocookie.net/harrypotter/images/0/06/Hufflepuff_ClearBG.png/revision/latest/scale-to-width-down/350?cb=20161020182518';
    }
    header("Location: /domaci06/professor.php");
     exit;
 }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>House</title>
    </head>
    <body>
        <div><h1>Harry Potter Quiz</h1></div>
        <div><h2>Please choose your house!</h2></div>
        <form action="house.php" method='post' id='quiz'>
        <div>
                    <label>
                
                        <input type="Radio" name="house" value="Gryffindor"/>
                        Gryffindor 
                        
                    </label>
                    <label>
                        <input type="Radio" name="house" value="Slytherin"/>
                        Slytherin <br/>
                    </label>
                    <div>
                    <img src='https://vignette.wikia.nocookie.net/harrypotter/images/b/b1/Gryffindor_ClearBG.png/revision/latest/scale-to-width-down/350?cb=20190222162949' alt= 'Gryffindor' width="80" height="80">
                    
                    <img src='https://vignette.wikia.nocookie.net/harrypotter/images/0/00/Slytherin_ClearBG.png/revision/latest/scale-to-width-down/350?cb=20161020182557' alt= 'Slytherin' width="80" height="80">
                    </div>
                    <label>
                        <input type="Radio" name="house" value="Ravenclaw"/>
                        Ravenclaw 
                    </label>
                    <label>
                        <input type="Radio" name="house" value="Hufflepuff"/>
                        Hufflepuff<br/>
                    </label>
                    <img src='https://vignette.wikia.nocookie.net/harrypotter/images/4/4e/RavenclawCrest.png/revision/latest/scale-to-width-down/350?cb=20161020182442' alt= 'Ravenclaw' width="80" height="80">
                    
                    <img src='https://vignette.wikia.nocookie.net/harrypotter/images/0/06/Hufflepuff_ClearBG.png/revision/latest/scale-to-width-down/350?cb=20161020182518' alt= 'Hufflepuff' width="80" height="80">
        </div>
                <div>
                    <button>Continue</button>
                </div>
        </form>

    </body>


</html>