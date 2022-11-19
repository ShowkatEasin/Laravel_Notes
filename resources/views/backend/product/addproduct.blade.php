<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
</head>
<body>
    <form action="{{ route ('addproduct') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="des" placeholder="Enter Description">
        <select name="status">
            <option value="1">Active</option>
            <option value="2">Inactive</option>
        </select>
        <button>Save</button>
    </form>
</body>
</html>