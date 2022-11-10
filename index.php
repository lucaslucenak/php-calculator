<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calc.php" method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiplicate">Multiply</option>
            <option value="divide">Divide</option>
            <option value="invalid">Invalid</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>