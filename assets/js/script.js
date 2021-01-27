$().ready(function(){
	$(".loginform").validate({
		rules: {
			username:"required",
			password:"required"
		},
		messages:{
			username:{
				required:"This field is required"
			},
			password:{
				required:"This field is required"	
			}
		}
	});


	$(".registerform").validate({
		rules: {
			username:{
				required:true,
				minlength:3
			},
			email:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:3,
			},
			cpassword:{
				required:true,
				equalTo:'#password'
			}
		},
		messages:{
			username:{
				required:"This field is required",
				minlength: "Must contain at least 3 characters"
			},
			email:{
				required:"This field is required",
				email:"Entar a valid E-Mail Format"
			},
			password:{
				required:"This field is required",
				minlength: "Must contain at least 3 characters"	
			},
			cpassword:{
				required:"This field is required",
				equalTo:"Passwords must be equals"
			}
		}
	});


	$(".changeform").validate({
		rules:{
			password:{
				required:true,
				minlength:3
			},
			cpassword:{
				required:true,
				equalTo:"#password"
			}
		},
		messages:{
			password:{
				required:"This field is required",
				minlength:"Must contain at least 3 characters"	
			},
			cpassword:{
				required:"This field is required",
				equalTo:"Passwords must be equals"
			}
		}
	});

})