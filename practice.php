<html>
	<form action="practice.php" method="POST"> 
		<h1>Enter your string</h1><br/>
		<textarea name="text" id="ta1" cols="30" rows="10"></textarea><br>
		<h2>Enter the word</h2><br>
		<input type="text" name="delete"><br/>
		<h2>Enter the replaced word</h2><br>
		<input type="text" name="replace"><br/>
		<br><br>
		<input type="submit" value="SUBMIT">
	</form>
</html>
<?php
	if(isset($_POST['text'])&&isset($_POST['delete'])&&isset($_POST['replace'])){
		$text = $_POST['text'];
		$delete = $_POST['delete'];
		$replace = $_POST['replace'];
	}

	$len = strlen($delete);

	if(!empty($text)&&!empty($delete)&&!empty($replace)){
		$temp=0;
		while($pos = strpos($text,$delete,$temp)){
			$temp = $pos + $len;
			$text=substr_replace($text,$replace,$pos,$len);
		}
		echo $text;
	}
	else{
		echo "enter all fields";
	}
?>