<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Create Book</h1>
    <form action="{{route('storeBook')}}" method="POST">
        @csrf
        <label for="">book title</label>
        <input type="text" name="bookTitle">
        @error('bookTitle')
            <div>
                {{$message}}
            </div>
        <br>
        <label for="">author</label>
        <input type="text" name="author">
        <br>
        <label for="">released date</label>
        <input type="date" name="releaseDate">
        <br>
        <label for="">total page</label>
        <input type="number" name="totalPage">
        <br>
        <button>Submit</button>
    </form>
</body>
</html>
