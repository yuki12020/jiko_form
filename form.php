<?php echo "自己参照フォーム";?>
<form  action ="<?=$_SERVER['SCRIPT_NAME']?>" method ="post">
	<!--<input type = "text" name ="keyword">-->
	<input type = "submit" name="send" value ="test">
</form>
<?php
 $msg = $_POST['send'];
 echo $msg;
?>

