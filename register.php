<?php
include "connection.php"
?>


<html>

<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background: url("back2.jpg") no-repeat center fixed;
            background-size: cover;
            font-size:1.5rem;
        }

        .container {
            background: #fff;
            width: 850px;
            height: 600px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            padding: 70px 50px 20px 50px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 2px 90px 25px;
            border-radius:20px;
        }


        .fl {
            float: left;
            width: 110px;
            line-height: 35px;
        }

        .fontLabel {
            color: white;
        }

        .fr {
            float: right;
        }

        .clr {
            clear: both;
        }

        .box {
            width: 360px;
            height: 35px;
            margin-top: 10px;
            font-family: verdana;
            font-size: 12px;
        }

        .textBox {
            height: 35px;
            width: 190px;
            border: none;
            padding-left: 20px;
        }

        .new {
            float: left;
        }

        .iconBox {
            height: 35px;
            width: 40px;
            line-height: 38px;
            text-align: center;
            background: #ff6600;
        }

        .radio {
            color: black;
            background: #fff;
            line-height: 38px;
        }

        .terms {
            line-height: 35px;
            text-align: center;
            background: #fff;
            color: black;
        }

        .submit {
            /* float: right; */
            border: none;
            color: white;
            width: 110px;
            height: 35px;
            background: #ff6600;
            text-transform: uppercase;
            cursor: pointer;
            margin-left: 120px;
        }

        i {
            margin: 10px;
        }
        .message{
            margin-top: 10px;

        }
        #success{
            display:none;
            position:absolute;
            margin-bottom: 10%;
        }
        #reject{
            display: none;
            position:absolute;
            margin-bottom: 10%;
        }
    </style>
</head>

<body>
    <!-- Body of Form starts -->
    <div class="container"><h1 style="text-align:center;margin:40px;margin-top:10px;">Register</h1>
        <form action=""  name="form1" method="post" style="margin-left:23%;">
            <!--First name-->
            <div class="box">
                <label for="firstname" class="fl fontLabel"> First Name: </label>
                <div class="new iconBox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="fr">
                    <input type="text" name="firstname" placeholder="First Name" class="textBox" autofocus="on"
                        required style="font-size:1.2rem;">
                </div>
                <div class="clr"></div>
            </div>
            <!--First name-->


            <!--Second name-->
            <div class="box">
                <label for="lastname" class="fl fontLabel"> Seconed Name: </label>
                <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                <div class="fr">
                    <input type="text" required name="lastname" placeholder="Last Name" class="textBox" style="font-size:1.2rem;">
                </div>
                <div class="clr"></div>
            </div>
            <!--Second name-->

            <!-- username -->
            <div class="box">
                <label for="username" class="fl fontLabel"> User Name: </label>
                <div class="new iconBox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="fr">
                    <input type="text" name="username" placeholder="User Name" class="textBox" autofocus="on"
                        required style="font-size:1.2rem;">
                </div>
                <div class="clr"></div>
            </div>
             <!-- username -->


            <!---Phone No.------>
            <div class="box">
                <label for="contact" class="fl fontLabel"> Phone No.: </label>
                <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                <div class="fr">
                    <input type="text" required name="contact" maxlength="10" placeholder="Phone No." class="textBox" style="font-size:1.2rem;">
                </div>
                <div class="clr"></div>
            </div>
            <!---Phone No.---->


            <!---Email ID---->
            <div class="box">
                <label for="email" class="fl fontLabel"> Email ID: </label>
                <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="fr">
                    <input type="email" required name="email" placeholder="Email Id" class="textBox" style="font-size:1.2rem;">
                </div>
                <div class="clr"></div>
            </div>
            <!--Email ID----->


            <!---Password------>
            <div class="box">
                <label for="password" class="fl fontLabel"> Password </label>
                <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                <div class="fr">
                    <input type="password" required name="password" placeholder="Password" class="textBox" style="font-size:1.2rem;">
                </div>
                <div class="clr"></div>
            </div>
            <!---Password---->

            <!---Gender----->
            <div class="box radio" style="margin-left:5%;font-size:1.2rem;">
                <label for="gender" class="fl fontLabel"> Gender: </label>
                <input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="radio" name="Gender" value="Female" required> Female
            </div>
            <!---Gender--->


            <!--Terms and Conditions------>
            <div class="box terms" style="margin-left:8%;font-size:1.2rem;">
                <input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
            </div>
            <!--Terms and Conditions------>



            <!---Submit Button------>
            <div class="box" style="background: #fff;margin-left:9%;">
                <input type="Submit" name="Submit" class="submit" value="SUBMIT" style="height:70px; width:120px; font-size:1.2rem;">
            </div>
            <!---Submit Button----->

           <!--  message printing -->
           <div id="success" class="message" >
            <strong>Success!</strong>You Register Sucessfully
           </div>

           <div id="reject" class="message">
            <strong>Aleardy exist!</strong>User name
           </div>
        </form>
    </div>
    <!--Body of Form ends--->

    <?php
    if(isset($_POST["Submit"])){
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
        if($count>0){
            ?>
            <script type="text/javascript">
                document.getElementById("reject").style.display="block";
            </script>
            <?php
        }
        else{
            mysqli_query($link,"insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')") or die(mysqli_error($link));
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display="block";
            </script>
            <?php
        }
    }
    
    
    ?>
</body>

</html>