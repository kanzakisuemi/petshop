<?php include 'inc/header.php'; ?>
<div class="container">
  <form action="dogs_create.php" method="post">
    <div class="mb-3">
      <label for="nome" class="form-label">Name</label><br>
      <input type="text" class="form-control" name="nome" required><br>
    </div>
    <div class="mb-3">
      <label for="raca" class="form-label">Breed</label><br>
      <input type="text" class="form-control" name="raca" required><br>
    </div>
    <div class="mb-3">
      <label for="data_nascimento" class="form-label">Birthday</label><br>
      <input type="date" class="form-control" name="data_nascimento" required><br>
    </div>
    <div class="mb-3">
    <button class="btn btn-info" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php include 'inc/footer.php'; ?>
