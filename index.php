<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение цвета текста</title>
    <style>
        #myText {
            color: black;
        }
    </style>
</head>
<body>
    <h1 id="myText">Этот текст изменит цвет</h1>
    <button onclick="changeColor()">Изменить цвет на синий</button>

    <script>
        function changeColor() {
            const textElement = document.getElementById('myText');
            textElement.style.color = 'blue';
        }
    </script>
</body>
</html>
