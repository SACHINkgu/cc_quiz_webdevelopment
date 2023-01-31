<?php 
include 'nav.php';
session_start();

?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		 body {
            background-image: url("h2copy.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: large;
            font-family: 'Roboto', sans-serif;
            font-family: 'Roboto Mono', monospace;

        }

        .container {
            text-align: center;
            margin-top: 27vh;
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
				<h3>Your Result</h3>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				<!-- <a href="select_exam.php" class="start">Home</a> -->
				
			</div>


	</main>









</body>
</html>