const button = document.querySelector("#button_submit");

button.addEventListener('click', (e)=>{
    e.preventDefault();

    const inputText = document.querySelector("#input").value;
    const resultText = document.querySelector("#resultText");

    const replaceText = inputText.replace(/\s/g, '');
    resultText.value = "";
    resultText.value +=  `${replaceText}`
    console.log(replaceText);
})