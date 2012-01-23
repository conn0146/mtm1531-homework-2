<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Jason's Fantastical Money Calculator</title>
	<link href="css/general.css" rel="stylesheet">
</head>
<body>

<h1>Jason's Fantastical Money Calculator</h1>

<form action="form.php" method="post">
	
    <label for="number1">Number 1</label>
    <input type="number" id="number 1" name="number1">
    
		<label for="function">Function</label>
    <select id="function" name="function">
    	<option value="a">+</option>
        <option value="s">-</option>
        <option value="m">*</option>
        <option value="d">/</option>
    </select>
		
		<label for="number2">Number 2</label>
    <input type="number" id="number2" name="number2">
    
    <button type="submit">Submit</button>

</form>


<?php if (!empty($_POST['number1']) && !empty($_POST['function']) && !empty($_POST['number2'])) : ?>
	
	<?php if ($_POST['function'] == 'a') : ?>
		<?php $total = $_POST['number1'] + $_POST['number2'];?>
				
	<?php elseif ($_POST['function'] == 's') : ?>
		<?php $total = $_POST['number1'] - $_POST['number2'];?>
		
	<?php elseif ($_POST['function'] == 'm') : ?>
		<?php $total = $_POST['number1'] * $_POST['number2'];?>
  
	<?php else : ?>
    <?php $total = $_POST['number1'] / $_POST['number2'];?>
	
	<?php endif; ?>
	
	<?php $cost = ($total * 0.13) + $total; ?>
		<p><strong> Your total cost is $ <?php echo number_format($cost, 2 , "." , "," );  ?></strong></p>
<?php endif; ?>

</body>
<footer>Copyright Jason Connell 2012</footer>
</html>