
<html>
<head>
    <style>
        body {
	font-family: Arial, sans-serif;
}

form {
	margin-bottom: 20px;
}

label {
	display: block;
}

input[type=text] {
	width: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-bottom: 10px;
}

button[type=submit] {
	background-color: #4CAF50;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

button[type=submit]:hover {
	background-color: #45a049;
}

#prediction-result {
	font-size: 24px;
	font-weight: bold;
}

    </style>
	<title>AI Model Interface</title>
</head>
<body>
	<h1>AI Model Interface</h1>
	<form id="prediction-form">
		<label for="input1">Input 1:</label>
		<input type="text" id="input1" name="input1" required><br><br>
		
		<label for="input2">Input 2:</label>
		<input type="text" id="input2" name="input2" required><br><br>
		
		<button type="submit" id="predict-btn">Predict</button>
	</form>
	
	<div id="prediction-result"></div>
	
	<script>
    const predictionForm = document.getElementById('prediction-form');
const predictBtn = document.getElementById('predict-btn');
const predictionResult = document.getElementById('prediction-result');

predictionForm.addEventListener('submit', e => {
	e.preventDefault();
	
	// get input values
	const input1 = document.getElementById('input1').value;
	const input2 = document.getElementById('input2').value;
	
	// send data to server
	fetch('/predict', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json'
		},
		body: JSON.stringify({input1, input2})
	})
	.then(response => response.json())
	.then(data => {
		// display prediction result
		predictionResult.innerHTML = `Prediction: ${data.prediction}`;
	})
	.catch(error => {
		console.error('Error:', error);
	});
});

    </script>
</body>
</html>
