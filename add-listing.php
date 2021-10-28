<?php include('header.php');
$page_button = "Save"; 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$result = $db->select("listing","*","id='$id'");
	$result = $result[0];
	$date = $result->DateTime;
	$page_button = "Update"; 
}

?>
<br>
<br>
<br>
<div class="row">
	<div class="offset-md-1 col-md-11">
		<form action="add-listing.process.php" method="post">
			<label for="ChartTimeFlame">ChartTimeFlame</label><br>
			<input type="text" id="ChartTimeFlame" name="ChartTimeFlame" required value="<?php echo $result->ChartTimeFlame ?>"><br>
			<label for="DisplayContents">DisplayContents</label><br>
			<input type="text" id="DisplayContents" name="DisplayContents" required value="<?php echo $result->DisplayContents ?>"><br>
			<label for="Condition">Condition</label><br>
			<input type="text" id="Condition" name="Condition" required value="<?php echo $result->Condition ?>"><br>
			<label for="Memo">Memo</label><br>
			<input type="text" id="Memo" name="Memo" required value="<?php echo $result->Memo ?>"><br>
			<label for="DateTime">DateTime</label><br>
			<input type="date" id="DateTime" name="DateTime" required value="<?php echo date("Y-m-d", strtotime($date)); ?>"><br><br>
			<input type="hidden" name="id" value="<?php echo $id?>">
			<input type="submit" name="submit" class="btn btn-primary" value="<?php echo $page_button?>" > 
			<a href="listing.php" class="btn btn-primary">Back</a>
		</form>
	</div>
</div>