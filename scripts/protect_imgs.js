
var msg="mouse right click disabled(or any message you want)";

function click(e) {
	if (document.all) {
		if (event.button == 2) {
		alert(msg);
		return false;
		}
	}
	
	if (document.layers) {
		if (e.which == 3) {
		alert(msg);
		return false;
		}
	}
	}

	if (document.layers) {
		document.captureEvents(Event.MOUSEDOWN);
		}
	document.onmousedown=click;