<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: #f8fafc;
            color: #22223b;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            padding: 40px 30px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(34, 34, 59, 0.08);
        }
        .error-code {
            font-size: 7rem;
            font-weight: bold;
            color: #4f8ef7;
            margin-bottom: 10px;
        }
        .message {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 24px;
            background: #4f8ef7;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s;
        }
        a:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <div class="message">Oops! The page you are looking for was not found.</div>
        <a href="">Go Home</a>
    </div>
</body>
</html>