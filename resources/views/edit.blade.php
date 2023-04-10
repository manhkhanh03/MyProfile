<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-weight: lighter;

        }

        html {
            width: 100%;
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            margin: 30px;
        }

        .box-input {
            margin-top: 50px;
        }

        input {
            width: 96%;
            height: 30px;
            border-radius: 4px;
            outline: none;
            border: 1px solid #dddddd;
            padding: 6px;
        }

        button {
            margin-top: 30px;
            min-width: 70px;
            height: 30px;
            color: #fff;    
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <h1>Table Manager > Edit Record</h1>
    <div id="box-edit" data-id="{{$profile[0]}}" class="box-input-{{$profile[0]}}">
        <div class="box-if-ip">
            <p>Name</p>
            <input type="text" name="name" id="name" value="{{$profile[1]}}">
        </div>
        <div class="box-if-ip">
            <p>Address</p>
            <input type="text" name="address" id="address" value="{{$profile[2]}}">
        </div>
        <div class="box-if-ip">
            <p>Phone</p>
            <input type="text" name="phone" id="phone" value="{{$profile[3]}}">
        </div>
    </div>
    <a href="{{ url('profile/home') }}"><button id="cancel" style="background-color: #616161;">Cancel</button></a>
    <button id="edit" style="background-color: #ffc80a;">Edit</button>
    
    <script src="{{ url('js/edit.js') }}"></script>
</body>

</html>