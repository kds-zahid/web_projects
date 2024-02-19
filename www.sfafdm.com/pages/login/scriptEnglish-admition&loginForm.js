
	function login(){
		document.getElementById("login").style.display="inline";
		document.getElementById("submit").style.display="none";
		document.getElementById("form-cover-main").style.marginTop="0px";
	}
	function submit(){
		document.getElementById("login").style.display="none";
		document.getElementById("submit").style.display="inline";
		document.getElementById("form-cover-main").style.marginTop="0px";
	}
	
	function fs(){
		var name=document.getElementById("fname");
		name=name.value;
		var depertment=document.getElementById("fdepertment");
		depertment=depertment.value;
		var phonenumber=document.getElementById("fphonenumber");
		phonenumber=phonenumber.value;
		
		var password=document.getElementById("fpassword");
		password=password.value;
		var repassword=document.getElementById("frepassword");
		repassword=repassword.value;
		if(name==""){
			
			alert('Please Enter your name.')
		}
		else if (phonenumber==""){
			
			alert(name+'! please Enter your phone number.')
		}
		else if (password==""){
			
			alert('Enter password for security. Understand! '+name)
		}
		else if (password!=repassword){
			alert(name+'! password and re-password will be same character.')
		}
		else if (password==repassword){
		alert('Welcome '+name+'! Submit successfull.')
		
		}
	}