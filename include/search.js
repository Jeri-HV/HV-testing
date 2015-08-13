var submenuIsShown = false;
function showMenu() {
        submenuIsShown = !submenuIsShown;
        getElement("topmenu").style.display = (submenuIsShown ? "block" : "none");
}

function getElement(id) {
        return document.getElementById(id);
}



function initSearch() {

	var sb = document.getElementById("searchbox");
	sb && sb.addEventListener("click", function() {
		if ( sb.value == "Search Site" ) {
			sb.value = "";
			sb.className = "sb-active";
		}
	});

	sb && sb.addEventListener("keypress", function(e) {

		if ( e.keyCode == 13 ) {
			doSearch();
		}

	});
	sb && sb.addEventListener("blur", function() {
		sb.value = "Search Site";
                       sb.className = "sb-inactive";

	});

}
	
window.addEventListener("load", initSearch, false);

