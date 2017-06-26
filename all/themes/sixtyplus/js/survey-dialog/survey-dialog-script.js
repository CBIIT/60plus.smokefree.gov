<script type="text/javascript"> 
jQuery(document).ready(function() {

	var hasBeenClickedYes = false;
	var hasBeenClickedNo = false;
	

	var hasBeenClickedYes2Wait = false;
	var hasBeenClickedGoDirectSurvey = false;
	
	var hasBeenClickedYes3later = false;
	
	var surveyResult;
	var forNotiStay;
	
	sessionStorage.setItem('notiBarStorage', 'notiBarNotShown');
	
	// Function to show orange notification bar
	function notiBar(){
		
		sessionStorage.setItem('notiBarStorage', 'notiBarShown')
		
		jQuery('#popup-noti-bar').hide();
		
		jQuery('#popup-noti-bar').show();

		jQuery('#popup-noti-bar').click(function(){	
					//jQuery('#popup-noti-bar').slideUp();
					//jQuery('span.show-noti-bar').fadeIn('slow');
					ga('send', 'event', 'SurveyButtons', 'Clicked', 'notify_bar');
					
					iframeBlock();

		});
	}
	
	
	// Function to show survey in iframe
	function iframeBlock() {
			
			jQuery('#block').fadeIn();
			jQuery('#iframecontainer').fadeIn();
			jQuery('#iframecontainer #iframe-survey').attr('src', 'https://www.surveymonkey.com/r/V6TVBZ3');
			jQuery('#iframecontainer #iframe-survey').load(function() {
			//jQuery('#loader-iframe').fadeOut(function() {
				jQuery('.lightbox-survey').slideDown();
				jQuery('#iframe-survey').show();
				jQuery('div.lightbox-survey').addClass("lightbox-survey-active");
				
						// Closing the Popup Box
						jQuery('a.close-survey').click(function(){
							jQuery('.lightbox-survey').slideUp();
							jQuery('div.lightbox-survey').removeClass("lightbox-survey-active");
							

							
						});
						
	
			});
			
			

	}


	//get session value so that survey app continues on subsequent pages
	function surveyStorageLevelOne() {

		sessionStorage.setItem('firstSurveySelect', 'firstSessionSurvey')
		sessionStorage.getItem('firstSurveySelect');

		SurveyResult1 = sessionStorage.getItem('firstSurveySelect');

		return SurveyResult1;

	}
	
	//get session value so that second pop up continues on subsequent pages
	function surveyStorageNotiStay() {

		sessionStorage.setItem('notiStay', 'notiBarGo')
		sessionStorage.getItem('notiStay');

		forNotiStay = sessionStorage.getItem('notiStay');

		return forNotiStay;

	}
	
	//function for fourth and final pop up to close window
		function popUpGo4() {
			jQuery('#overlay4').fadeIn( 'fast',
				function() {
					jQuery('#confirmBox4').animate(
						{
							'top': '25% !important'
							
						}, 500);
				}
			);
		
		
			//section for last pop up ro close popup
			jQuery('#gray4').click(function clickedClose4() {
				
					hasBeenClickedclose = true;
					
								
					ga('send', 'event', 'SurveyButtons', 'Clicked', 'closepopup_popup4');

	
					jQuery('#confirmBox4, #overlay4').hide();
					
	
	
				}
			);
	
	}	
	
	
	//function for third yes-no pop up
	function popUpGo3() {
			jQuery('#overlay3').fadeIn( 'fast',
				function() {
					jQuery('#confirmBox3').animate(
						{
							'top': '25% !important'
							
						}, 500);
						
						
						sessionStorage.setItem('countPop3', 'Pop3shown');
				}
			);
			
			
		
			//section for pop up after 90 sec, 'Take the survey later ' is selected to take survey via notibar
			jQuery('#blue3').click(
				function clickedYes3() {
	
					hasBeenClickedYes3later = true;
					
					ga('send', 'event', 'SurveyButtons', 'Clicked', 'feedbackLater90sec_popup3');
								

	
					jQuery('#confirmBox3, #overlay3').hide();
					
					
	
					if (hasBeenClickedYes3later == true) {
	
						
						

						popUpGo4();
			
	
					} else {
	
						alert('You decided not to take the survey');
	
					}
	
				}
			);

			//section after 90 sec popup 'Take the survey now. ' is selected to take survey 
			jQuery('#gray3').click(function() {
	
				hasBeenClickedGoDirectSurvey = true;
				
				ga('send', 'event', 'SurveyButtons', 'Clicked', 'feedbackNow90sec_popup3');
				
				jQuery('#confirmBox2, #overlay2').hide();
	
					if (hasBeenClickedGoDirectSurvey == true) {
						
						sessionStorage.setItem('popState3', 'GoDirectSurveyShownlast')
						
		
	
						if (hasBeenClickedGoDirectSurvey == true) {

								
								jQuery('#confirmBox3, #overlay3').hide();
								iframeBlock();
						}
	
					} else {
	
						alert('You decided not to take the survey');
	
					}
	
			});

			
	}	
	
	//function for second yes-no pop up
	function popUpGo2() {
			jQuery('#overlay2').fadeIn( 'fast',
				function() {
					jQuery('#confirmBox2').animate(
						{
							'top': '25% !important'
							
						}, 500);
				}
			);
		
		
			//section if 'Take the survey in a few minutes.' is clicked to take survey on notibar and 90 sec reminder later
			jQuery('#blue2').click(
				function clickedYes2() {
	
					hasBeenClickedYes2Wait = true;
					
								
					ga('send', 'event', 'SurveyButtons', 'Clicked', 'feedbackFewMinutes_popup2');

					surveyStorageNotiStay();
	
					jQuery('#confirmBox2, #overlay2').hide();
					
					notiBar();
					
					
					if(hasBeenClickedYes2Wait == true){
					
								setTimeout(popUpGo3, 40000);
								
								//alert(sessionStorage.getItem('countPop3'));
								
					}
		

				}
			);

			//section if 'Take the survey now. ' is selected to take survey on second pop up
			jQuery('#gray2').click(function() {
	
				hasBeenClickedGoDirectSurvey = true;
				
				ga('send', 'event', 'SurveyButtons', 'Clicked', 'feedbackNow_popup2');
				
				jQuery('#confirmBox2, #overlay2').hide();
	
					if (hasBeenClickedGoDirectSurvey == true) {
	
						
						sessionStorage.setItem('popState2', 'GoDirectSurveyShown')
	

						if (hasBeenClickedGoDirectSurvey == true) {

							
								
								
								jQuery('#confirmBox2, #overlay2').hide();
								iframeBlock();

						}
	
					} else {
	
						alert('You decided not to take the survey');
	
					}
	
			});

			
	}
	
	
	
	//function for first yes-no pop up
	function popUpGo() {
		jQuery('#overlay').fadeIn(
			'fast',
			function() {
				jQuery('#confirmBox').animate({
					'top': '30%'
				}, 500);
			});
			
		//section if 'Yes' is selected to take survey on first pop up
		jQuery('#blue').click(
			function clickedYes() {

				hasBeenClickedYes = true;
				
				
				ga('send', 'event', 'SurveyButtons', 'Clicked', 'Yestofeedback_popup1');


				jQuery('#confirmBox, #overlay').hide();

				if (hasBeenClickedYes == true) {

					
					sessionStorage.setItem('firstPopState', 'firstShown')

					
					if ((hasBeenClickedYes == true) && (sessionStorage.getItem('firstPopState') == 'firstShown')) {

							//Run second pop up box because user agreed to provide feedback.
							popUpGo2();

					}

				} else {

					alert('You decided not to take the survey');

				}

			}
		);
		
		//section if 'No' is selected to take survey on first pop up
		jQuery('#gray').click(function() {

			hasBeenClickedNo = true;
			
			ga('send', 'event', 'SurveyButtons', 'Clicked', 'Notofeedback_popup1');


			if (hasBeenClickedNo) {

				var noSurvey = {

					actionNo: function() {
						
							sessionStorage.setItem('firstPopState', 'firstNotShown')


							jQuery('#confirmBox').animate({
								'top': '-200px'
							}, 500, function() {
								jQuery('#overlay').fadeOut('fast');
							});

						}
						//'action': alert('something happened')

				};

				noSurvey.actionNo();
				//run function2
			}

		});

	};

	if ((sessionStorage.getItem('firstPopState') != 'firstShown') && (sessionStorage.getItem('firstPopState') != 'firstNotShown')) {

		setTimeout(popUpGo, 20000);
		
	} else if (sessionStorage.getItem('notiStay') == 'notiBarGo') {
		
		notiBar();

	}
	
	if ((sessionStorage.getItem('notiBarStorage') == 'notiBarShown') && (sessionStorage.getItem('countPop3') != 'Pop3shown')){
		
		setTimeout(popUpGo3, 40000);

	}


});



</script>