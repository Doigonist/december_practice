const {createApp} = Vue
createApp({
    data(){
      return{
        Task: '',
        tasks: 0,
        TagForTasks: 1,
        Work: [],
        Personal: [],
        Purchases: [],
      }
    },
    methods: {
         addTask(){
            if(this.Task && this.TagForTasks){
                if (this.TagForTasks == 1){
                    this.Work.push(this.Task);
                } else if (this.TagForTasks == 2){
                    this.Personal.push(this.Task);
                } else if (this.TagForTasks == 3){
                    this.Purchases.push(this.Task);
                }
              this.Task = '';
              this.tasks++;
            }
         },
    }
  }).mount('#app');
