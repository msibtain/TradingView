<?php include('header.php'); ?>

<br>
<br>
<br>
<?php 

$results = $condition->Select();

?>

<div class="container">
    
    <div class="row">
        <div class="col-lg-12 text-right">
            <button onclick="javascript: location.reload();" class="btn btn-warning">Refresh</button>
        </div>
    </div>
        
    <br>
    <div class="row">
        <div class="col-lg-12">
            
<table class="table table-striped">

  <thead>
    <tr>
      <th width="130">Chart Time</th>
      <th>Conditions</th>
      <th width="120">Status</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 

  foreach ($results as $result) 
  {
      ?>
      <tr>
        <td align="center"><?php echo $result->ChartTimeFlame;?></td>
        <td><?php echo $result->Conditions;?></td>
        <td align="center">
        <?php 
        if ($result->status == "0") 
        {
            ?>
            <a href="javascript:;" class="btn btn-danger">Not Clear</a>
            <?php
        }
        else
        {
            ?>
            <a href="javascript:;" class="btn btn-primary">Clear</a>
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


        </div>
    </div>
</div>

<?php include('footer.php'); ?>