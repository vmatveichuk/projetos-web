$(document).ready(function(){

	$("#somar").click(function(){
		var soma1=parseInt($("#soma1").val());
		var soma2=parseInt($("#soma2").val());

		var soma = soma1 + soma2;

		alert(soma);
	});
	$("#subtrair").click(function(){
		var subt1=parseInt($("#subt1").val());
		var subt2=parseInt($("#subt2").val());

		var subtrair = subt1 - subt2;

		alert(subtrair);
	});
	$("#multiplicar").click(function(){
		var subt1=parseInt($("#multi1").val());
		var subt2=parseInt($("#multi2").val());

		var subtrair = subt1 * subt2;

		alert(subtrair);
	});
	$("#dividir").click(function(){
		var subt1=parseInt($("#div1").val());
		var subt2=parseInt($("#div2").val());

		var subtrair = subt1 / subt2;

		alert(subtrair);
	});
});