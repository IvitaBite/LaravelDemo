<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())  }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/resources/css/test.css" rel="stylesheet" type="text/css"/>
    <title>Test Page</title>
    <style>
        .codelex-button {
            margin-top: 20px;
        }

        .codelex-button a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #ffffff;
            background-color: #005D54;
            border: 2px solid #005D54;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .codelex-button a:hover {
            background-color: #ffffff;
            color: #005D54;
        }
    </style>
</head>
<body>
<div class="codelex-button">
    <a href="https://www.codelex.io" target="_blank">{{ $message }}</a>
</div>
</body>
</html>
