<?php include 'inc/header.php' ?>
<?php $dogs = mysqli_query($conn, "SELECT * FROM dogs") ?>
<table class="table caption-top" style="width: 60%; margin: auto;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Breed</th>
      <th scope="col">Birthday</th>
    </tr>
  </thead>
  <tbody>
    <?php while($dog = mysqli_fetch_array($dogs)): ?>
      <tr>
        <td><?= $dog['nome'] ?></td>
        <td><?= $dog['raca'] ?></td>
        <td><?= $dog['data_nascimento'] ?></td>
      </tr?>
    <?php endwhile ?>
  </tbody>
</table>
<?php include 'inc/footer.php' ?>
