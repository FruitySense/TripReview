window.load=start();

function start() {
	
	$("#response").hide();
	$("#response1").hide();
}	

$("#btn-login").click(function(){

 	var uname = $("#login-username").val();
 	var pass = $("#login-password").val();
 	
 	$.post("controller/login.php",{
 			name : uname,
 			password : pass
 		},
 			function(data, status){
 				
 					var res = data.split("-");
 					if(res[0] == uname){
 						// document.location.href="dashboard.php/id="+res[0];
 						redirectPost("dashboard.php",res[0])
	 				}else if(res[1] == uname){
	 					redirectPost("dashboard.php",res[1])
	 				}else{
	 					$("#response").text(" Warning !" + data);
						$("#response").show();
	 				}
 				
 			}
 		);
 		  
});


$("#btn-signup").click(function(){
 	$("#response").hide();
	var email = $("#email").val();
 	var fname = $("#firstname").val();
 	var lname = $("#lastname").val();
 	var password = $("#password").val();
 	var confpassword = $("#confpassword").val();
 	var name = fname + lname;
 	
 	if(email != "" || password !=""){
 		if(password == confpassword){
 		console.log(email + "   " + password + "   " + name);

	 		$.post("controller/register.php",{
	 			email: email,
	 			name : name,
	 			password : password
	 		},
	 			function(data, status){
	 				console.log(data);
	 				if(data == 1){
	 					document.location.href="index.php";
	 				}else{
	 					$("#response1").text(" Warning !" + data);
						$("#response1").show();
	 				}
	 				
	 			}
	 		);
	 	}else{

		 	$("#response1").text(" Warning !   Password does't not match");
			$("#response1").show();
		 	
	 	}
 	}else{
 		$("#response1").text(" Warning !   Enter All required Data");
		$("#response1").show();
 	}

 	

 		
});

function redirectPost(url, data) {
    
	var form = $('<form action="' + url + '" method="post">' +
	  '<input type="text" name="id" value="' + data + '" />' +
	  '</form>');
	$('body').append(form);
	form.submit();
}