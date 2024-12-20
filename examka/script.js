let input_theatr = document.getElementById('theatr');
let input_email = document.querySelector('input[type=email]');
let input_login = document.getElementById('name');
let submit = document.querySelector('input[type=submit]');
let div = document.querySelector('div');
let span = document.querySelector('span');
let email_right = false;
let login_right = false;
getTable();
submit.addEventListener('click', (e)=>{
    e.preventDefault();
    if (email_right == true && login_right == true && input_theatr.value != ''){
        register(input_login.value, input_email.value, input_theatr.value);
    }
});
input_email.addEventListener('blur',(e)=>{
    if (input_email.value != ''){
    check(input_email.value, 'email', input_email);
    }
});
input_login.addEventListener('blur',(e)=>{
    if (input_login.value != ''){
    check(input_login.value, 'name', input_login);
    }
});

async function check(value,type , input) {
    let val = value;
    let res = await fetch('ajax.php' , {
        method : 'POST',
        body: new URLSearchParams({'value' : val,
            'type': type
        })

    })
    let txt = await res.text();
    if (txt == 1){
        div.innerHTML = `Такой ${type} существует в базе данных`;
        setTimeout(()=>{
            div.innerHTML = '';
        }, 5000);
        input.focus();
        input.value = '';
    }else{
        if(type == 'email'){
            email_right = true;
            }else{
                login_right = true;
            }
        setTimeout(()=>{
            div.innerHTML = '';
        }, 5000);
    }
}
async function getTable(params) {
    let res = await fetch('table.php');
    let txt = await res.text();
    span.innerHTML = txt;
}
async function register(login,email,theatre) {
    let res = await fetch('ajax_reg.php' , {
        method : 'POST',
        body: new URLSearchParams({'email' : email,
            'login': login,
            'theatre': theatre
        })
    });
    let txt = await res.text();
    console.log(txt);
    if (txt == 1){
        input_login.value = '';
        input_email.value = '';
        input_theatr.value = '';
        div.innerHTML = 'Зарегистрирован.';
        setTimeout(()=>{
            div.innerHTML = '';
        }, 5000);
        getTable();
    }
}