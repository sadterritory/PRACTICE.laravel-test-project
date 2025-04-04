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
    <form action="{{ route('worker.update', $worker->id) }}" method="Post">
        @csrf
        @method('Patch')
        <div style="margin-top: 15px"><input type="text" name="name" placeholder="Name" value="{{$worker->name}}"></div>
        <div style="margin-top: 15px"><input type="text" name="surname" placeholder="Surname"
                                             value="{{$worker->surname}}"></div>
        <div style="margin-top: 15px"><input type="email" name="email" placeholder="Email" value="{{$worker->email}}">
        </div>
        <div style="margin-top: 15px"><input type="number" name="age" placeholder="Age" value="{{$worker->age}}"></div>
        <div style="margin-top: 15px"><textarea name="description"
                                                placeholder="Description">{{$worker->description}}</textarea></div>
        <div style="margin-top: 15px">
            <input type="checkbox" name="is_married" form="isMarried"
                {{$worker->is_married ? 'checked' : ''}}
            >
            <label for="isMarried">Is married</label>
        </div>
        <div style="margin-top: 15px">
            <input type="submit" value="Изменить">
    </form>
</div>

</body>
</html>
