function PassWordeye() {
    var passw = document.getElementById("eyeIcon");
    if (passw.type === "password") {
      passw.type = "text";
      eyeop.style.display = "none";
      eyecls.style.display = "block";
    } else {
      passw.type = "password";
      eyeop.style.display = "block";
      eyecls.style.display = "none";
    }
  }

  

  var acc = document.getElementsByClassName("kuvert_acco");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }


  // MONDAY SUM //
  $(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".valueMon").each(function() {

			$(this).keyup(function(){
				mondaySum();
			});
		});

	});

	function mondaySum() {

		var sumMon = 0;
		//iterate through each textboxes and add the values
		$(".valueMon").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sumMon += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum").html(sumMon.toFixed());
  }


  // Tuesday //
  $(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".valueTue").each(function() {

			$(this).keyup(function(){
				tuesdaySum();
			});
		});

	});

	function tuesdaySum() {

		var sumTue = 0;
		//iterate through each textboxes and add the values
		$(".valueTue").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sumTue += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum1").html(sumTue.toFixed());
  }
  

// WEDENSDAY //
  $(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".valueWed").each(function() {

			$(this).keyup(function(){
				wedensdaySum();
			});
		});

	});

	function wedensdaySum() {

		var sumWen = 0;
		//iterate through each textboxes and add the values
		$(".valueWed").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sumWen += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum2").html(sumWen.toFixed());
  }
  
  // THURSDAY //
  $(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".valueThu").each(function() {

			$(this).keyup(function(){
				thursdaySum();
			});
		});

	});

	function thursdaySum() {

		var sumThu = 0;
		//iterate through each textboxes and add the values
		$(".valueThu").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sumThu += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum3").html(sumThu.toFixed());
  }
  
  // FRIDAY //
  $(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".valueFri").each(function() {

			$(this).keyup(function(){
				fridaySum();
			});
		});

	});

	function fridaySum() {

		var sumFri = 0;
		//iterate through each textboxes and add the values
		$(".valueFri").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sumFri += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum4").html(sumFri.toFixed());
	}

	function showPrice() {
		var priceExtra = document.getElementById("myDIV");
		if (priceExsta.style.display === "none") {
		  priceExtra.style.display = "block";
		} else {
		  priceExtra.style.display = "none";
		}
	  }

	  function showDescription() {
		var descriptionExtra = document.getElementById("myDescrip");
		if (descriptionExsta.style.display === "none") {
		  descriptionExtra.style.display = "block";
		} else {
		  descriptionExtra.style.display = "none";
		}
	  }


	var acc = document.getElementsByClassName("kuvert_acco");
  	var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
	  

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }


  $(document).ready(function() {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function() {
      if ($('.accordion_body').is(':visible')) {
        $(".accordion_body").slideUp(300);
        $(".plusminus").text('+');
      }
      if ($(this).next(".accordion_body").is(':visible')) {
        $(this).next(".accordion_body").slideUp(300);
        $(this).children(".plusminus").text('+');
      } else {
        $(this).next(".accordion_body").slideDown(300);
        $(this).children(".plusminus").text('-');
      }
    });
  });



 

  function validation(){
	var input_text = document.querySelector("#input_text");
	var input_password = document.querySelector("#input_password");
	var error_msg = document.querySelector(".error_msg");

	if(input_text.value.length <= 3 || input_password.value.length <= 3 ){
		error_msg.style.display = "inline-block";
		input_text.style.border = "1px solid #f74040";
		input_password.style.border = "1px solid #f74040";
		return false;
	}
	else{
		return true;
	}
	
}

var input_fields = document.querySelectorAll(".input");
var login_btn = document.querySelector("#login_btn");

input_fields.forEach(function(input_item){
	input_item.addEventListener("input", function(){
		if(input_item.value.length > 3){
			login_btn.disabled = false;
			login_btn.className = "btn enabled"
		}
	})
})

