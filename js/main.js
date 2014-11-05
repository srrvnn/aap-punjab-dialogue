var Dialouge = function() {
	
	// This is not thread safe and not a global/singelton class.
	FormValidator = function (formId, errorLabelId) {
		var formContainer = $(formId);
		var errorLabelContainerId = errorLabelId;
		var errorWrapper;
		var _successCallBack;
		var validatorAdded = false;
		
		if(errorLabelContainerId) {
			errorWrapper = "li";
		}

		var addValidator = function(successCallBack) {
			if(formContainer.length > 0) {
				initCustomRules();
				initValidate();
				validatorAdded = true;
				_successCallBack = successCallBack;
			}
		};
		var initCustomRules = function() {
			$.validator.addMethod("notEqualTo", function (value, element, param) {
				var target = $( param );
				if(target.length >0) {
					// Compare two DOM elements
					// bind to the blur event of the target in order to revalidate whenever the target field is updated
					// TODO find a way to bind the event just once, avoiding the unbind-rebind overhead
					if ( this.settings.onfocusout ) {
						target.unbind( ".validate-notEqualTo" ).bind( "blur.validate-notEqualTo", function() {
							$( element ).valid();
						});
					}
					return value !== target.val();
				} else {
					// compare two literals
					return value !== param;
				}
			}, "These should be equal");
		};
		var initValidate = function() {

			formContainer.validate( {
			// Never post form to the server (debug=true) and always send Post Ajax call to avoid full page load
			debug : true,
			 ignore : [], // Do not ignore hidden/disable etc elements
			 errorPlacement: function(error, element) {
				// Add error label next to control-group class
				var controlContainer = $(element).closest('.control-group');
				error.appendTo( controlContainer );
			  },
			  errorLabelContainer : errorLabelContainerId,
			  wrapper : errorWrapper,
			  rules: {
				registrationOptions: {
				  required: true
				},
				name: {
				  minlength: 2,
				  maxlength: 50,
				  required: true
				},
				email: {
				  required: true,
				  email: true
				},
				profession: {
				  required: false,
				  maxlength: 50
				},
				phone: {
				  required: false,
				  digits: true,
				  maxlength: 14,
				  minlength: 10
				},
				orgType: {
				  notEqualTo: Dialouge.ConstantUtils.DD_ORG_TYPE_MESSAGE
				},
				focusArea: {
				  required: true,
				  minlength: 1
				},
				message: {
				  minlength: 10,
				  maxlength: 1000,
				  required: true
				}
			  },
			  messages: {
				name : "Please enter your name",
				email : "Please enter a valid email address",
				registrationOptions: "Please choose 'Registration For Seminar' or 'Submit Proposal'",
			  },

			  // called when validation failed for any element
			  highlight: function(element) {
				// using bootstrap inbuilt classes success and error for auto validation
				var highlightedElement = $(element.form).find("label[for=" + element.name + "]");
				if(highlightedElement.length == 0) {
					highlightedElement = $(element.form).find("label[for=" + element.id + "]");
				}
				highlightedElement.removeClass('error').removeClass('success');
				
				// Update common message label
				var messageContainer = $(element.form).find('.message');
				var statusMessage = "Validation errors occurred. Please confirm the fields and submit it again.";
				Dialouge.WindowUtils.showErrorMessage(messageContainer, statusMessage, 0);
			  },
			  // called when validation succeeded for any element
			  unhighlight: function(element) {
				// using bootstrap inbuilt classes success and error for auto validation
				var unhighlightedElement = $(element.form).find("label[for=" + element.name + "]");
				if(unhighlightedElement.length == 0) {
					unhighlightedElement = $(element.form).find("label[for=" + element.id + "]");
				}
				unhighlightedElement.remove();
				
				var erroredLabels = $(element.form).find("label[class=error]");
				if(erroredLabels.length == 0) {
					// Clear common message label
					var messageContainer = $(element.form).find('.message');
					messageContainer.fadeOut();
				}
			  },
			  // called when validation succeeded for each element (once per element)
			  success: function(element) {
				
			  },
			  // Called once after validation succeeded for every element
			  submitHandler: function(form) {
				var messageContainer = $(form).find('.message');
				_successCallBack(form, messageContainer);
				
				// _successCallBack send Post Ajax call to server, hence never submit the form
				return false;
			  }
			 });
		};
		
		var validate = function() {
			if(validatorAdded) {
				formContainer.valid();
			}
		};
		//public members
		return {
			addValidator : addValidator,
			validate : validate
		};
	},
	
	// This is thread safe and a global/singelton class
	WindowUtils = (function () {
		var goToPage = function(pageId) {
			// Scroll to the right page
			$('html, body').animate({
				 scrollTop: $( pageId ).offset().top
			}, 1000);
		},
		showErrorMessage = function(messageContainer, message, displayPeriod) {
			if(!messageContainer.hasClass('invalid')) {
				messageContainer.fadeIn();
				messageContainer.removeClass('valid').addClass('invalid').text(message);
				if(displayPeriod > 0) {
					messageContainer.fadeOut( displayPeriod, function() {
						messageContainer.removeClass('invalid')
					});
				}
			}
		},
		showSuccessMessage = function(messageContainer, message, displayPeriod) {
			if(!messageContainer.hasClass('valid')) {
				messageContainer.fadeIn();
				messageContainer.removeClass('invalid').addClass('valid').text(message);
				if(displayPeriod > 0) {
					messageContainer.fadeOut( 10000, function() {
					messageContainer.removeClass('valid')
					});
				}
			}
		},
		startSpinner = function (button) {
			if(button === undefined) {
				return false;
			}
			var spinnerContainer = button.children().first();
			if(spinnerContainer && !spinnerContainer.hasClass('glyphicon-refresh-animate')) {
				spinnerContainer.addClass('glyphicon').addClass('glyphicon-refresh').addClass('glyphicon-refresh-animate');
				return true;
			}
			return false;
		},
		stopSpinner = function (button) {
			if(button === undefined) {
				return false;
			}
			var spinnerContainer = button.children().first();
			if(spinnerContainer && spinnerContainer.hasClass('glyphicon-refresh-animate')) {
				spinnerContainer.removeClass('glyphicon').removeClass('glyphicon-refresh').removeClass('glyphicon-refresh-animate');
				return true;
			}
			return false;
		},
		enableButton = function(button) {
            button.removeClass("disabled");
        },
        disableButton = function(button) {
        	button.addClass("disabled");
        },
        isButtonEnabled = function(button) {
            return !button.hasClass("disabled");
        };
		//public members
		return {
			goToPage : goToPage,
			startSpinner : startSpinner,
			stopSpinner : stopSpinner,
			showErrorMessage : showErrorMessage,
			showSuccessMessage : showSuccessMessage,
			enableButton : enableButton,
			disableButton : disableButton,
			isButtonEnabled : isButtonEnabled
		};
	})(),
	// This is thread safe and a global/singelton class
	FormUtils = (function () {
		// Call back function to be called after form validation is successful
		var formValidationSuccessCallBack = function (form, messageContainer, successMessage) {
			if(form === undefined || messageContainer === undefined) {
				return false;
			}
			var submitButton = $(form).find( "button[type='submit']" );
			if( submitButton === undefined || submitButton.length === 0) {
				return false;
			}
			if(successMessage === undefined) {
				successMessage = Dialouge.ConstantUtils.GENERIC_REQUEST_SENT_MESSAGE;
			}
			try {
				Dialouge.WindowUtils.startSpinner(submitButton);
				Dialouge.WindowUtils.disableButton(submitButton);
				
				var postUrl = $(form).attr( "action" );
				$.post( postUrl, 
						$(form).serialize(),
						function() {},
						"json")
				  .done(function(response) {
					var status = response["status"];
					if(status == 'Completed') {
						Dialouge.WindowUtils.showSuccessMessage(messageContainer, 
							successMessage, Dialouge.ConstantUtils.SUCCESS_MESSAGE_ACTIVE_PERIOD);
					} else {
						Dialouge.WindowUtils.showErrorMessage(messageContainer, 
							Dialouge.ConstantUtils.INTERNAL_ERROR_MESSAGE, Dialouge.ConstantUtils.FAILED_MESSAGE_ACTIVE_PERIOD);
					}
				  })
				  .fail(function() {
					Dialouge.WindowUtils.showErrorMessage(messageContainer, 
						Dialouge.ConstantUtils.INTERNAL_ERROR_MESSAGE, Dialouge.ConstantUtils.FAILED_MESSAGE_ACTIVE_PERIOD);
				  })
				  .always(function() {
					Dialouge.WindowUtils.stopSpinner(submitButton);
					Dialouge.WindowUtils.enableButton(submitButton);
				});
			} catch (ex) {
                Dialouge.WindowUtils.stopSpinner(submitButton);
                Dialouge.WindowUtils.enableButton(submitButton);
				return false;
            }
		};	
		//public members
		return {
			formValidationSuccessCallBack : formValidationSuccessCallBack
		};
	})(),

		
	// This is thread safe and a global/singelton class
	ConstantUtils = (function () {
		var SUCCESS_MESSAGE_ACTIVE_PERIOD = 10000,
		FAILED_MESSAGE_ACTIVE_PERIOD = 4000,
		DD_ORG_TYPE_MESSAGE = "Select Organization Type",
		CONTACT_US_REQUEST_SENT_MESSAGE = "Thank you. Your request has been sent. We will contact you soon.",
		GET_UPDATES_REQUEST_SENT_MESSAGE = "Thank you. We will send you regular notification on the subject.",
		REGISTRATION_SUUCESSFUL_MESSAGE = "Thank you. You are successfully registered for the Seminar",
		SUBMIT_PROPOSAL_SUCCESSFUL_MESSAGE = "Thank you. Your proposal was successfully submitted.",
		GENERIC_REQUEST_SENT_MESSAGE = "Thank you for you interest.",
		INTERNAL_ERROR_MESSAGE = "Internal Error. We are sorry. Please try again later.";

		//public members
		return {
			DD_ORG_TYPE_MESSAGE : DD_ORG_TYPE_MESSAGE,
			INTERNAL_ERROR_MESSAGE : INTERNAL_ERROR_MESSAGE,
			SUCCESS_MESSAGE_ACTIVE_PERIOD : SUCCESS_MESSAGE_ACTIVE_PERIOD,
			CONTACT_US_REQUEST_SENT_MESSAGE : CONTACT_US_REQUEST_SENT_MESSAGE,
			GET_UPDATES_REQUEST_SENT_MESSAGE : GET_UPDATES_REQUEST_SENT_MESSAGE,
			REGISTRATION_SUUCESSFUL_MESSAGE : REGISTRATION_SUUCESSFUL_MESSAGE,
			SUBMIT_PROPOSAL_SUCCESSFUL_MESSAGE : SUBMIT_PROPOSAL_SUCCESSFUL_MESSAGE,
			GENERIC_REQUEST_SENT_MESSAGE : GENERIC_REQUEST_SENT_MESSAGE,
			FAILED_MESSAGE_ACTIVE_PERIOD : FAILED_MESSAGE_ACTIVE_PERIOD
		};
	})(),
	
	// This is thread safe and a global/singelton class
	UrlUtils = (function () {
		var getQueryString = function() {
			var queryString= [];
			var hash;
			var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
			for(var i = 0; i < hashes.length; i++)
			{
				hash = hashes[i].split('=');
				queryString[hash[0]] = hash[1];
			}
			return queryString;
		};
		//public members
		return {
			getQueryString : getQueryString
		};
	})(),

	// This is not thread safe and not a global/singelton class
	FocusAreaPage = function (headerId, sectionId, checkBoxClassName) {
		var headerContainer = $(headerId),
		sectionContainer = $(sectionId),
		checkboxes = $(checkBoxClassName),
		getHeader = function() {
			return this.headerContainer;
		},
		getTotalFocusAreas = function() {
			return checkboxes.length;
		},
		getSection = function() {
			return sectionContainer;
		},
		getCheckBoxes = function() {
			return checkboxes;
		},
		setHeader = function(header) {
			headerContainer.text(header);
		},
		setSection = function(section) {
			sectionContainer.html("<p>" + section + "</p>");
		},
		setAllCheckboxStatus = function(checked) {
			checkboxes.each(function() {
				this.checked = checked;
			});
		},
		setContents = function(focusAreas, currentFocusAreaId) {
			if(focusAreas.length !== checkboxes.length) {
				console.log("mismatch");
			}
			checkboxes.each(function(index, checkbox) {
				var focusArea = focusAreas[index];
				if(currentFocusAreaId == focusArea.id) {
					this.checked = true;
					setFocusArea(focusArea);
				}
			});
		},
		initPageContents = function() {
			var queryString = Dialouge.UrlUtils.getQueryString();
			var focusAreaId = queryString["id"];
			if(focusAreaId) {
				// Remove section if specified
				focusAreaId = focusAreaId.replace(/#.*/i, "");
			}
			if(!focusAreaId) {
				focusAreaId = "1"; // default focus issue page Id
			}
			// Load focus page data from issue-details.JSON file
			var jqxhr = $.getJSON( "../data/issue-details.json", function() {
			})
			  .done(function(result) {
				setContents(result, focusAreaId);
			  })
			  .fail(function() {
				
			  })
			  .always(function() {
			  });
		},
		initOrganizationTypeFields = function(orgTypeLblId, orgTypeId) {
			var orgTypeMessage = Dialouge.ConstantUtils.DD_ORG_TYPE_MESSAGE;
			$(orgTypeLblId).text(orgTypeMessage);
			$(orgTypeId).val(orgTypeMessage);
		},
		setFocusArea = function(focusArea) {
			setHeader(focusArea.name);
			setSection(focusArea.longDesc);
		},
		// Call back function to be called after "Get Update" form validation is successful
		getUpdatesCallBack = function (form, messageContainer) {
			return Dialouge.FormUtils.formValidationSuccessCallBack(form, messageContainer, Dialouge.ConstantUtils.GET_UPDATES_REQUEST_SENT_MESSAGE);
		},
		// Call back function to be called after "Registration/Submit Proposal" form validation is successful
		registrationCallBack = function (form, messageContainer) {
			var checkedOptionContainer = $(form).find( "input[name='registrationOptions']:checked" );
			var successMessage = Dialouge.ConstantUtils.REGISTRATION_SUUCESSFUL_MESSAGE;

			if(checkedOptionContainer.val() === 'Submit Proposal') {
				successMessage = Dialouge.ConstantUtils.SUBMIT_PROPOSAL_SUCCESSFUL_MESSAGE;
			}
			return Dialouge.FormUtils.formValidationSuccessCallBack(form, messageContainer, successMessage);
		};
		//public members
		return {
			getHeader : getHeader,
			getCheckBoxes : getCheckBoxes,
			setAllCheckboxStatus : setAllCheckboxStatus,
			setContents : setContents,
			getTotalFocusAreas: getTotalFocusAreas,
			initPageContents : initPageContents,
			initOrganizationTypeFields : initOrganizationTypeFields,
			getUpdatesCallBack : getUpdatesCallBack,
			registrationCallBack : registrationCallBack
		};
	};
		// This is not thread safe and not a global/singelton class
	MainPage = (function () {
		// Call back function to be called after contact us form validation is successful
		contactUsCallBack = function (form, messageContainer) {
			return Dialouge.FormUtils.formValidationSuccessCallBack(form, messageContainer, Dialouge.ConstantUtils.CONTACT_US_REQUEST_SENT_MESSAGE);
		};	
		//public members
		return {
			contactUsCallBack : contactUsCallBack
		};
	})();

	return {
		FormValidator : FormValidator,
		FormUtils : FormUtils,
		UrlUtils : UrlUtils,
		WindowUtils : WindowUtils,
		ConstantUtils : ConstantUtils,
		FocusAreaPage : FocusAreaPage,
		MainPage : MainPage
	};
}();