<?php include('header.php'); ?>

<br>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td></td>
      <td><a href="add-listing.php?id=1" class="btn btn-primary">Edit</a></td>
      <td><button type="button" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete?');" >Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td></td>
      <td><a href="add-listing.php?id=2" class="btn btn-primary">Edit</a></td>
      <td><button type="button" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete?');">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td></td>
      <td><a href="add-listing.php?id=3" class="btn btn-primary">Edit</a></td>
      <td><button type="button" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete?');">Delete</button></td>
    </tr>
  </tbody>
</table>

<?php include('footer.php'); ?>