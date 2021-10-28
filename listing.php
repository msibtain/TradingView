<?php include('header.php'); 


$results = $db->select("listing","*");
?>

<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 text-right">
      <a href="add-listing.php" class="btn btn-primary">Add New</a>
      <br>
      <br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th width="20" scope="col">ID</th>
            <th scope="col">ChartTimeFlame</th>
            <th scope="col">DisplayContents</th>
            <th scope="col">Condition</th>
            <th scope="col">Memo</th>
            <th width="50" scope="col">Edit</th>
            <th width="50" scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($results as $result) {
              ?>  
              <tr>
                <th scope="row"><?php echo $result->ID; ?></th>
                <td><?php echo $result->ChartTimeFlame; ?></td>
                <td><?php echo $result->DisplayContents; ?></td>
                <td><?php echo $result->Condition; ?></td>
                <td><?php echo $result->Memo; ?></td>
                <td><a href="add-listing.php?id=<?php echo $result->ID; ?>" class="btn btn-primary">Edit</a></td>
                <td><button type="button" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete?');" >Delete</button></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
   </div>
  </div>
</div>
<?php include('footer.php'); ?>