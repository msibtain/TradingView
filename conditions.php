<?php include('header.php'); ?>

<br>
<br>
<br>
<?php 

$results = $condition->Select();

?>
<table class="table table-striped">

  <thead>
    <tr>
      <th>Chart Time Flame</th>
      <th>Conditions</th>
      <th>Status</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 

  foreach ($results as $result) 
  {
      ?>
      <tr>
        <td><?php echo $result->ChartTimeFlame;?></td>
        <td><?php echo $result->Conditions;?></td>
        <td>
        <?php 
        if ($result->status == "0") 
        {
            ?>
            <a href="condition.php" class="btn btn-danger">Not Clear</a>
            <?php
        }
        else
        {
            ?>
            <a href="condition.php" class="btn btn-primary">Clear</a>
            <?php
        }
        ?>
      </td>
  </tr>
  <?php 
}
?>
</tbody>
</table>


<?php include('footer.php'); ?>