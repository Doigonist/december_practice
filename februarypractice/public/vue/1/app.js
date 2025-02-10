const {createApp} = Vue
// const {createApp} = Vue;
// // const App = {
// //     data(){
// //         return{
// //             counter: 0,
// //             title : 'Счетчик'
// //         }
// //     }
// // }
// // Vue.createApp(App).mount('#app');
// createApp({
//     data(){
//         return{
//             title : 'Список заметок',
//             placeholder: 'Это плейсхолдер',
//             inputValue: '',
//             notes: []
//         }
//     },
//     methods : {
//         addNote(event){
//             this.inputValue = event.target.value;
//             notes.push(this.inputValue);
//         }
//     }
// }).mount('#app');

// createApp({
//   data(){
//     return{
//         title: 'Список заметок',
//         placeholder: 'Это плейсхолдер',
//         inputvalue: '',
//         notes: []
//     }
//   },
//   methods: {
//     changenote(e){
//         this.inputvalue = e.target.value;
//     },
//     savenote(e){
//         for(let i = 0; i < this.inputvalue; i++){
//             this.notes.push(`Это текст под номером - ${i+1} ✔`);
//             // console.log('123');
//         }
//         this.inputvalue = '';
//     }
//   }
// }).mount('#app');
createApp({
    data(){
      return{
        placeholder1: 'Введите первый год',
        placeholder2: 'Введите последний год',
        Firstyear: null,
        LastYear: null,
        LeapYearCount: 0,
        LeapYear: [],
        Permission_for_li : false,
      }
    },
    methods: {
        calculateLeapYears(event){
            if (this.Firstyear === null || this.LastYear === null){
                console.log('Пожалуйста, введите первый и последний годы.');
                
            }else{
            this.LeapYearCount = 0;
            event.preventDefault();
            this.LeapYear = [];
            
            for(let year = this.Firstyear; year <= this.LastYear; year++){
                if((year % 4 === 0) && (year % 100!== 0) || (year % 400 === 0)){
                    this.LeapYear.push(year);
                    this.LeapYearCount++;
                }else{
                    console.log(year + " - Не високосный.")
                }
            }
            this.Permission_for_li = true;
            console.log(this.LeapYear);
            }
        },
        test(){
            this.Permission_for_li = false;
        }

    }
  }).mount('#app');
