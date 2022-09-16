<html>
<head>
	<title>메인</title>
	<style>
		select{
		    width: 311px;
			padding: 0.8em 0.5em;
			font-family: inherit;
			background: url(img/free-icon-down-arrow-748063.png) no-repeat 92% 50%;
			background-size: 20px;
			border: 1px solid #999;
			border-radius: 0px;
			font-size: 15px;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin-left:auto;
		}	
		.content{
			width:100%;
			height:90%;
		}
		
		@media (max-width: 800px) {
			select{
				width: 400px;
				font-family: inherit;
				background: url(img/free-icon-down-arrow-748063.png) no-repeat 92% 50%;
				background-size: 20px;
				border: 1px solid #999;
				border-radius: 0px;
				font-size: 20px;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
			}
		}
	</style>
	<script  src="https://code.jquery.com/jquery-3.6.1.js"  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="  crossorigin="anonymous"></script>
	<script>
		$(function(){
			$("#start_btn").click(function(){
				var win = window.open("test_start.php?test_type=" + $(".test_type").val());
			});
			
			$("#show_all_questions").click(function(){
				var win = window.open("show_all_questions.php");
			})
		})
	</script>
</head>
<body>
	<div class='content'>
		<select class='test_type'>
			<option value=1>전체(순서대로)</option>
			<option value=2>전체(랜덤)</option>
			<option value=3>랜덤 25문제</option>
		</select><br>
		<button id='start_btn'>시작</button><br>
		<button id='show_all_questions'>전체 문제보기</button>
	</div>
</body>
</html>