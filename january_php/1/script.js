"use strict";
let form = document.querySelector('form');
let submit = form.querySelector('input[type=submit]');
let pass = form.querySelector('input[type=password]');
let login = form.querySelector('input[type=text]');
submit.addEventListener('click', (e)=>{
    e.preventDefault();
    CheckLogin(login.value);
})
async function CheckLogin(login) {
    let res = await fetch('login-handler.php' , {
        method: 'POST',
        body: new URLSearchParams({'login' : login})
    })
    let txt = await res.text();
    console.log(txt);
}