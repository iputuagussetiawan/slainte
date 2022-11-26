window.addEventListener("load", (event) => {
	document.querySelector(".wpcf7").addEventListener(
		"wpcf7mailsent",
		function (event) {
			//console.log(thankyouUrl);
			location = thankyouUrl;
		},
		false
	);
});