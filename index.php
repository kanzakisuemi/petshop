<?php include 'inc/header.php' ?>
<?php $result = mysqli_query($conn, "SELECT * FROM dogs") ?>
<table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Breed</th>
      <th scope="col">Birthday</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['raca'] ?></td>
        <td><?= $row['data_nascimento'] ?></td>
      </tr?>
    <?php endwhile ?>
  </tbody>
</table>
<?php include 'inc/footer.php' ?>
