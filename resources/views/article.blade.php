<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .article{
            width:80%;
            margin:20px auto;
            border: 1px solid crimson;
        }
        h2{
            text-align: center;
            font-size:30px;
            padding:10px;
            border-bottom:1px solid grey;
        }
        p{
            padding:15px;
            font-size:24px;
        }
    </style>
</head>
<body>
    <div class="article">
        <h2>{{$article['title']}}</h2>
        <p>{{$article['desc']}}</p>
    </div>
</body>
</html>