<?php
//PRINT FIBONACCI SERIES
$number = filter_input(INPUT_POST, 'input');

echo "<h2 style='color: green'>Fibonacci series using recursive function:</h2>";

//RECURSIVE FUNCTION FOR FIBONACCI SERIES
function series($number){
    if($number == 0){
		return 0;
	}else if($number == 1){
		return 1;
	}else{
		return (series($number-1)+series($number-2));
	}
}

//CALL FUNCTION
for($i=0; $i<$number; $i++){
	echo series($i);
}
?>
<html>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <p><input type="number" name="input" value="" min="0" placeholder="Input a number to display F.Series" style="width: 210px;"></p>
   <input type="submit" value="Check Fibonacci Series" style="background:green; color:white; padding:5px; border-radius:5px; cursor:pointer;">
</form>
</html>