ready = 0;
qLoverlayonLoad = function() {
	document.getElementById('qLoverlay').innerHTML('<div id="spinner"></div>');
};

function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 500);
    function checkReady() {
        if (ready) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('qLoverlay', false);
});

