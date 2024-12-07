<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
            border-bottom: 1px solid #34495e;
            padding-bottom: 10px;
        }
        .sidebar a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 18px;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            display: block;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
            overflow-y: auto;
        }
        .content h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#">Dashboard</a>
        <a href="#">Users</a>

       <form action="{{route('logoutpage')}}" method="post"> <button>Logout</button></form>
    </div>
    <div class="content">
        <h1>Welcome to the Admin Dashboard</h1>

    </div>
</body>
</html>
