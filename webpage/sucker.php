<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
	

	<?php
	?>


	<?php if(isset($_REQUEST["n"],$_REQUEST["section"],$_REQUEST["card_number"],$_REQUEST["card_type"]))    {?>

		<?php if($_SERVER["REQUEST_METHOD"]=="GET") { ?>
        	<h1>HTTP GET is forbidden. Use HTTP POST to access this page.</h1>
  		 <?php } else { ?>



	    	<h1>Thanks, Sucker!</h1>

			<p>
				Your information has been recorded.
			</p>
				
				<dl>
					<dt>Name</dt>
					<dd>
					  	<?= $_POST['n'] ?>
					</dd>
					
					<dt>Section</dt>
					<dd>
					    <?= $_POST['section'] ?>
					</dd>
					
					<dt>Credit Card</dt>
					<dd>
					<?= $_POST['card_number'] ?>
					<?= $_POST['card_type'] ?>
					</dd>
				</dl>
		 <?php } ?>

		<?php
			$name=$_POST["n"] ;
			$section=$_POST["section"] ;
			$card_number=$_POST["card_number"] ;
			$card_type=$_POST["card_type"] ;
			$line = $name;
			$line .=";".$section;
			$line .=";".$card_number;
			$line .=";".$card_type."
			"; 
			file_put_contents("suckers.txt", $line, FILE_APPEND);
			$lines = file("suckers.txt");

		?>
		

		<ul>
		<?php foreach ($lines as $line){ ?>
			<li><?= $line ?></li>			
		<?php } ?>
		</ul>
		

<?php } else {?>


    <h1>Sorry</h1>
    <p>You didn't fill out the form complete  <a href="buyagrade.html">Try again?</a></p>
<?php } ?>	



	</body>
</html>