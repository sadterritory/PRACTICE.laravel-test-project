<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Create page
<hr>
<div>
    <form action="{{ route('worker.store') }}" method="Post">
        @csrf
        <div style="margin-top: 15px"><input type="text" name="name" placeholder="Name"></div>
        <div style="margin-top: 15px"><input type="text" name="surname" placeholder="Surname"></div>
        <div style="margin-top: 15px"><input type="email" name="email" placeholder="Email"></div>
        <div style="margin-top: 15px"><input type="number" name="age" placeholder="Age"></div>
        <div style="margin-top: 15px"><textarea name="description" placeholder="Description"></textarea></div>
        <div style="margin-top: 15px">
            <input type="checkbox" name="is_married" id="isMarried">
            <label for="isMarried">Is married</label>
        </div>
        <div style="margin-top: 15px">
            <input type="submit" value="Добавить">
    </form>
</div>

</body>
</html>
