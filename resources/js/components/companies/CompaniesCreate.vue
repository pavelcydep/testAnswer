<template>

 <div>


 <div class="form-group">
</div>
 
 <div class="panel panel-default">
 <div class="panel-heading">Добавить сообщение</div>
 <div class="panel-body">
 <form v-on:submit="saveForm()">
 <div class="row">
 <div class="col-xs-12 form-group">
 <label class="control-label">Имя</label>
 <input type="text" v-model="feedback.name" class="form-control">
 </div>
 </div>
 <div class="row">
 <div class="col-xs-12 form-group">
 <label class="control-label">Номер телефона</label>
 <input type="text" v-model="feedback.phone" class="form-control">
 </div>
 </div>
 <div class="row">
 <div class="col-xs-12 form-group">
 <label class="control-label">Сообщение</label>
 <textarea type="text" v-model="feedback.text" class="form-control">
   </textarea>
 </div>
 </div>
 
 <div class="row">
 <div class="col-xs-12 form-group">
 <button type="submit" class="btn btn-primary" >
Отправить
</button>
 </div>
 </div>
 </form>
 </div>
 </div>

 

 </div>
</template>

<script>
 export default {
 data: function () {
 return {
    
 feedback: {
 name: '',
 phone: '',
 text: '',

 }
 }
 },
 methods: {
 saveForm() {
 event.preventDefault();
 var app = this;
 var newFeedback = app.feedback;
 axios.post('/api/v1/companies/create', newFeedback)
 .then(function (resp) {
   newFeedback.name = '';
   newFeedback.phone = '';
   newFeedback.text = '';
alert("Cообщение отправлено!");

 })
 .catch(function (resp) {
alert(resp);
 console.log(resp);
 
 });
 },


 }
 }
</script>