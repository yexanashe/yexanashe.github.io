 <!DOCTYPE html>
<html>
<head>
  <title>Papulasyon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/.../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="samplest.css">
  <script src="https://ajax.googleapis.com/.../jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/.../js/bootstrap.min.js"></script>
</head>
<body class="bg">
<div class="result">
<h1 class="form-title" href="samples.php">City Populations</h1>
<p class="sub-title">Week 2 - Summer<i class="bi bi-calculator"></i><i class="bi bi-calculator"></i></p>
<?php
	if (isset($_POST['submit']))
	{
		$populationA = $_POST['populationA'];
		$populationB = $_POST['populationB'];
		$growthA = $_POST['growthA'];
		$growthB = $_POST['growthB'];
		$counter = 0;
		$condition = True;
		while($condition)
		{
			if ($populationA<$populationB)
			{
				$populationA = (int)$populationA * ( 1 + ( (int)$growthA / 100));
				$populationB = (int)$populationB * ( 1 + ( (int)$growthB / 100));
				$counter+=1;
			}
			elseif ($populationB<$populationA)
			{
				echo "<br>","The population of City A will be greater than City B in ", $counter ," years.","<br>";
				echo "A: ", (int)$populationA,"<br>";
				echo "B: ", (int)$populationB,"<br>";
				$condition=False;
			}
			elseif ($populationB=$populationA)
			{
				echo "<br>","The population of City A will be the same with City B in ", $counter ," years.","<br>";
				echo "A: ", (int)$populationA,"<br>";
				echo "B: ", (int)$populationB,"<br>";
				$condition=False;
			}
		}
	}
?>
<div class="form-div">
<div class="return"> <a href="samples.php"><input type='submit' name='submit' value='Back'></a></div>
</div>
</div>
</body>
</html>