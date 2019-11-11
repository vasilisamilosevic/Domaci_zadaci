<?php 

session_start();


?>

<!DOCTYPE html>

<html>
    <head>
            <title>result</title>
    </head>
    <body>
        <div><h1>Harry Potter Quiz</h1></div>
        <div><h2>Result</h2></div>

    <div>
        <table border='1'>
            <tbody>
            <tr>
                <td>Name</td>
                <td><?= $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <td>House</td>
                <td><?=$_SESSION['house'] ?>
                <br/>
                <img src=<?= $_SESSION['photo']?> height=80 weight= 80>
                </td>
             </tr>
            <tr>
                <td>Favourite professor</td>
                <td><?=$_SESSION['prof'] ?>
                
                </td>
            </tr>
            <tr>
                <td>Pet</td>
                <td><?=$_SESSION['pet'] ?></td>
                
                </tr>
            </tbody>
        </table>
    </div>