<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-weight: lighter;

        }

        ::after,
        ::before {

            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            margin: 30px;
        }

        table {
            margin: 30px;
        }

        td {
            padding: 4px;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid #000;
        }

        .btnAdd {
            display: block;
            width: 97%;
            text-align: right;
        }

        button {
            border: none;
            color: #fff;
            border-radius: 4px;
            min-width: 60px;
            height: 30px;
            cursor: pointer;
        }

        .edit-delete {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .edit-delete a {
            margin: 0 6px;
        }

        .edit-delete button {
            width: 100%;
        }

        .action {
            width: 200px;
        }
    </style>
</head>

<body>
    <h1>Table Manager</h1>
    {{-- <a href="{{ url('add') }}"> --}}
    <a class="btnAdd" href="{{ url('profile/home/add') }}">
        <button id="btnAdd" style="background-color: #107c10;">Add</button>
    </a>

    <table id="table-info" style="width: 96%; margin-top: 30px;"></table>
    <script type="module" src="{{ url('js/style.js') }}"></script>
</body>

</html>