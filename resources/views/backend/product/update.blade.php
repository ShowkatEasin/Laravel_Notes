<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
</head>
<body>
    <form action="{{ route ('update', $edit->id) }}" method="POST">
        @csrf
        <input type="text" value="{{ $edit->name }}" name="name" placeholder="Enter Name">
        <input type="text" value="{{ $edit->des }}" name="des" placeholder="Enter Description">
        <select name="status">
            <option value="1" @if ($edit-> status =1) selected @endif >Active</option>
            <option value="2" @if ($edit-> status =2) selected @endif >Inactive</option>
        </select>
        <button>Save Change</button>
    </form>
</body>
</html>