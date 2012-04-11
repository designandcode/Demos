var media_events = new Array();

// was automatically extracted from the spec in January 2011
media_events["loadstart"] = 0;
media_events["progress"] = 0;
media_events["suspend"] = 0;
media_events["abort"] = 0;
media_events["error"] = 0;
media_events["emptied"] = 0;
media_events["stalled"] = 0;
media_events["play"] = 0;
media_events["pause"] = 0;
media_events["loadedmetadata"] = 0;
media_events["loadeddata"] = 0;
media_events["waiting"] = 0;
media_events["playing"] = 0;
media_events["canplay"] = 0;
media_events["canplaythrough"] = 0;
media_events["seeking"] = 0;
media_events["seeked"] = 0;
media_events["timeupdate"] = 0;
media_events["ended"] = 0;
media_events["ratechange"] = 0;
media_events["durationchange"] = 0;
media_events["volumechange"] = 0;

// was automatically extracted from the spec in January 2011
var media_properties = [ "error", "src", "currentSrc", "networkState", "preload", "buffered", "readyState", "seeking", "currentTime", "initialTime", "duration", "startOffsetTime", "paused", "defaultPlaybackRate", "playbackRate", "played", "seekable", "ended", "autoplay", "loop", "controls", "volume", "muted" ];

var media_properties_elts = null;

var webm = null;

function init() {
    document._video = document.getElementById("video");

    webm = document.getElementById("webm");

    init_events();
    init_properties();

    // properties are updated even if no event was triggered
    setInterval(update_properties, 1000);
}
document.addEventListener("DOMContentLoaded", init, false);

function init_events() {

    for (key in media_events) {	
	document._video.addEventListener(key, capture, false);
    }

    var tbody = document.getElementById("events");
    var i = 1;
    var tr = null;
    for (key in media_events) {	
	if (tr == null) tr    = document.createElement("tr");
	var th = document.createElement("th");
	th.textContent = key;
	var td = document.createElement("td");
	td.setAttribute("id", "e_" + key);
	td.innerHTML = "0";
	td.className = "false";
	tr.appendChild(th);
	tr.appendChild(td);

	if ((i++ % 5) == 0) {
	    tbody.appendChild(tr);
	    tr = null;
	}


    }
    if (tr != null) tbody.appendChild(tr);
}
function init_properties() {
    var tbody = document.getElementById("properties");
    var i = 0;
    var tr = null;
    media_properties_elts = new Array(media_properties.length);
    do {
	if (tr == null) tr    = document.createElement("tr");
	var th = document.createElement("th");
	th.textContent = media_properties[i];
	var td = document.createElement("td");
	td.setAttribute("id", "p_" + media_properties[i]);
	var r = eval("document._video." + media_properties[i]);
	td.innerHTML = r;
	if (typeof(r) != "undefined") {
	    td.className = "true";
	} else {
	    td.className = "false";
	}
	tr.appendChild(th);
	tr.appendChild(td);
	media_properties_elts[i] = td;
	if ((++i % 3) == 0) {
	    tbody.appendChild(tr);
	    tr = null;
	}
    } while (i < media_properties.length);
    if (tr != null) tbody.appendChild(tr);
}

function capture(event) {
    media_events[event.type] = media_events[event.type] + 1;
    for (key in media_events) {	
	var e = document.getElementById("e_" + key);
	if (e) {
	    e.innerHTML = media_events[key];
	    if (media_events[key] > 0) e.className = "true";
	}
    }
    update_properties();
}
function update_properties() {
    var i = 0;
    for (key in media_properties) {
	media_properties_elts[i++].innerHTML = eval("document._video." + media_properties[key]);
    }
}

var videos = new Array();

videos[0] = [
	     "http://media.w3.org/2010/05/sintel/poster.png",
	     "http://media.w3.org/2010/05/sintel/trailer.mp4",
	     "http://media.w3.org/2010/05/sintel/trailer.ogv",
	     "http://media.w3.org/2010/05/sintel/trailer.webm"
	     ];
videos[1] = [
	     "http://media.w3.org/2010/05/bunny/poster.png",
	     "http://media.w3.org/2010/05/bunny/trailer.mp4",
	     "http://media.w3.org/2010/05/bunny/trailer.ogv"
	     ];
videos[2] = [
	     "http://media.w3.org/2010/05/bunny/poster.png",
	     "http://media.w3.org/2010/05/bunny/movie.mp4",
	     "http://media.w3.org/2010/05/bunny/movie.ogv"
	     ];
videos[3] = [
	     "http://media.w3.org/2010/05/video/poster.png",
	     "http://media.w3.org/2010/05/video/movie_300.mp4",
	     "http://media.w3.org/2010/05/video/movie_300.ogv",
	     "http://media.w3.org/2010/05/video/movie_300.webm"
	     ];

function switchVideo(n) {
    if (n >= videos.length) n = 0;

    var mp4 = document.getElementById("mp4");
    var ogv = document.getElementById("ogv");
    var parent = ogv.parentNode;

    document._video.setAttribute("poster", videos[n][0]);
    mp4.setAttribute("src", videos[n][1]);
    ogv.setAttribute("src", videos[n][2]);

    if (videos[n][3]) {
	if (webm.parentNode == null) {
	    parent.insertBefore(webm, ogv);
	}
	webm.setAttribute("src", videos[n][3]);
    } else {
	if (webm.parentNode != null) {
	    parent.removeChild(webm);
	}
    }
    document._video.load();
}