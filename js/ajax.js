/* 
 * Provides ajax tools for ACWPD Projects
 * Feel free to use this in your projects! Just provide Attribution by keeping this block in place!
 * 
 * This is version 1.0
 * 
 * For the latest version, please visit: https://github.com/farfromunique/ACWPD_Tools
 * 
 * This code is copyright (C) 2015 Aaron Coquet / ACWPD
 */ 
 
/* 
 * Instructions for preperation:
 * Replace ::SiteName:: with the string to be placed in the browser's history
 *
 */

// Put site's address here, in format "http://sub.domain.tld/path/to/root"
var sRoot = document.location.origin; // Default: document.location.origin
var siteName = "Futhark Power Generator 1.5.4";

function adjustMyURL(displayURL) {
	window.history.pushState({site:sRoot}, siteName, "/" + displayURL + "/");
}

function loadMyPage(pageName, targetDiv) {
	var ajax;
	var loaderDiv;
	loaderDiv = document.getElementById("loader") 
	loaderDiv.classList.remove("hidden");
	loaderDiv.classList.add("loading");
	ajax = new XMLHttpRequest();
	ajax.open("GET", sRoot + pageName, true);
	ajax.onreadystatechange = function() {
		if (ajax.readyState === 4) {
			document.getElementById(targetDiv).innerHTML = ajax.responseText;
			loaderDiv.classList.remove("loading");
			loaderDiv.classList.add("hidden");
			return true;
		}
	};
	ajax.send(null);
	
	
}

function postToPage(pageName, displayURL, postData) {
	var ajax;
	document.getElementById("content").innerHTML = "Loading ...";
	ajax = new XMLHttpRequest();
	ajax.open("POST", sRoot + pageName, true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState === 4) {
			document.getElementById("content").innerHTML = ajax.responseText;
		}
	};
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send(postData);
	adjustMyURL(displayURL);
}

function postAndRedirect(pageName, displayURL, postData, redirectTo) {
	var ajax;
    document.getElementById("content").innerHTML = "Loading ...";
	ajax = new XMLHttpRequest();
	ajax.open("POST",sRoot + pageName, true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState === 4) {
			loadMyPage(redirectTo, displayURL, 'content');
		}
	};
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send(postData);
	adjustMyURL(displayURL);
}

function DismissImportant() {
	if (document.getElementById('Important')) {
	document.getElementById('Important').style.display='none';
	}
}

function hideMessage() {
	if(document.getElementById('Message')) {
		document.getElementById('Message').style.display='none';
	}
}

function insertHistory() {
	var hist = document.querySelector("#hist");
	var marker = document.querySelector("#endOfhist");
	var newDiv = document.createElement("div");
	
	newDiv.id = "added_"+ hist.childNodes.length;
	newDiv.classList.add("added");
	if (document.querySelectorAll(".added").length > 0) {
		marker = document.getElementById("added_" + (hist.childNodes.length-1));
	}
	hist.insertBefore(newDiv,marker);
	return newDiv.id;	
}

function insertSmallImages() {
	var target = insertHistory();
	var req = "/small/" + document.querySelector("#ref").innerText;
	loadMyPage(req,target);
}

function reroll() {
	insertSmallImages();
	if (loadMyPage("/raw","content")) {
		document.querySelector(".reroll").onclick = function () {reroll();}
	}
}

document.querySelector(".reroll").onclick = function () {reroll();}
