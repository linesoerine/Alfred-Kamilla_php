// Status botton from kitchen 
$(document).ready(function() {
	$(".status-button").click(function() {
		 $(this).toggleClass('status-button-change').text($(this).hasClass('status-button-change') ? 'Afhentet' : 'Venter')
	 })
 })


// Eye show and hide password - Login site
var chanceWeek = new Date();

  function myFunction() {
    var passw = document.getElementById("myInput");
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

// Kitchen summery for todays day
$(document).ready(function(){

	//iterate through each textboxes and add keyup
	//handler to trigger sum event
	$(".valueToday").each(function() {

		$(this).keyup(function(){
			todaysSum();
		});
	});
});

function todaysSum() {

	var todaySum = 0;
	//iterate through each textboxes and add the values
	$(".valueToday").each(function() {

		//add only if the value is number
		if(!isNaN(this.value) && this.value.length!=0) {
			todaySum += parseFloat(this.value);
		}

	});
	//.toFixed() method will roundoff the final sum to 2 decimal places
	$("#todaysum").html(todaySum.toFixed());
}

// Customer summery for week - NOT WORKING AT THE MOMENT
//Monday summery
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


  // Tuesday summery
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
  

// Wedensday summery
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
  
  // Thursday summery
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
  
  // Friday summery
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

 // Monday Extra summery
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


// Tuesday Extra summery
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


// Wedensaday Extra summery
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

// Thursday Extra summery
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

// Friday Extra summery
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

// Drop down menu food description (info)
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


// Accordion for Customer pay site - NOT WORKING AT THE MOMENT
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
// Accordion for "Se oversigt" Template parts/ current_week_table
$(document).ready(function() {
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


// FAQ Accordion plus and minus 

    //toggle the component with class accordion_body
    $(".accordion-heading-container").click(function() {
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
	
	$(".kuvert_acco").click(function() {
		$(this).toggleClass('oversigt_container')

	})
});

// Checkbox payment overview
function checkBox() {
  var checkBox = document.getElementByClassName("myCheck");
  if (checkBox.checked == true){
	text.style.display = "block";
  } else {
	 text.style.display = "none";
  }
}

	document.getElementById('select-all').onclick = function() {
var checkboxes = document.getElementsByClassName('vechicle');
for (var checkbox of checkboxes) {
checkbox.checked = this.checked;
}
}

document.getElementById('select-all').onclick = function() {
var checkboxes = document.querySelectorAll('input[type="checkbox"]');
for (var checkbox of checkboxes) {
checkbox.checked = this.checked;
}
}

$('#select-all').click(function() {
var checked = this.checked;
$('input[type="checkbox"]').each(function() {
  this.checked = checked;
});
})

$('#select-all').click(function() {
$('input[type="checkbox"]').prop('checked', this.checked);
});


alert('din kartoffel')
  // Pop up profil - cancel subscription
$(document).ready(function() {

	const openModalButtons = document.querySelectorAll('[data-modal-target]')
	const closeModalButtons = document.querySelectorAll('[data-close-button]')
	const overlay = document.getElementById('overlay')
		
	openModalButtons.forEach(button => {
		button.addEventListener('click', () => {
		 const modal = document.querySelector(button.dataset.modalTarget)
		 openModal(modal)
		})
	})
	
	overlay.addEventListener('click', () => {
		const modals = document.querySelectorAll('.modal.active1')
		modals.forEach(modal => {
		closeModal(modal)
		})
	})

	closeModalButtons.forEach(button => {
		button.addEventListener('click', () => {
		const modal = button.closest('.modal')
		closeModal(modal)
		 })
	})
	
	function openModal(modal) {
		if (modal == null) return
		modal.classList.add('active1')
		overlay.classList.add('active1')
	}
		
	function closeModal(modal) {
		if (modal == null) return
		modal.classList.remove('active1')
		overlay.classList.remove('active1')
	}
	});