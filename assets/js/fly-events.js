// Show and hide main navigation bar
function showNav() {
	const list = document.getElementById("navigation").classList;
		list.add("active");
}
function hideNav() {
	const list = document.getElementById("navigation").classList;
		list.remove("active");
}