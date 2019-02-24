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
<div class ='main-content'>
    <h1>Caculate</h1>
    <form method="post" action="{{route('caculate')}}">
        @csrf
        <label>Numbel: 1</label>
        <input type="number" id="number_1" name="number_1"><br>
        <label>Number_2</label>
        <input type="number" id="number_2" name="number_2"> <br>
        <select id="operator" name = "operator">
            <option name="+" id="+" value="+"> Addition+</option>


            <option name="-" id="-" value="-"> Addition+</option>


            <option name="x" id="x" value="x"> Addition+</option>


            <option name="/" id="/" value="/"> Addition+</option>

        </select>
        <br>
        <button type="submit" name="submit" id="submit">Check Result</button>
    </form>

</div>

</body>
</html>


