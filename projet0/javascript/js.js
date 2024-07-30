$(document).ready(function(){

	$("#botao1").click(function(){
		var num=parseInt($("#parimpar").val()).val();
		for(var i=0;i<num;i++){
			if (i%2==0) {
				var num2=i;
				alert(num2);
			}
		}
});
	$("#botao2").click(function(){
		var num=$("#parimpar").val();
		for(var i=0;i<num;i++){
			if (i%2!=0) {
				var num2=i;
				alert(num2);
			}
		}
});
});