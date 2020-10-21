$(function(){

  $("nomeAluno").keyUp(function(){
    var nomeAluno = $(this).val();

    //verifica se ha algo digitado
    if (nomeAluno != ''){
      var dados = {
        palavra : nomeAluno
      }
      $.post('../aluno/buscaAlunoTeste.php', dados, function(retorna){
        // mostrando oresultado
        $(".resultado").html(retorna);

      });
    }
  });
});