let logBtn = document.getElementById("log");
let sinBtn = document.getElementById("sin");
let cosBtn = document.getElementById("cos");
let tanBtn = document.getElementById("tan");
let input2 = document.getElementById("num2");
let input1 = document.getElementById("num1");
let signSymbol = document.getElementById("arithmetic");
let reset = document.getElementById("resetForm");
let form = document.querySelector("form");
reset.addEventListener("click", ()=>{form.reset()})

logBtn.addEventListener("click", ()=>{
    sinBtn.style.display = "none";
    cosBtn.style.display = "none";
    tanBtn.style.display = "none";
    input2.style.display = "none";
    signSymbol.style.display = "none";
    let value = input1.value;
    //check the data type of the input value
    console.log(`The type of value is ${typeof(value)} and value is ${value}`);
    //perform data type conversion
    let number = parseFloat(value);
    console.log(`The type of var number is ${typeof(number)} and number is ${number}`);
    let answer =  Math.log(number);
    console.log(`The log of value : ${value} is ${answer}.`);
    //display value:
    const result = document.getElementById("result");
    result.innerText = answer;
});

sinBtn.addEventListener("click", ()=>{
    logBtn.style.display = "none";
    cosBtn.style.display = "none";
    tanBtn.style.display = "none";
    input2.style.display = "none";
    signSymbol.style.display = "none";

    let value = input1.value;
    let number = parseFloat(value);
    const answer = Math.sin(number);
    const result = document.getElementById("result");
    result.innerText = answer;
});

cosBtn.addEventListener("click", ()=>{
    sinBtn.style.display = "none";
    logBtn.style.display = "none";
    tanBtn.style.display = "none";
    input2.style.display = "none";
    signSymbol.style.display = "none";
    let value = input1.value;
    let number = parseFloat(value);
    const answer = Math.cos(number);
    const result = document.getElementById("result");
    result.innerText = answer;
});

tanBtn.addEventListener("click", ()=>{
    sinBtn.style.display = "none";
    cosBtn.style.display = "none";
    logBtn.style.display = "none";
    input2.style.display = "none";
    signSymbol.style.display = "none";

    let value = input1.value;
    let number = parseFloat(value);
    const answer = Math.tan(number);
    const result = document.getElementById("result");
    result.innerText = answer;
})