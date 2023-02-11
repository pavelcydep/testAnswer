<template>
<div>
<li v-for="question in questions">{{question.question}}
 <div v-if="question.right_answer2==null">
<input type="radio" :id="question.id"  :value="question.answer1" v-model="radio" checked>
<label >{{question.answer1}}</label>
 <input type="radio" :id="question.id"  :value="question.answer2" v-model="radio">
<label>{{question.answer2}}</label>
 <input type="radio" :id="question.id"  :value="question.answer3" v-model="radio">
<label >{{question.answer3}}</label>
<button :id="question.id"  type="button" >Ответить</button>

 </div>

<div v-else

 <input type="checkbox" :id="question.id"  :value="question.answer1" v-model="checkedNames">
  <input type="checkbox" :id="question.id"  :value="question.answer1" v-model="checkedNames">
<label >{{question.answer1}}</label>
 <input type="checkbox" :id="question.id"  :value="question.answer2" v-model="checkedNames">
<label >{{question.answer2}}</label>
 <input type="checkbox" :id="question.id"  :value="question.answer3" v-model="checkedNames">
<label >{{question.answer3}}</label>
<button v-on:click="checkChecked" type="button" >Ответить</button>
 </li>
 </div>

 </div>
 </template>

<script>
 export default {
  
 data: function () {
 return {
    questions:null,
    checkedNames: [],
 
 }
 },
 mounted() {
    axios
      .get('/api/v1/companies/index')
      .then(response => (this.questions = response.data));
  },

 methods: {
checkRadio:
function(event){

 
  let rightAnswer1=event.currentTarget.id;
  let text=document.getElementById('text');
 return   this.radio==rightAnswer1 ?   text.textContent="правильный ответ" :   text.textContent="Неправильный ответ";
    

}



 }
 }
</script>