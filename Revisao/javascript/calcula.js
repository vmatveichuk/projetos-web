$(document).ready(function (){
	$("#somar").click(function(){
		var num1=parseInt($("#numero1").val());
		var num2=parseInt($("#numero2").val());
		var resultado=num1+num2;
		alert(resultado);
		});
	$("#subtrair").click(function(){
		var num1=parseInt($("#sub1").val());
		var num2=parseInt($("#sub2").val());
		var resultado=num1+num2;
		alert(resultado);
		});
	$("#multiplicar").click(function(){
		var num1=parseInt($("#multi1").val());
		var num2=parseInt($("#multi2").val());
		var resultado=num1+num2;
		alert(resultado);
		});
	$("#dividir").click(function(){
		var num1=parseInt($("#div1").val());
		var num2=parseInt($("#div2").val());
		var resultado=num1+num2;
		alert(resultado);
		});


});