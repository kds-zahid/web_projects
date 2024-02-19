
		document.getElementById('head').style.backgroundColor='red';
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
	var s=d.getSeconds();
	
	if (s>50){
			s10=s-50
	}
	else if (s>40){
			s10=s-40
	}
	else if (s>30){
			s10=s-30
	}
	else if (s>20){
			s10=s-20
	}
	else if (s>10){
			s10=s-10
	}
	else{
			s10=s
	}
	
	if (s10==1){
			document.getElementById('head').style.color='red';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==2){
			document.getElementById('head').style.color='cyan';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==3){
			document.getElementById('head').style.color='green';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==4){
			document.getElementById('head').style.color='blue';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==5){
			document.getElementById('head').style.color='gray';
			document.getElementById('head').style.backgroundColor='black';
			
	}
	else if (s10==6){
			document.getElementById('head').style.color='pink';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==7){
			document.getElementById('head').style.color='tomato';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==8){
			document.getElementById('head').style.color='black';
			document.getElementById('head').style.backgroundColor='#7D16FB';
	}
	else if (s10==9){
			document.getElementById('head').style.color='white';
			document.getElementById('head').style.backgroundColor='black';
	}
	else if (s10==10){
			document.getElementById('head').style.color='tomato';
			document.getElementById('head').style.backgroundColor='black';
	}
	
}