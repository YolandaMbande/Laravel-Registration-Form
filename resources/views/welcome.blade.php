<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 36px;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #ff00fb;
            font-size: 18px;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            color: #9b00b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Welcome to My Application</h1>
    <a href="{{ route('register.form') }}">Register Here</a>
</div>
</body>
</html>

