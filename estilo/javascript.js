//função de limpar campos do formulario do aluno
function limpaAluno() {
	if(document.getElementById('nomeAluno').value!="") {
		document.getElementById('nomeAluno').value="";
		document.getElementById('idadeAluno').value="";
		document.getElementById('alunoTel1').value="";
		document.getElementById('alunoTel2').value="";
		document.getElementById('enderecoAluno').value="";
		document.getElementById('bairroAluno').value="";
		document.getElementById('cidadeAluno').value="";
		document.getElementById('selectSexo').value="SELECIONE";
  }
}