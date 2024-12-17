
let login = document.querySelector('input[type=text]');
console.log(login);
let password = document.querySelector('input[type=password]');
console.log(password);
let submit = document.querySelector('input[type=button]');
let div = document.querySelector('div');
let button = document.querySelector('input[type=submit]');

submit.addEventListener('click' , (e)=>{
    e.preventDefault();
    POST_DATA();
})
async function POST_DATA() {
    let res = await fetch('http://decemberpractice/js_practice/jstest/ajax.php', {
        method: 'POST',
        header: {'Content-Type' : 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({'login' : login.value,
            'password' : password.value
        })
    });
    let txt = await res.text();
    div.innerHTML = txt;
    setTimeout(()=>{
        div.innerHTML = ''; 
    }, 5000);
    console.log(txt);
}
async function GET_DATA() {
    let res = await fetch('http://decemberpractice/js_practice/jstest/ajax.php', {
        method: 'POST',
        header: {'Content-Type' : 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({'login' : login.value,
            'password' : password.value
        })
    });
    let txt = await res.text();
    div.innerHTML = txt;
    setTimeout(()=>{
        div.innerHTML = ''; 
    }, 5000);
    console.log(txt);
}
button.addEventListener('click', (e)=>{
    e.preventDefault();
    JSON_DATA();

})
async function JSON_DATA() {
    let res = await fetch('http://decemberpractice/js_practice/jstest/ajax_json.php', {
        method: 'POST',
        headers: {'Content-Type' : 'application/json'},
        body: JSON.stringify({
            'login' : login.value,
            'password' : password.value
        })
    });
    let txt = await res.text();
    div.innerHTML = txt;
    setTimeout(()=>{
        div.innerHTML = ''; 
    }, 5000);
    console.log(txt);
}