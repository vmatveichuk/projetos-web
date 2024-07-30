$(document).ready(function(){
	var lista= [];
	$("#bAdicionarMusica").click(function(){
		lista.splice(0,0,$("#tNomeMusica").val());
		document.getElementById('divListaMusicas').innerHTML="";
		for (var i=0;i<lista.length;i++){
			$("#divListaMusicas").append("<div>"+lista[i]+"</div>");
		}
		})
	$("#bRemoverMusica").click(function(){
		lista.splice(parseInt($("#tPosicaoRemover").val()),parseInt($("#tQuantidadeRemover").val()));
		document.getElementById("divListaMusicas").innerHTML="";
		for(var i=0;i<lista.length;i++){
			$("#divListaMusicas").append("<div>"+lista[i]+"</div>");
		}
	})
});
