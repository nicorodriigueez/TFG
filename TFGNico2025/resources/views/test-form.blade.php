<!DOCTYPE html>
<html>
<head>
    <title>Test Form</title>
</head>
<body>
    <form action="/test-form" method="POST">
        @csrf
        <input type="text" name="test" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>