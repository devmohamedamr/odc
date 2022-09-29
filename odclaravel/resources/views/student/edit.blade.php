<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{url("student/update")}}" method="post">
       @csrf
       <input type="hidden" name="id" value="{{$student->id}}">
        <input type="text" value="{{$student->name}}" name="name">
        <input type="email" value="{{$student->email}}" name="email">
        <input type="text" value="{{$student->phone}}" name="phone">
        <input type="submit">
    </form>
</body>
</html>
