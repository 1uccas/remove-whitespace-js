<?php 

function returnText(){
	if (isset($_POST['input_text'])) {
		$text = $_POST['input_text'];
		$resultText = $_POST['input_text_result'];

		$newText = str_replace(" ","",$text);
		return $newText;
	}else{
		return die("404");
	}
}


?>
<link rel="stylesheet" href="src/style/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
	<main class="class-master">
		<div class="navbar m-3">
			<form action="index.php" method="POST" class="container-fluid">
				<input type="text" name="input_text" id="input" class="form-control" required="required" placeholder="Enter your text">
				<input type="text" name="input_text_result" id="resultText" class="form-control mt-3 mb-3 w-100" value="<?php echo returnText(); ?>" placeholder="Result"><button id="copy" type="button" class="btn btn-primary">copy</button>
				<button type="submit" id="button_submit" class="btn btn-warning w-75">Enter</button>
			</form>
		</div>
	</main>
</body>
<script src="copyText.js"></script>