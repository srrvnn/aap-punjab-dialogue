
var Dialouge = function() {
	
	FocusAreaPage = (function () {
		var headerContainer,
		sectionContainer,
		checkboxes,
		getHeader = function() {
			return this.headerContainer;
		},
		getTotalFocusAreas = function() {
			return checkboxes.length;
		},
		create = function(headerId, sectionId, checkBoxClassName) {
			headerContainer = $(headerId);
			sectionContainer = $(sectionId);
			checkboxes = $(checkBoxClassName);
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
			create : create
		};
	}) ();
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
	}) ();
	return {
		FocusAreaPage : FocusAreaPage,
		UrlUtils : UrlUtils
	};
}();