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
            .container a {
                color: #000;
                text-decoration: none;
                font-weight: bolder;
                letter-spacing: 3px;
                font-size: 9px;
            }
        </style>
    </head>

    <?php

        header("Content-Type: text/html; charset=utf-8");
        require_once('function.php');
        $result1 = "";
        $result2 = "";

        if( isset( $_POST['binary_text'] ) && !empty( $_POST['binary_text'] ) )
        {
            $result1 = text_to_binary( ltrim( rtrim( $_POST['binary_text'] ) ) );
        }


        if( isset( $_POST['text_binary'] ) && !empty( $_POST['text_binary'] ) )
        {
            $result2 = binary_to_text( ltrim( rtrim( $_POST['text_binary'] ) ) );
        }

    ?>

    <body>

        <div class="container">

            <h1>Binary To Text(ascii) Convertor</h1>

            <br />

            <form action="index.php" method="post">
                <p><label for="binary_text">binary to text :</label></p>
                <p><textarea name="binary_text" id="binary_text"></textarea></p>
                <p><input type="submit" id="submit" value="convert" name="submit"></p>
                <div class="clearfix"></div>
            </form>

            <p class="result <?php if( empty( $result1 ) ) echo "hidden"; ?>"><?php echo $result1; ?></p>

            <br /><br />

            <form action="index.php" method="post">
                <p><label for="text_binary">text to binary :</label></p>
                <p><textarea name="text_binary" id="text_binary"></textarea></p>
                <p><input type="submit" id="submit" value="convert" name="submit"></p>
                <div class="clearfix"></div>
            </form>

            <p class="result <?php if( empty( $result2 ) ) echo "hidden"; ?>"><?php echo $result2; ?></p>

            <br /><br />
            <p class="post-center">&copy; 2019 Amir Shokri</p>
            <p class="post-center"><a href="https://github.com/amirshnll" title="github">[ github ]</a> - <a href="https://amirshnll.ir" title="website">[ website ]</a> - <a href="mailto:amirsh.nll@gmail.com" title="email">[ email ]</a></p>

        </div>

    </body>

</html>