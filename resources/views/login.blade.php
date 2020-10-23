<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <style>
        @charset "utf-8";

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

        *{
            padding:0;
            margin:0;
        }

        body{
            font-family:'Open Sans',sans-serif;
        }
        fieldset{
            width:400px;
            margin:0 auto;
            margin-top:8px;
            margin-bottom:2%;
            transition:opacity 1s;
            -webkit-transition:opacity 1s;

        }
        h1{
            background:#004A3E;
            padding:20px 0; /*PADDING TODOS OS LADOS DE 20PX*/
            font-size:140%;
            font-weight:300;
            text-align:center;
            color:#fff;
        }
        form{
            background:#f0f0f0;
            padding:6% 4%;
        }
        input[type="password"]{
            width:76%;
            height:20px;
            margin-bottom:4%;
            border:1px solid #ccc;
            padding:4% 4% 4% 4%;
            font-family:'Open Sans',sans-serif;
            font-size:95%;
            color:#555;
        }
        .iconPassword{
            width:20px;
            height:20px;
            background-color:#004A3E;
            float:left;
            padding:4% 4% 4% 4%;
            margin-bottom:4%;
            background-repeat:no-repeat;
            background-image:url(https://cdn4.iconfinder.com/data/icons/font-awesome-2/2048/f09c-32.png);
            background-position:center;
            border:1px solid #ccc;
        }
        .iconUser{
            width:20px;
            height:20px;
            background-color:#004A3E;
            float:left;
            padding:4% 4% 4% 4%;
            margin-bottom:4%;
            background-repeat:no-repeat;
            background-image:url(https://cdn4.iconfinder.com/data/icons/font-awesome-2/2048/f007-32.png);
            background-position:center;
            border:1px solid #ccc;
        }
        input[type="text"]{
            width:76%;
            height:20px;
            margin-bottom:4%;
            border:1px solid #ccc;
            padding:4% 4% 4% 4%;
            font-family:'Open Sans',sans-serif;
            font-size:95%;
            color:#555;
        }
        input[type="submit"]{
            width:100%;
            background:#004A3E;
            border:0;
            padding:4%;
            font-family:'Open Sans',sans-serif;
            font-size:100%;
            color:#fff;
            cursor:pointer;
            transition:background .3s;
            -webkit-transition:background .3s;
        }

        input[type="submit"]:hover{
            background:#53B9A8;
        }
        
        input[type="checkbox"]{
            margin: 0 0 15px 100px;
        }
        
        fieldset a{
            padding: 0 0 0 130px;
            position: relative;
            top: 8px
        }
        
    </style>
</head>
    <body>
        <fieldset>
            <h1>Login</h1>
            <form method="GET" action="/register">
                <div class="iconUser"></div>
                <input type="text" placeholder="Username">
                <div class="iconPassword"></div>
                <input type="password" placeholder="Password">
                <div><input type="checkbox"> Remember me</div>
                <input type="submit" value="Login">
                <a href=""><small>Forgot Password ?</small></a>
            </form>
        </fieldset>
    </body>
</html>