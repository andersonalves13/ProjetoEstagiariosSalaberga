     <div class="modal-header">

            <h4 class="modal-title" id="myModalLabel" style="">Resultado Seleção Turma - 3° <?php   $id = $_POST['id_curso']; if ($id == "A") {

              echo $id." Enfermagem";
            } echo $id;?></h4>

            </div>
            <div class="modal-body">
        
           
            
    <form action="" method="POST">
    <div id="barra_rolagem">
           <table id="horario">
  <thead>
  <tr>
  <th>Aluno</th>
  <th>Empresa</th>
  <th>Supervisor</th>
  <th >SubÁrea</th>
    
  </tr>

  </thead>
  <tfoot>
  </tfoot>
  <tbody>

 
 <?php 
  require 'conect.php';
  $id = $_POST['id_curso'];

  if ($id == 'Nulo') {
  	echo '<td colspan="3">Por favor, escolha uma opção de curso.</td>';
  }
  else{

  $selecionar = mysqli_query($conn, "SELECT * from  vagas where turma like '$id' and estado like 'selecionado' order by nome_aluno");
  $valor = mysqli_num_rows($selecionar);
  if ($valor!=0) {
while ($sql=mysqli_fetch_array($selecionar)) {

echo '
<tr>
<td>'.utf8_encode($sql['nome_aluno']).'</td>
<td>'.utf8_encode($sql['nome_empresa']).'</td>
<td>'.utf8_encode($sql['supervisor']).'</td>
<td>'.$sql['subarea'].'</td>
</tr>' ;
    }
    

      }
      else { 
        echo ' <td colspan="5">Ainda não foram realizadas seleções, por favor aguarde...</td>';



      }

     
      
  }


   ?>
    </tbody>
  </table>
  </div>
  </form>
   </div>
   <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="reset">Fechar</button>

            </div>
         
       