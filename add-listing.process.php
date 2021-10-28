<?php include('header.php'); 
include('function.php'); 
?>
<br>
<br>
<br>
<?php
//include 'db/db.php';
	if(isset($_POST['submit'])){
		extract($_POST);
		$set = "`ChartTimeFlame` = '".$ChartTimeFlame."',`DisplayContents` = '".$DisplayContents."',`Condition` = '".$Condition."',`Memo` = '".$Memo."'";

		if($id){
			$result = $db->update("listing",$set,"id = '$id'");
		}else{
			$result = $db->insert("listing",$set);	
		}
		if($result == true){
			redirect("listing.php");
		}else{
			redirect('add-listing.php?id='.$id);
		}
	}