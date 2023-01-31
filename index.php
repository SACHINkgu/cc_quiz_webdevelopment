<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: white;
            /* background-image: url("https://images.unsplash.com/photo-1528458909336-e7a0adfed0a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1048&q=80"); */
            font-family: 'Roboto', sans-serif;
            font-family: 'Roboto Mono', monospace;
            background-image: url("https://images.unsplash.com/photo-1516053256215-94022213b13c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80");
        }

        .main_container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            height: 70vh;
            width: 70vw;
            background-color: white;

            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 80px 15px;

        }

        .child {

            height: 70vh;
            width: 35vw;
        }

        #form {
            display: flex;
            align-content: center;
            flex-wrap: nowrap;
            flex-direction: column;
            padding-left: 4vw;
            padding-right: 2vw;
        }

        h1 {
            text-align: center;
        }

        hr {
            background-color: black;
            width: 3vw;
            height: 0.3vh;
        }

        .element {
            margin: 1vw;
        }

        .io {
            border: 2px solid black;
            border-radius: 3vh;
            width: 25vw;
            height: 1.5vh;
            margin: 1vh;
            padding: 2vh;
        }

        label {
            font-size: 20px;
        }

        /*  button {
            border: 2px solid black;
            border-radius: 3vh;
            width: 25vw;
            height: 5vh;
            margin-left: 2vw;
            margin-right: 2vw;
            margin-bottom: 1vh;
            color: white;
            background-color: grey;
            font-family: sans-serif;
            font-weight: 600;
            font-size: 20px;
        } */

        .button {
            border: 2px solid black;
            border-radius: 3vh;
            width: 25vw;
            height: 5vh;
            margin-left: 2vw;
            margin-right: 2vw;
            margin-bottom: 1vh;
            background-color: grey;
            font-family: sans-serif;
            font-weight: 600;
            font-size: 20px;
        }


        img {
            height: 70vh;
            width: 33vw;
        }

        .submit {
            /* float: right; */
            border: none;
            color: white;
            width: 125px;
            height: 26px;
            background-color: grey;
            text-transform: uppercase;
            cursor: pointer;
            margin-left: 120px;
            font-family: sans-serif;
            font-weight: 600;
            font-size: 20px;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="main_container">
        <div class="child" id="image1">
            <img src="computer.jpg" alt="">
        </div>
        <div class="child" id="form">

            <h1>Login</h1>
            <hr>
            <form action="" name="FORM1" method="post">
                <div class="element">
                    <label for="username">Email</label><br>
                    <input type="text" name="username" id="email" required class="io" />
                </div>
                <div class="element">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required class="io" />
                </div>
                <div class="button">
                    <input type="submit" name="login" class="submit" value="LOGIN">
                </div>

                <div class="button">
                    <button class="submit"><a href="register.php">Register</a></button>
                </div>
            </form>
        </div>
    </div>

    <?php 
    if(isset($_POST["login"])){
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]' ");
        $count=mysqli_num_rows($res);
        if($count==0){
            ?>
    <script>
        document.getElementById("reject").style.display = "block";
    </script>
    <?php

        }
        else{
            $_SESSION["username"]=$_POST["username"];

            ?>
    <script>
        window.location = "index1.html";
    </script>
    <?php
        }
    }
    ?>
</body>

</html>