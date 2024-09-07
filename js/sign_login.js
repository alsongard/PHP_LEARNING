const userField = document.getElementById("username_field");
const idField = document.getElementById("id_field");
const confirmField = document.getElementById("confirm_field");
const signupbtn = document.getElementById("signupbtn");
const loginBtn = document.getElementById("loginBtn");
const form = document.querySelector("form");



loginBtn.addEventListener("click", ()=>{
    
    form.action = "./includes/login_register.php";
    userField.style.display = "none";
    idField.style.display = "none";
    confirmField.style.display = "none";
    signupbtn.classList.remove("active");
    loginBtn.classList.add("active");

});

signupbtn.addEventListener("click", ()=>{
    form.action = "./includes/registration.php";
    userField.style.display = "flex";
    idField.style.display = "flex";
    confirmField.style.display = "flex";
    signupbtn.classList.add("active");
    loginBtn.classList.remove("active");
});