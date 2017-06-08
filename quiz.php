<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
<body>
	<div id="content">
		<h3 id="question">Question 1</h3>
	</div>

	<input type="text" id="answer">
	<button id="btn">Click</button>
	<br>
	<div>
		<h3 id="result"></h3>
		<h3 id="cheat"></h3>
		<h3 id="test"></h3>
	</div>

<script type="text/javascript">
	var questions = [
		['Question 1', '1'],
		['Question 2', '2'],
		['Question 3', '3'],
		['Question 4', '4'],
		['Question 5', '5'],
		];

	var counter = 0;
	var score = 0;

	document.getElementById('btn').onclick=function(){
		document.getElementById('question').innerHTML = questions[counter][0];
		var input = document.getElementById('answer').value;

		if (input == questions[counter][1]) {
			document.getElementById('test').innerHTML = "Correct!";
			score++;
		}else{
			document.getElementById('test').innerHTML = "    Wrong!";
		}
		document.getElementById('answer').value = '';
		counter++;

		if(counter >= questions.length){
			alert(score + ' out of 5');
			}

	} 
</script>


</body>
</html>