<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Html5 Admin Template for Backend - Fake Dashboard</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="stylesheet" href="css/style.css?v=2">

        <!-- fluid 960 -->
        <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
        <!-- superfish menu -->
        <link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen" />
        <!-- tags css -->
        <link rel="stylesheet" href="css/jquery.tagsinput.css">
        <!-- fluid GS -->
        <link rel="stylesheet" type="text/css" href="css/fluid.gs.css" media="screen" />
        <!--[if lt IE 8 ]>
        <link rel="stylesheet" type="text/css" href="css/fluid.gs.lt_ie8.css" media="screen" />
        <![endif]-->

        <!-- //jqueryUI css -->
        <link type="text/css" href="css/custom-theme/jquery-ui-1.8.13.custom.css" rel="stylesheet" />

        <!-- //jquery -->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
        <script src="js/libs/jquery-1.5.1.min.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
        <!-- //jqueryUI -->
        <script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery-fluid16.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>

        <!-- //xoxco tags plugin https://github.com/xoxco/jQuery-Tags-Input -->
        <script src="js/jquery.tagsinput.min.js"></script>
        <link rel="stylesheet" href="css/jquery.tagsinput.css">
        <!-- modernizr -->
        <script src="js/libs/modernizr-1.7.min.js"></script>
        <style>
/*            html{
                background: url(img/galeri/bg.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
*/            
html{
    background: url(img/bg.png) repeat;
}
            .rata_tengah{
                width:400px;
                height:200px;
                padding:20px;
                position: fixed;
                top: 50%;
                left: 50%;
                margin-top: -120px;
                margin-left: -220px;
               // background: #7BA0AF;
            }
        </style>
    </head>
    <body>
        <div class="container_16">

            <div role="main">
                <div class="rata_tengah">
                    <div class="box">
                        <h2>
                            <a href="#" id="toggle-login-forms">LOGIN SASM PT. SBM</a>
                        </h2>
                        <div class="block">
                            <form action="">
                                <fieldset class="login">
                                    <legend>Login</legend>
                                    <div class="sixteen_column section">
                                        <div class="eight column">
                                            <div class="column_content">
                                                <label>UserName: </label>
                                                <input type="text" name="nik" placeholder="Masukkan Nomor NIK anda"/>
                                            </div>
                                        </div>
                                        <div class="eight column">
                                            <div class="column_content">
                                                <label>Password: </label>
                                                <input type="password" name="password" placeholder="password anda"/>									      	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sixteen_column section">
                                        <div class="ten column">
                                            <div class="column_content">
                                            </div>
                                        </div>
                                        <div class="six column">
                                            <div class="column_content">
                                                <a href="#" id="dialog_link" class="ui-state-default ui-corner-some floatRight"><span class="ui-icon ui-icon-locked"></span>Masuk</a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>            
                </div>
            </div>
    </body>
</html>