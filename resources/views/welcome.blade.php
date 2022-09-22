<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS!!!</title>
    <style>
        header{
            text-align: center;
            color:crimson;
        }
        .news{
            border:1px solid lightseagreen;
            padding-left:20px;
            width:80%;
            margin: 0 auto;
            margin-bottom: 5px;
        }
        
    </style>
</head>
<body>
    <header>
        <h1> {{$header}}</h1>
    </header>

    
        @foreach($articles as $article)
            <div class="news">
                <h2>{{$article['title']}}</h2>
                <p>{{$article['desc']}}</p>
            </div>
        @endforeach

</body>
</html>