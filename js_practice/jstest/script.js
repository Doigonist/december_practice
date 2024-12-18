
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

});
async function POST_DATA() {
    let res = await fetch('http://decemberpractice/js_practice/jstest/ajax.php', {
        method: 'POST',
        header: {'Content-Type' : 'application/x-www-form-urlencoded'},
        body: new URLSearchParams({'login' : login.value,
            'password' : password.value
        })
    });

    let txt = await res.text();
    if (txt == 1){
        div.innerHTML = txt;
    }else if(txt == 2){
        div.innerHTML = '<img src="https://media.tenor.com/lJ_LFPgMSzUAAAAi/niko-niko-oneshot.gif" alt=""><h1>Cool IMG from ajax</h1>'
    }else{
     init_table(JSON.parse(txt)); 
    }
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

async function GET_DATA() {
    let res = await fetch(`http://decemberpractice/js_practice/jstest/ajax_get.php?login=${login.value}&pass=${password.value}`);
    let txt = await res.text();
    div.innerHTML = txt;
    setTimeout(()=>{
        div.innerHTML = ''; 
    }, 5000);
    console.log(txt);
}
function init_table(text){
    div.innerHTML = '';
    let table = document.createElement('table');
    table.setAttribute('border', '1px');
    div.appendChild(table);
    let tr = document.createElement('tr');
    table.appendChild(tr);
    for(i=0;i<3; i++){
        let td = document.createElement('td');
        td.textContent = text[i];
        tr.appendChild(td);
    }
}
