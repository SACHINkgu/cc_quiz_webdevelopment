<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
	<title>PHP Quizer</title>
	
	<style>
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			background-image: url("https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1129&q=80");
			background-size: cover;
			background-repeat: no-repeat;
			font-family: 'Sarpanch', sans-serif;
font-family: 'Secular One', sans-serif;
font-family: 'Teko', sans-serif;
		}
		.container{
			
			/* width: 50vw; */
			height: 80vh;
			/* border: 2px solid black; */
            display: flex;
            align-items: center;
            flex-direction: column;
            
		}
        .choicess{
            list-style: none;
        }
        li{
            background-color: white;
            margin: 10px;
            height: 8vh;
            width: 30vw;
            border-radius: 5px;
            border: 2px solid white;
			display: flex;
			align-items: center;
			
        }
        .question{
            margin-bottom: 10px;
            width: 30vw;
            margin-top: 20px;
            /* padding-left: 20px; */
			padding-left: 85px;
			padding-right: 40px;
			color: white;
			font-size: 20px;
            
        }
        span{
            margin-left: 10px;
        }
		input[type="submit"]{
			background-color: white;
			/* margin-left: 60vh; */
			border-radius: 5px;
			border: 2px solid white;
			margin-top: 2vh;
			width: 10vw;
			height:4vh ;
			font-weight: 580;
			cursor: pointer;
			margin-left: 29vh;
		}
		hr{
			background-color: white;
			border: 2px solid white;
		}
		.current{
			background-color: white;
			border: 2px solid white;
		}
		.question_no{
			background-color: white;
			margin-bottom: 10px;
			width: 70px;
			align-self: flex-end;
			margin-left: 800px;
			border: 2px solid white;
			border-radius: 10px;
			display: flex;
			justify-content: center;
			
		}
		input[type="submit"]:hover{
			background-color: green;
			color:white
		}
		li:hover{
			background-color: #2B9348;
			cursor: pointer;
			color:white;
		}
		span:hover{
			background-color: #2B9348;
			cursor: pointer;
			color:white;
		}
	
		
	</style>
</head>
<body>
	<main>
		
		<div class="question_no"><?php echo $number; ?> of <?php echo $total_questions; ?></div>
		<div class="current"></div>
		<hr class="first">
			<div class="container">
				<div class="question"><h3><?php echo $question['question_text']; ?></h3></div>
				<form method="POST" action="process.php">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
							<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"><label for="<?php echo $row['id']; ?>"><span><?php echo $row['coption']; ?></span></label></li>
						<?php } ?>
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
			<hr class="last">
		<div class="current"></div>
	</main>


	<footer>
	</footer>
</body>
</html>