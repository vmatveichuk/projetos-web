$(document).ready(function (){
	$("#botao").click(function(){
		if ($("#nome").val()=="") {
			mudacor("nome");
		}
		if ($("#sobrenome").val()=="") {
			mudacor("sobrenome");
		}
		if ($("#e-mail").val()=="") {
			mudacor("e-mail");
		}
		if ($("#matricula").val()=="") {
			mudacor("matricula");
		}
		if ($("#usuario").val()=="") {
			mudacor("usuario");
		}
		if ($("#senha").val()=="") {
			mudacor("senha");
		}
		if ($("#confirmarsenha").val()=="") {
			mudacor("confirmarsenha");
		}
	});
});


function mudacor(id){
$("#"+id).addClass("vermelho");
}