<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="./response.php"  method="get">
        <textarea name="paragraph" id="" cols="30" rows="10" placeholder="write parapraph"></textarea>
        <label for="censor">censored word</label>
        <input type="text" name="censor">
        <button type="submit">
            submit
        </button>
    </form>
</body>
</html>