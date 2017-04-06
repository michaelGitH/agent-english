var Position = $(window).scrollTop();
var pos = 0;
var window_size_befor = document.documentElement.clientHeight;

/*-----------------------------RESIZING------------------*/

function GlobalResizing(){
	form_size( $(".reg_form") , 0.65, 0.62698413);
	mountain_size();
	form_size( $(".reg_in_form") , 0.2672796610169492, 2.237224811608907);
	form_size( $(".fp_form") , 0.5, 0.62698413);
	fp_resizing();
	//var height = document.documentElement.clientHeight;
	//var width = document.documentElement.clientWidth;
}

function form_size(form, hpi, wpi){
	height = document.documentElement.clientHeight * hpi;
	form.css("height", function(){
		return height + "px";
	});   //94.58333333333333
	var mywidth = (height * wpi) + "px"; //1.6 height * 2.033898305084746 * 0.1871768430555556
	form.css("width", function(){
		return mywidth;
	});
}

function mountain_size(){
	var window_size = document.documentElement.clientHeight;
	var x = $("#mountain");
	if(window_size < "710"){
		height = window_size * 0.55;
		x.css("height", function(){
			return height + "px";
		});   //94.58333333333333
		var mywidth = (height * 1.089041095890411) + "px"; 
		x.css("width", function(){
			return mywidth;
		});
	}
	else if(window_size > 810){
		x.css("margin-top", function(){
			return window_size * 0.25;
		});				
	}
	else{
		x.css("margin-top", function(){
			return window_size * 0.2;
		});			
	}
	//window_size_befor = window_size;
}

function fp_resizing(){
	var window_size = document.documentElement.clientHeight;
	var x = $(".rocket");
	if(window_size > "710"){
		x.css("margin-bottom", function(){
			return (window_size - 710) * 0.55;
		});
	}
	else {
		x.css("margin-bottom", 0);		
	}
	window_size_befor = window_size;
}

$(window).resize(GlobalResizing);
$(document).ready(GlobalResizing);

/*--------------------------END-OF-RESIZING------------------*/
/*-----------SUPPER_SCROLL-------------------------*/

function slowScroll(id){
	var offset = 0;
	$(".maincontainer").animate({
		top: id
	}, 500, function(){
		
	});
	if(id == "-101%") pos = 1;
	else if(id == "-202%") pos = 2;
	else if(id == "0%") pos = 0;
	return false;
}

function slowlyScroll(id, container){
	container.animate({
		top: id
	}, 500);
	return false;
}

$(document).ready(function(){
	var container = $(".maincontainer");
	$(document).on('keydown', function(event){
		if(event.which == 40 && pos < 3){
			++pos;
			ScreenMove = -(pos * 101) + "%";
			slowlyScroll(ScreenMove, container);
		}
		else if(event.which == 38 && pos > 0){
			--pos;
			ScreenMove = -(pos * 101) + "%";
			slowlyScroll(ScreenMove, container);
		}
	});
});

$(document).ready(function(){
	$(".wrapper").css("overflow", "hidden");
	var
		container = $(".maincontainer");
		inscroll = false;
		Screen = (document.documentElement.clientHeight);
		var ScreenMove = 0;
	$("body").on("mousewheel", function(event){
		if(!inscroll){
			if(event.deltaY < 0 && pos < 3){
					inscroll = true;
					++pos;
					ScreenMove = -(pos * 101) + "%";
					slowlyScroll(ScreenMove, container);
			}
			else if(event.deltaY > 0 && pos > 0){
					inscroll = true;
					--pos;
					ScreenMove = -(pos * 101) + "%";
					slowlyScroll(ScreenMove, container);
			}
		}
		else{
			setTimeout(function(){
				inscroll = false;
			}, 500);
		}
	});
});


/*---------------------REGISTRATION_AND_ENTERANCE-----------------------*/

$(document).ready(function(){
	var in_but = $(".reg_form_button");
	in_but.show();
	var email, pass, nof;
	in_but.bind("click", function(event){
		var but = event.target.name;
		if(but == "done"){
			email = $("#reg_form_username").val();
			pass = $("#reg_form_pass").val();
			nof = 1;			
		}
		else if(but == "in"){
			email = $(".thp_email").val();
			pass = $(".thp_pass").val();
			nof = 3;
		}
		else{
			email = $(".fp_email").val();
			pass = $(".fp_pass").val();
			nof = 4;			
		}
		$.ajax({
			url: "landing/check.php",
			type: "POST",
			data: ({email: email, pass: pass, nof: nof}),
			dataType: "html",
			beforeSend: BeforeSendIn,
			success: SuccessIn
		});
	});
});

function BeforeSendIn(){
	$(".circle_form img").css("display", "block");
}
function SuccessIn(data){
	$(".circle_form img").css("display", "none");
	var len = data.length;
	var nof = data.slice(len-1);
	var str = data.slice(0, -1);
	if(data == "Введите email" + 1){
		$(".passErr").text("")
		$(".emailErr").text(str);
	}
	else{
		if(data == '1'){
			document.location ="PersonalAccount.php";
		}
		else if(data == '2')
			document.location ="reg_form.php";
		else{
			if(nof == 3){
				$(".thp_error").text(str);
			}
			else if(nof == 4){
				$(".passErrFP").text(str);
			}
			else{
				$(".emailErr").text("");
				$(".passErr").text(str);
			}
		}
	}
}

/*-------------------------------------------------------------------------------*/

function shower(elem){
	elem.show();
}

$(document).ready(function(){
	$("#Progress").mousemove(function(){
		$(".inform_panel").show();
	});
});
$(document).ready(function(){
	$("#Progress").mouseleave(function(){
		$(".inform_panel").hide();
	});
});