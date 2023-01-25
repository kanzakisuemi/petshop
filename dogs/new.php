<?php include '../inc/header.php'; ?>
  <form action="create.php" method="post" class="p-4">
    <div class="mb-2 col-5">
      <label for="nome" class="form-label">Nome</label><br>
      <input type="text" class="form-control" name="nome" required><br>
    </div>
    <div class="mb-2 col-5">
      <label for="raca" class="form-label">Raça</label><br>
      <input type="text" class="form-control" name="raca" required><br>
    </div>
    <div class="mb-2 col-5">
      <label for="data_nascimento" class="form-label">Nascimento</label><br>
      <input type="date" class="form-control" name="data_nascimento" required><br>
    </div>
    <div class="mb-2 col-5">
      <button class="btn btn-info" type="submit">Enviar</button>
    </div>
  </form>
<?php include '../inc/footer.php'; ?>
