<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Studi</title>
</head>
<body>
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
    @foreach ($prodi as $item)
        <li>{{$item ["nama"]}} <br>
            {{$item ["singkatan"]}}
            {{$item ["Fakultas"] ["nama"]}}</li>
        
    @endforeach
    </ul>
    
</body>
</html>