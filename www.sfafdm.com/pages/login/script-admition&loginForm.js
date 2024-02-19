
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
	
	function checkSubmit(){
		var name=document.getElementById("fname");
		name=name.value;
		var password=document.getElementById("fpassword");
		password=password.value;
		var repassword=document.getElementById("frepassword");
		repassword=repassword.value;
		if(name==""){
			
			alert('নাম লিখবে তো ')
			document.write('<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/www.sfafdm.com/pages/login/">');
		}
		else if (password==""){
			
			alert('সিকিউরিটির জন্য পাসওয়ার্ড লিখতে হবে। বুঝলে '+name)
		}
		else if (password!=repassword){
			alert(name+', পাসওয়ার্ড এবং রি-পাসওয়ার্ড একই লিখতে হবে।')
		}
		else if (password==repassword){
		alert('হ্যালো  '+name+' তুমি সফলভাবে সাবমিট করেছ। তোমাকে sfafdm এর পক্ষ থেকে শুভেচ্ছা।')
		
		}
	}