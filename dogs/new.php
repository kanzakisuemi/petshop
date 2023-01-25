<?php include '../inc/header.php'; ?>
<div class="container p-4">
  <form action="create.php" method="post">
    <div class="container col-5">
      <div class="mb-2">
        <label for="nome" class="form-label">Nome</label><br>
        <input type="text" class="form-control" name="nome" required><br>
      </div>
      <div class="mb-2">
        <label for="raca" class="form-label">Raça</label><br>
        <input type="text" class="form-control" name="raca" required><br>
      </div>
      <div class="mb-2">
        <label for="data_nascimento" class="form-label">Nascimento</label><br>
        <input type="date" class="form-control" name="data_nascimento" required><br>
      </div>
      <div class="mb-2">
      <button class="btn btn-info" type="submit">Enviar</button>
      </div>
    </div>
  </form>
</div>
<?php include '../inc/footer.php'; ?>
