<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
	<style type="text/css">
		
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}
		input{
			
		}
	</style>
</head>
<body>
<div class="container">
<div class="row" id="app1">
<div class="col-lg-offset-4 col-lg-4">
<div class="list-group ">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
<message v-for="value in chat.message"> @{{ value }}</message>
  <input type="text" name="message" placeholder="Type Your Message here ..." class="form-control" v-model='message' v-on:keyup.enter='send'>
</div>
</div>
</div>
</div>
<script type="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script type="{{asset('js/bootstrap.min.js')}}"></script>
<!--<script src="{{asset('js/app.js')}}"></script>-->
<script type="text/javascript">

Vue.component('message',{

  template:'<a href="#" class="list-group-item"><slot></slot></a>',

});

	
var	 app = new Vue({
    el: '#app1',
    data:{
    	message:'',
    	chat:{
    		message:[]
    	}
    },

    methods:{

    	send(){
    		if (this.message.length != 0) {
    		//console.log(this.message)
    		this.chat.message.push(this.message);
    		this.message="";

    		}
    	}
    }

});
	 //v-on:keyup='send' == @:keyup='send'
	 // v-on:keyup.enter='send' // run after click enter 

</script>
</body>
</html>