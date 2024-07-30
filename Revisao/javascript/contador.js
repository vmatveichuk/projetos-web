$(document).ready(function(){
	$("#botao1").click(function(){
		var num1=parseInt($("#numerospar").val());
		for(var i=1;i<num1;i++){
			if(i%2==0){
				var num2=i;
				alert(num2);
			}
		}
});
	$("#botao2").click(function(){
		var num1=parseInt($("#numeroimpar").val());
		for(var i=1;i<num1;i++){
			if(i%2==0){
				var num2=i;
				alert(num2)
			}
		}



});


		});



