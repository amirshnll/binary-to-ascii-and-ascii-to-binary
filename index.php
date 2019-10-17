<html>

    <head>
    	<meta charset="utf-8" />
        <title>Binary To Text(ascii) Convertor</title>

        <style type="text/css">
        	body {
        		margin: 0;
        		padding: 0;
        		direction: ltr;
        		font-family: tahoma;
        		background: #efefef;
        	}
        	.container {
        		width: 70%;
        		margin: 50px auto;
        		background: #ffffff;
        		padding: 20px;
        		border-radius: 10px;
        	}
        	.container h1 {
        		font-size: 14px;
        		padding-bottom: 20px;
        		border-bottom: 1px dashed #000000;
        	}
        	.container textarea {
        		width: 100%;
        		height:200px;
        		resize: none;
        		padding: 10px;
        		border:1px solid #efefef;
        		border-radius: 15px;
        		outline: none;
        	}
        	.container input[type="submit"] {
        		float: right;
        		border:1px solid #efefef;
        		border-radius: 15px;
        		cursor: pointer;
        		padding: 5px 20px;
        	}
        	.container .clearfix {
        		clear: both !important;
        	}
        	.container .post-center {
        		text-align: center;
        	}
        	.container p {
        		font-size: 13px;
        	}
        	.container label {
        		font-weight: bolder;
        	}
        	.container .result {
        		line-height: 30px;
        		text-align: justify;
        		font-size: 12px;
        		padding: 15px;
        		border: 1px solid #efefef;
        		border-left: 15px solid #efefef;
        		border-radius: 15px;
        	}
        	.container .hidden {
        		visibility: hidden;
        		display: none;
        	}
        </style>
    </head>

    <body>

        <div class="container">

            <h1>Binary To Text(ascii) Convertor</h1>

            <br />

            <form action="" method="post">
            	<p><label for="binary_text">binary to text :</label></p>
            	<p><textarea name="binary_text" id="binary_text"></textarea></p>
            	<p><input type="submit" id="submit" value="convert" name="submit"></p>
            	<div class="clearfix"></div>
            </form>

            <p class="result hidden"></p>

            <br /><br />

            <form action="" method="post">
            	<p><label for="text_binary">text to binary :</label></p>
            	<p><textarea name="text_binary" id="text_binary"></textarea></p>
            	<p><input type="submit" id="submit" value="convert" name="submit"></p>
            	<div class="clearfix"></div>
            </form>

            <p class="result hidden"></p>

            <br /><br />
            <p class="post-center">&copy; 2019 Amir Shokri</p>

        </div>

    </body>

</html>