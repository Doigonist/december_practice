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

createApp({
  data(){
    return{
        title: 'Список заметок',
        placeholder: 'Это плейсхолдер',
        inputvalue: '',
        notes: []
    }
  },
  methods: {
    changenote(e){
        this.inputvalue = e.target.value;
    },
    savenote(e){
        for(let i = 0; i < this.inputvalue; i++){
            this.notes.push(`Это текст под номером - ${i+1} ✔`);
            // console.log('123');
        }
        this.inputvalue = '';
    }
  }
}).mount('#app');