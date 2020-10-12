function PassWordeye() {
    var passWo = document.getElementById("eyeIcon");
    if (passWo.type === "password") {
      passWo.type = "text";
      eyeop.style.display = "none";
      eyecls.style.display = "block";
    } else {
      passWo.type = "password";
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

 // MONDAY SUM EXTRA//
 $(document).ready(function(){

	//iterate through each textboxes and add keyup
	//handler to trigger sum event
	$(".valueMonEx").each(function() {

		$(this).keyup(function(){
			mondaySumEx();
		});
	});

});

function mondaySumEx() {

	var sumMonEx = 0;
	//iterate through each textboxes and add the values
	$(".valueMonEx").each(function() {

		//add only if the value is number
		if(!isNaN(this.value) && this.value.length!=0) {
			sumMonEx += parseFloat(this.value);
		}

	});
	//.toFixed() method will roundoff the final sum to 2 decimal places
	$("#sum6").html(sumMonEx.toFixed());
}


// Tuesday //
$(document).ready(function(){

	//iterate through each textboxes and add keyup
	//handler to trigger sum event
	$(".valueTueEx").each(function() {

		$(this).keyup(function(){
			tuesdaySumEx();
		});
	});

});

function tuesdaySumEx() {

	var sumTueEx = 0;
	//iterate through each textboxes and add the values
	$(".valueTueEx").each(function() {

		//add only if the value is number
		if(!isNaN(this.value) && this.value.length!=0) {
			sumTueEx += parseFloat(this.value);
		}

	});
	//.toFixed() method will roundoff the final sum to 2 decimal places
	$("#sum7").html(sumTueEx.toFixed());
}


// WEDENSDAY //
$(document).ready(function(){

	//iterate through each textboxes and add keyup
	//handler to trigger sum event
	$(".valueWedEx").each(function() {

		$(this).keyup(function(){
			wedensdaySumEx();
		});
	});

});

function wedensdaySumEx() {

	var sumWenEx = 0;
	//iterate through each textboxes and add the values
	$(".valueWedEx").each(function() {

		//add only if the value is number
		if(!isNaN(this.value) && this.value.length!=0) {
			sumWenEx += parseFloat(this.value);
		}

	});
	//.toFixed() method will roundoff the final sum to 2 decimal places
	$("#sum8").html(sumWenEx.toFixed());
}

// THURSDAY //
$(document).ready(function(){

	//iterate through each textboxes and add keyup
	//handler to trigger sum event
	$(".valueThuEx").each(function() {

		$(this).keyup(function(){
			thursdaySumEx();
		});
	});

});

function thursdaySumEx() {

	var sumThuEx = 0;
	//iterate through each textboxes and add the values
	$(".valueThuEx").each(function() {

		//add only if the value is number
		if(!isNaN(this.value) && this.value.length!=0) {
			sumThuEx += parseFloat(this.value);
		}

	});
	//.toFixed() method will roundoff the final sum to 2 decimal places
	$("#sum9").html(sumThuEx.toFixed());
}

// FRIDAY //
$(document).ready(function(){

	//iterate through each textboxes and add keyup
	//handler to trigger sum event
	$(".valueFriEx").each(function() {

		$(this).keyup(function(){
			fridaySumEx();
		});
	});

});

function fridaySumEx() {

	var sumFriEx = 0;
	//iterate through each textboxes and add the values
	$(".valueFriEx").each(function() {

		//add only if the value is number
		if(!isNaN(this.value) && this.value.length!=0) {
			sumFriEx += parseFloat(this.value);
		}

	});
	//.toFixed() method will roundoff the final sum to 2 decimal places
	$("#sum10").html(sumFriEx.toFixed());
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

