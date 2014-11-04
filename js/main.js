var Dialouge = function() {
	
	// This is not thread safe and not a global/singelton class.
	FormValidator = function (formId, errorLabelId) {
		var defaultOrgType = "Select Organization Type";
		var formContainer = $(formId);
		var errorLabelContainerId = errorLabelId;
		var errorWrapper;
		var _successCallBack;
		var validatorAdded = false;
		
		if(errorLabelContainerId) {
			errorWrapper = "li";
		}
		
		var getDefaultOrgType = function() {
			return defaultOrgType;
		};
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
				  notEqualTo: defaultOrgType
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
				if(!messageContainer.hasClass('invalid')) {
					messageContainer.fadeIn();
					messageContainer.removeClass('valid').addClass('invalid').text("Validation errors occurred. Please confirm the fields and submit it again.");
				}
				
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
				return _successCallBack(form, messageContainer);
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
			getDefaultOrgType : getDefaultOrgType,
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
		startSpinner = function (buttonId) {
			var spinnerContainer = $(buttonId).children().first();
			if(!spinnerContainer.hasClass('glyphicon-refresh-animate')) {
					spinnerContainer.addClass('glyphicon').addClass('glyphicon-refresh').addClass('glyphicon-refresh-animate');
			}
		},
		stopSpinner = function (buttonId) {
			var spinnerContainer = $(buttonId).children().first();
			if(spinnerContainer.hasClass('glyphicon-refresh-animate')) {
					spinnerContainer.removeClass('glyphicon').removeClass('glyphicon-refresh').removeClass('glyphicon-refresh-animate');
			}
		};
		//public members
		return {
			goToPage : goToPage,
			startSpinner : startSpinner,
			stopSpinner : stopSpinner,
			showErrorMessage : showErrorMessage,
			showSuccessMessage : showSuccessMessage
		};
	})(),
	
	// This is thread safe and a global/singelton class
	ConstantUtils = (function () {
		var orgTypeMessage = "Select Organization Type",
		getOrgTypeMessage = function() {
			return orgTypeMessage;
		};
		//public members
		return {
			getOrgTypeMessage : getOrgTypeMessage
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
			var orgTypeMessage = Dialouge.ConstantUtils.getOrgTypeMessage();
			$(orgTypeLblId).text(orgTypeMessage);
			$(orgTypeId).val(orgTypeMessage);
		},
		setFocusArea = function(focusArea) {
			setHeader(focusArea.name);
			setSection(focusArea.longDesc);
		};
		//public members
		return {
			getHeader : getHeader,
			getCheckBoxes : getCheckBoxes,
			setAllCheckboxStatus : setAllCheckboxStatus,
			setContents : setContents,
			getTotalFocusAreas: getTotalFocusAreas,
			initPageContents : initPageContents,
			initOrganizationTypeFields : initOrganizationTypeFields
		};
	};
		// This is not thread safe and not a global/singelton class
	MainPage = (function () {

		// Call back function to be called after contact us form validation is successful
		contactUsCallBack = function (form, messageContainer) {

			var postUrl = $(form).attr( "action" );
	 
			Dialouge.WindowUtils.startSpinner('#contactBtn');
			var statusMessage = "Interal Error. We are sorry. Please try again later.";
			$.post( postUrl, 
					$(form).serialize(),
					function() {},
					"json")
			  .done(function(response) {
				//var jsonResponse = $.parseJSON( '{ "name": "John" }' );
				var status = response["status"];
					
				if(status == 'Completed') {
					statusMessage = "Thank you. Your request has been sent. We will contact you soon.";
					Dialouge.WindowUtils.showSuccessMessage(messageContainer, statusMessage, 10000);
				} else {
					Dialouge.WindowUtils.showErrorMessage(messageContainer, statusMessage, 4000);
				}
			  })
			  .fail(function() {
				Dialouge.WindowUtils.showErrorMessage(messageContainer, statusMessage, 4000);
			  })
			  .always(function() {
				Dialouge.WindowUtils.stopSpinner('#contactBtn');
			});
		};	
		//public members
		return {
			contactUsCallBack : contactUsCallBack
		};
	})();

	return {
		FormValidator : FormValidator,
		UrlUtils : UrlUtils,
		WindowUtils : WindowUtils,
		ConstantUtils : ConstantUtils,
		FocusAreaPage : FocusAreaPage,
		MainPage : MainPage
	};
}();