<html>
<head>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.5/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.8/addons/p5.dom.js"></script> -->
	<script src="../lib/p5.min.js"></script>
	<script src="../lib/p5.dom.js"></script>
	<script src="../lib/p5.speech.js"></script>
	<script>

	var myRec = new p5.SpeechRec(); // new P5.SpeechRec object


	function setup()
	{
		// graphics stuff:
		// createCanvas(800, 400);
		createCanvas(2048, 1080);
		background(255, 255, 255);
		fill(0, 0, 0, 255);
		// instructions:
		textSize(32);
		textAlign(CENTER);
		// myRec = "";
		// text("say something", width/2, height/2);
		// myRec.onResult = showResult;
		// myRec.start();
	}

	function draw()
	{
	  myRec = null;
		myRec.onResult = showResult;
		myRec.start();
		// why draw when you can talk?
	}

	function showResult()
	{
		if(myRec.resultValue==true) {
			// background(192, 255, 192);
			text(myRec.resultString, width/2, height/2);
			console.log(myRec.resultString);
		}
	}

</script>
</head>
<body>
</body>
</html>
