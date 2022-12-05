/* create an array list for the checkout */



/* // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });*/



/* // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
*/




/*  contact us function
$.validator.setDefaults( {
		submitHandler: function () {
			alert( "submitted!" );
		}
	} );
	
	$( document ).ready( function () {
		$( "#contact-form" ).validate( {
			rules: {
				firstname: "required",
				email: {
					required: true,
					email: true
				},
				lastname: "required",
				message: "required",
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				email: "Please enter a valid email address",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				message: "Please enter your Message",
				agree: "Please accept our policy"
			},
			errorElement: "div",
			errorPlacement: function ( error, element ) {
				// Add the `help-block` class to the error element
				error.addClass( "help-block" );

				if ( element.prop( "type" ) === "checkbox" ) {
					error.insertAfter( element.parent( "input" ) );
				} else {
					error.insertAfter( element );
				}
			},
			highlight: function ( element, errorClass, validClass ) {
				$( element ).parents( ".col-md-4, .col-md-12" ).addClass( "has-error" ).removeClass( "has-success" );
			},
			unhighlight: function (element, errorClass, validClass) {
				$( element ).parents( ".col-md-4, .col-md-12" ).addClass( "has-success" ).removeClass( "has-error" );
			}
		} );
	}); */


/* // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });*/


/* /* possible carousal for the menu page ?
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
	
	$(document).ready(function() {
        var owl = $('#product-in-slider');
        owl.owlCarousel({
          loop: true,
          nav: true,
          margin: 10,
          navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            960: {
              items: 3
            },
            1200: {
              items: 4
            }
          }
        });
        owl.on('mousewheel', '.owl-stage', function(e) {
          if (e.deltaY > 0) {
            owl.trigger('next.owl');
          } else {
            owl.trigger('prev.owl');
          }
          e.preventDefault();
        });
      });
       */
/* validation methods we can rework into the assigment incase a customer types or put something that shouldnt be written e.g her name or email address if it was blank?
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
      function validate() {
        var mailPattern = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
        if (!document.getElementById("email").value.match(mailPattern)) {
            document.getElementById('error-email').innerHTML = "Please enter email in format xyz@xyz.xyz";
            document.getElementById('error-name').style.color = "red";
            document.getElementById("email").value = "";
            document.form1.email.focus();
            return false;
        } else {
            var login = document.getElementById("login").value;
            if (login == " " || login.length >= 20) {
                document.getElementById('error-name').innerHTML = "Login name must not be empty or more than 20 characters";
                document.getElementById('error-name').style.color = "red";
                document.getElementById("login").value = "";
                document.form1.login.focus();
                return false;
            } else {
                document.getElementById("login").value = login.toLowerCase();
                var pwdPattern = /^(.[a-z].)(.[A-Z].)$/;
                var pwd = document.getElementById("pass").value;
                if ((pwd == " ") || (pwd.length < 5) || (!pwd.match(pwdPattern))) {
                    document.getElementById('error-pwd').innerHTML = "Password must be atleast 6 character long with atleast 1 uppercase and lowercase letters";
                    document.getElementById('error-pwd').style.color = "red";
                    document.getElementById("pass").value = "";
                    document.form1.pass.focus();
                    return false;
                } else {
                    var pass1 = document.getElementById("pass").value;
                    var pass2 = document.getElementById("pass2").value;
                    if ((pass2 == " ") || (pass2 != pass1)) {
                        document.getElementById('error-repwd').innerHTML = "This field must match with the password field";
                        document.getElementById('error-repwd').style.color = "red";
                        document.getElementById("pass2").value = "";
                        document.form1.pass2.focus();
                        return false;
                    } else {
                        var check = document.getElementById("terms").checked;
                        if (!check) {
                            document.getElementById('error-chk').innerHTML = "Check the terms to proceed";
                            document.getElementById('error-chk').style.color = "red";
                            document.form1.terms.focus();
                            return false;
                        } else
                            return true;
                    }
                }
    
            }
        }
    }
    */