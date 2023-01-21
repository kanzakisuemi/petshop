<?php header('location:alert.php');
  include 'inc/open_dbconn.php'; ?>
<?php
  $sql = "INSERT INTO dogs (nome, raca, data_nascimento) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $nome, $raca, $data_nascimento);

  $nome =$_POST['nome'];
  $raca =$_POST['raca'];
  $data_nascimento =$_POST['data_nascimento'];

  $stmt->execute();
  $stmt->close()
?>
<?php include 'inc/close_dbconn.php'; ?>
