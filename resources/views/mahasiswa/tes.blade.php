<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>nama</th>
            <th>nim</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $tes as $teslah)
         <tr>
            <td>{{ $teslah->nama }}</td>
            <td>{{ $teslah->nim }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
</body>
</html>
