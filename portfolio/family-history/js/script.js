$(function(){
	var loginBut1 	= $('#buttons button:eq(0)');
	var loginBut2 	= $('#buttons button:eq(1)');
	var loginForm	= $('.login');
	var signupForm	= $('.signup');

	signupForm.css('opacity','0');

	//show login
	loginBut1.on('click', function(){
		loginForm.css({
			'opacity' : 1,
			'z-index' : 1
		});
		signupForm.css({
			'opacity' : 0,
			'z-index' : -1
		});
	});

	//show signup
	loginBut2.on('click', function(){
		signupForm.css({
			'opacity' : 1,
			'z-index' : 1
		});
		loginForm.css({
			'opacity' : 0,
			'z-index' : -1
		});
	});
});
