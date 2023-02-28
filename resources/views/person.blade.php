<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Basta ako si Nick</h1>
    <p>This is Nickelodeon</p>
<div class="h3">
   <p><b>Name:</b> {{ $name }}</p>
   <p><b>Age:</b> {{ $age }}</p>
   <p><b>Address:</b> {{ $address }}</p>
</div>
   <hr>
    @if($age < 18)
        <p style="color: red"> Cannot Vote!</p>
    @else
        <p style="color: green"> Can Vote!</p>
    @endif

   <hr>
   <h3>Siblings</h3>
   <ol>
        @foreach($siblings as $sibling)
            <tr>
                <td>{{ $sibling ['name']}}</td>
                <td>{{ $sibling ['age']}}</td>
                <td>
                @if($sibling ['age'] < 18)
                    <p style="color: red"> Cannot Vote!</p>
                @else
                    <p style="color: green"> Can Vote!</p>
                @endif
                </td>
            </tr>
        @endforeach
   </ol>
</body>
</html>