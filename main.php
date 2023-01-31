<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>

<head>
    <title>PHP Quizer</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-image: url("h2copy.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: large;
            font-family: 'Roboto', sans-serif;
            font-family: 'Roboto Mono', monospace;

        }

        .container {
            text-align: center;
        }

        .container ul li {
            text-decoration: none;
            list-style: none;
        }

        .start {
            background-color: black;
            color: white;
            border: 2px solid black;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <main>
        <div class="container">

            <h2>PHP Quizer</h2>
            <h3>Test Your PHP Knowledge</h3>
            <p>
                This is a multiple choise quiz to test your PHP Knowledge.
            </p>
            <ul>
                <li><strong>Number of Questions:</strong>
                    <?php echo $total_questions; ?>
                </li>
                <li><strong>Type:</strong> Multiple Choise</li>
                <li><strong>Estimated Time:</strong>
                    <?php echo $total_questions*1.5; ?>
                </li>

            </ul>

            <a href="question.php?n=1" class="start">Start Quize</a>

        </div>

    </main>


    <footer>



    </footer>