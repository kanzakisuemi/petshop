<?php include 'inc/header.php'; ?>
<?php $dogs = mysqli_query($conn, "SELECT * FROM dogs"); ?>
<div class="container col-5 ">
  <table class="table caption-top">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Raça</th>
        <th>Nascimento</th>
      </tr>
    </thead>
    <tbody>
      <?php while($dog = mysqli_fetch_array($dogs)): ?>
        <tr>
          <td><?= $dog['nome']; ?></td>
          <td><?= $dog['raca']; ?></td>
          <td><?= $dog['data_nascimento']; ?></td>
        </tr?>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<?php include 'inc/footer.php'; ?>
