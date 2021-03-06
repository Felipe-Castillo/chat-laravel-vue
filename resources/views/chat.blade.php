<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
	.list-group{
		overflow-y: scroll;
		height: 200px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="row" id="app">	
	<div class="offset-4 col-4">

  <li class="list-group-item active"><h1>Chat</h1></li>

		<ul class="list-group" v-chat-scroll>
  <message v-for="value in chat.message" 
  :key="value.index"
  color="warning"
  >
  	@{{value}}
  </message>
	   </ul>	
	  <input type="text" class="form-control" placeholder="type your message..." v-model="message" @keyup.enter='send'>

	</div>
	
	</div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>