<?php include 'inc/header.php'; ?>
  <form style="margin: auto; margin-top: 3%; width: 60%;" action="dogs_create.php" method="post">
    <label for="nome" class="form-label">Name</label><br>
    <input type="text" class="form-control" name="nome" required><br>
    <label for="raca" class="form-label">Breed</label><br>
    <input type="text" class="form-control" name="raca" required><br>
    <label for="data_nascimento" class="form-label">Birthday</label><br>
    <input type="date" class="form-control" name="data_nascimento" required><br>
    <button class="btn btn-info" type="submit">Submit</button>
  </form>
<?php include 'inc/footer.php'; ?>

