	<form action="" method="POST">
		input teks disini : <br>
		<textarea name="input" cols="40" rows="4"></textarea><br>
		<input type="submit" name="submit" value="proses">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$txt = $_POST['input'];
			echo "<u>Tanpa nl2br()  : </u> <br>$txt<br><br>";
			echo "<u>dengan nl2br() : </u> <br>".nl2br ($txt);
		} 

		echo "nl2br berfungsing ketika kita mengenter di textarea di hasil pun  akan ikut terenter";
	?>