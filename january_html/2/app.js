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
          inputfirst: '',
          inputsecond: '',
          rows : '',
          cols : '',
          count_cols: 0,
          count_rows: 0,
          count_final: 0,
      }
    },
    methods: {
        getRows(e){
            this.rows = e.target.value;
            console.log(this.rows + ' - установлено значений строк')
        },
        getCols(e){
            this.cols = e.target.value;
            console.log(this.cols + ' - установлено значений колонок')
        },
        generateTable(e){
            for (let i = 0; i < this.rows; i++){
                this.count_rows++;
            }
            for (let i = 0; i < this.cols; i++){
                this.count_cols++;
            }
            console.log(this.count_cols + ' ' + this.count_rows);
            console.log(this.count_rows * this.count_cols + ' - Общее количество ячеек');
            this.count_final = this.count_rows * this.count_cols;
            this.count_cols = 0;
            this.count_rows = 0;
            
        }
    }
  }).mount('#app');