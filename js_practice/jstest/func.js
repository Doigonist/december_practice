
var copied = false;
async function POST_DATA(register) {
    let login = document.querySelector('input[type=text]');
    let password = document.querySelector('input[type=password]');
    let div = document.querySelector('div');
    let email = document.getElementById('email');   
    let reg = register;
    let res = await fetch('http://decemberpractice/js_practice/jstest/ajax.php', {
        method: 'POST',
        header: {'Content-Type' : 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({'login' : login.value,
            'password' : password.value,
            'email' : email.value,
            'reg' : reg
        })
    });
    let txt = await res.text();
    console.log(txt);
    if (txt == 1){
        div.innerHTML = 'ПОЛЬЗОВАТЕЛЬ БЫЛ ОБНАРУЖЕН В БАЗЕ ДАННЫХ!';
            setTimeout(()=>{
            div.innerHTML = ''; 
            }, 5000);
    }else if (txt == 2){
        res = await fetch('http://decemberpractice/js_practice/jstest/register.html')
        txt = await res.text();
        if (!copied){
        login_form = document.body.innerHTML;
        console.log(login_form);
        copied = true;
        }
        document.body.innerHTML = txt;
        let button = document.querySelector('button').addEventListener('click', (e)=>{
            e.preventDefault();
        })
    }else if (txt == 3){
        document.body.innerHTML = login_form;
        copied = false;
    }
}
async function check(value_to_check) {
    val = value_to_check;
    let res = await fetch('http://decemberpractice/js_practice/jstest/ajax_check.php',{
        method: 'POST',
        header: {'Content-Type' : 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({'val' : val})
    });
    txt = await res.text();
}

// async function JSON_DATA(register) {
//     let res = await fetch('http://decemberpractice/js_practice/jstest/ajax_json.php', {
//         method: 'POST',
//         headers: {'Content-Type' : 'application/json'},
//         body: JSON.stringify({
//             'login' : login.value,
//             'password' : password.value,
//             'email' : email.value
//         })
//     });
//     let txt = await res.text();
//     if (txt == '1'){
//         res = await fetch('http://decemberpractice/js_practice/jstest/register.html')
//         txt = await res.text();
//         login_form = document.innerHTML;
//         document.body.innerHTML = txt;
//     }else if (txt == '10'){
//         div.innerHTML = 'Пользователь был найден.';
//         setTimeout(()=>{
//             div.innerHTML = ''; 
//         }, 5000);
//     }else{
//     }
// }

// async function GET_DATA(register) {
//     let res = await fetch(`http://decemberpractice/js_practice/jstest/ajax_get.php?login=${login.value}&pass=${password.value}&email=${email.value}&reg=${register}`);
//     let txt = await res.text();
//     if (txt == 1){
//         res = await fetch('http://decemberpractice/js_practice/jstest/register.html')
//         txt = await res.text();
//         login_form = document.innerHTML;
//         document.body.innerHTML = txt;
//     }else if (txt == 0){
//         div.innerHTML = 'Пользователь был найден.';
//         setTimeout(()=>{
//             div.innerHTML = ''; 
//         }, 5000);
//     }
// }
try {
    let button = document.querySelector('button').addEventListener('click' , (e)=>{
        e.preventDefault();
        POST_DATA(1);
    })
} catch (error) {
    
}
try {
    let post = document.getElementById('post').addEventListener('click', ()=>{
        POST_DATA();
    })
} catch (error) {
    
}