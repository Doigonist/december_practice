timer(1000);
let data;
let points = document.getElementById('points');
let costUpgrade = document.getElementById('cost');
let points_amount = 0;
let power_amount = 1;
let power_cost = 1;
let generate_amount = 0;
let gen_cost = 200;
let del = false
const del_button = document.getElementById('del').addEventListener('click',()=>{
    del = true
    location.reload()
})
let power = document.getElementById('power');
let generator = document.getElementById('generate');
let generatorPower = document.getElementById('generator');
let generatorcosttext = document.getElementById('gencosttext')
const buttonClick = document.getElementById('buttonClick').addEventListener('click', ()=>{
    addPoints(power_amount);
});
const buttonUpgrade = document.getElementById('buttonUpgrade').addEventListener('click', ()=>{
    powerUpgrade();
});
const buttonAutoclick = document.getElementById('buttonAutoclicker').addEventListener('click', ()=>{
        upgradeClicker()
});
function addPoints(amount){
    points_amount += amount;
}
function timer(time){

let autoclick = setInterval(function() {
		// clearInterval(timer);
        addPoints(generate_amount);
        
}, time);    
let timer = setInterval(function() {
		// clearInterval(timer);
        power.textContent = power_amount;
        costUpgrade.textContent = power_cost;
        points.textContent = points_amount;
        generatorPower.textContent = generate_amount;
        generatorcosttext.textContent = gen_cost;
        
}, 5);
}
function upgradeClicker(){
    if (gen_cost <= points_amount){
    generate_amount += power_amount;
    points_amount -= gen_cost
    gen_cost = Number((gen_cost * 2) * (Math.random() * (3 - 1.2) + 1.2).toFixed(0))
    } 
}
function powerUpgrade(){
    if (power_cost <= points_amount){
    power_amount += Number((Math.random() * (4 - 2) + 1.5).toFixed(0));
    points_amount -= power_cost;
    power_cost = Number((power_cost * 2) * (Math.random() * (3 - 1.2) + 1.2).toFixed(0));
    }else{
        throw new Error("ди нахуй я твою мать ебал");
        
    }
}
window.addEventListener("beforeunload", function () {
    if (!del){
  let data_Arr = {
     points_amount : points_amount,
     power_amount : power_amount,
     power_cost : power_cost,
     generate_amount : generate_amount,
     gen_cost : gen_cost
  }
  this.localStorage.setItem('data',JSON.stringify(data_Arr));
    }else{
        this.localStorage.clear();
    }
});
function initialise(data){
    points_amount = data['points_amount'];
    power_amount = data['power_amount'];
    power_cost = data['power_cost'];
    generate_amount = data['generate_amount'];
    gen_cost = data['gen_cost'];
}
try {
    data = localStorage.getItem('data')
    data = JSON.parse(data)
    initialise(data)
    console.log("Дата успешно загружена!")

} catch (error) {
     points_amount = 0;
     power_amount = 1;
     power_cost = 1;
     generate_amount = 0;
     gen_cost = 200;
    throw new Error("Дата повреждена или отсутствует... Загружаю дефолт");
}