const copy = document.querySelector("#copy");

copy.addEventListener("click", (e)=>{
	e.preventDefault();
	const resultText = document.querySelector("#resultText");
	resultText.select();
	document.execCommand("copy");
	alert("Texto copiado para área de transferência");
})