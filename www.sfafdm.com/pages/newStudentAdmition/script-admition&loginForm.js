function fs(){
		var name=document.getElementById("fname");
		name=name.value;
		var phonenumber=document.getElementById("fphonenumber");
		phonenumber=phonenumber.value;
		var password=document.getElementById("fpassword");
		password=password.value;
		var repassword=document.getElementById("frepassword");
		repassword=repassword.value;
		if(name==""){
			
			alert('নাম লিখবে তো ');
		}
		else if (phonenumber==""){
			
			alert(name+' তোমার ফোন নম্বর লিখনি।');
		}
		else if (password==""){
			
			alert('সিকিউরিটির জন্য পাসওয়ার্ড লিখতে হবে। বুঝলে '+name);
		}
		else if (password!=repassword){
			alert(name+', পাসওয়ার্ড এবং রি-পাসওয়ার্ড একই লিখতে হবে।');
		}
		else if (password==repassword){
		alert('হ্যালো  '+name+' তুমি সফলভাবে সাবমিট করেছ। তোমাকে sfafdm এর পক্ষ থেকে শুভেচ্ছা।');
		
		}
	}