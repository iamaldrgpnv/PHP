"use strict";
function responseHandler(serverAnswer) {
	console.log(serverAnswer);
}
let button = document.getElementById('add-button');
let form = document.querySelector('form');
button.addEventListener('click', (event) => {
	event.preventDefault();
	let xhr = new XMLHttpRequest();
	xhr.open('POST', 'server.php', true);
	let fd = new FormData(form);
	xhr.send(fd);
	xhr.onload = function () {
		if (xhr.status === 200) {
			 responseHandler(xhr.responseText);
		}
		else {

		}
	let div = document.createElement('div');
	div.innerText = xhr.responseText;
	document.getElementById('section').append(div);	
  };
})

