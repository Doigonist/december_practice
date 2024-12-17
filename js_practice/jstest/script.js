
let login = document.querySelector('input[type=text]');
console.log(login);
let password = document.querySelector('input[type=password]');
console.log(password);
let submit = document.querySelector('input[type=button]');
let div = document.querySelector('div');

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