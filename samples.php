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
<div class="l-form">
    <form method='post' action='result.php' enctype='multipart/form-data'>
        
        <h1 class="form-title" href="samples.php">City Populations</h1>
		<p class="sub-title">Week 2 - Summer<i class="bi bi-calculator"></i><i class="bi bi-calculator"></i></p>
        <div class="form-div">
            <div class="population"><input type="number" placeholder="Enter City A Population" name="populationA" multiple><br></div>
            <div class="growth"><input type="number" placeholder="Enter City A Growth Rate" name="growthA" multiple><br></div>
			<div class="population"><input type="number" placeholder="Enter City B Population" name="populationB" multiple><br></div>
            <div class="growth"><input type="number" placeholder="Enter City B Growth Rate" name="growthB" multiple><br></div>
            <div class="submit"><input type='submit' name='submit' value='Calculate'><br></div>
        </div>
    </form>
</div>
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
			elseif ($populationB<=$populationA)
			{
				echo "A: ", (int)$populationA,"<br>";
				echo "B: ", (int)$populationB,"<br>";
				echo "The population of City A will be greater than or the same City B in ", $counter ," years.";
				$condition=False;
			}
		}
	}
?>
</body>
</html>
