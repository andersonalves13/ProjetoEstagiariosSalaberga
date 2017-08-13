 <?php  
require '../conect.php';

$nome_aluno=$_POST['nome'];
$empresa=$_POST['empresa'];
$subarea = $_POST['area'];
$telefone = $_POST['telefone'];
$turma = $_POST['turma'];

$arq = $_FILES['arquivo_pdf'];
$pasta = 'planos_estagios/';
$permissao = array('application/pdf');
$ext = $arq['type'] == 'application/pdf';
$size = 1021*1021*2;

if($arq['size'] > $size){
echo'Arquivos muito grande';
}elseif(!in_array($arq['type'], $permissao)){
echo'somente aceitamos arquivos PDF, DOC e TXT';
}else{                        
$pasta= 'planos_estagios/';
date_default_timezone_set('America/Sao_Paulo');
$ano = date('Y');
$mes = date('m');
$dia = date('d');

$hora = date('H:i');
if(!file_exists($pasta.$ano)){
mkdir($pasta.$ano, 775);
}
if(!file_exists($pasta.$ano.'/'.$mes)){
mkdir($pasta.$ano.'/'.$mes, 775);
}
$nome = utf8_decode($arq['name']);                       


if(move_uploaded_file($arq['tmp_name'], $pasta.$ano.'/'.$mes.'/'.$nome)){

    $inserir = mysqli_query($conn, "INSERT into documentos values('','$nome','$nome_aluno','$turma','$empresa','$subarea','$telefone','$mes','$dia','$hora')");
}

}                    


?>
