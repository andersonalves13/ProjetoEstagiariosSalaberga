 <?php 
 require '../conect.php';
    $id = $_POST['id_aluno'];
    $nome_Aluno = $_POST['nomeAluno'];
    $sub_area = $_POST['area1'];
    $sub_area2 = $_POST['area2'];
    $turma = $_POST['turmaAluno'];
    $email = $_POST['emailAluno'];
     $estado = $_POST['estadoAluno'];



    $update = mysqli_query($conn, "UPDATE turma_informatica set nome='$nome_Aluno',sub_area='$sub_area',sub_area2='$sub_area2',turma='$turma',email='$email',estado='$estado' where id like '$id'");
 ?>