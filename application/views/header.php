<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title ?></title>
    <style>
        .item {
            width:400px;
        }
 
        input {
            color:#222222;
            font-family:georgia,times;
            font-size:24px;
            font-weight:normal;
            line-height:1.2em;
            color:black;
        }
 
        a {
            color:blue;
            font-family:georgia,times;
            font-size:20px;
            font-weight:normal;
            line-height:1.2em;
            text-decoration:none;
         }
 
        a:hover {
            text-decoration:underline;
        }

        h1 {
            color:#000000;
            font-size:41px;
            letter-spacing:-2px;
            line-height:1em;
            font-family:helvetica,arial,sans-serif;
            border-bottom:1px dotted #cccccc;
        }
 
        h2 {
            color:#000000;
            font-size:34px;
            letter-spacing:-2px;
            line-height:1em;
            font-family:helvetica,arial,sans-serif;
        }
        ul {
            list-style-type: none;
        }

        li { 	
            padding: 10px;
            float: left;
            text-align: left;
            font-family: Arial; color: #990000; 
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div>
        <h1><?php echo $title ?></h1>
        <ul id="ul">
            <li id="li"><a class="active" href="./index.php">Home</a></li>
            <li id="li"><a href="./login.php">Sign in</a></li>
            <li id="li"><a href="./list.php">List</a></li>
            <li id="li"><a href="./search.php">Search</a></li>
        </ul>
    </div>
    <br />