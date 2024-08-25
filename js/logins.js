let signup_btn = document.getElementById('signup_btn');
let change_btn = document.getElementById('change_btn');
let delete_btn = document.getElementById('delete_btn');

let submit = document.querySelector('input[type="submit"]');
let signup_form = document.getElementById('signup_form') ;
let change_form = document.getElementById('change_form');
let delete_form = document.getElementById('delete_form');


// function remove_form(){
//     submit.addEventListener("click", ()=>{
//         signup_form.style.display = 'none';
//         change_form.style.display = 'none';
//         delete_form.style.display = 'none';
//     })
// }
signup_btn.addEventListener('click',()=>{
    signup_form.style.display = 'block';
    delete_form.style.display = 'none';
    change_form.style.display = 'none';
}
)

change_btn.addEventListener("click", ()=>{
    change_form.style.display = 'block';
    signup_form.style.display = 'none';
    delete_form.style.display = 'none';
})

delete_btn.addEventListener("click", ()=>{
    delete_form.style.display = 'block';
    change_form.style.display = 'none';
    signup_form.style.display = 'none';
})