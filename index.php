<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.13/tailwind.min.css">
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
</head>

<body>
    <div class="container w-4/12 mx-auto">
        <form action="form.php" method="post" class="w-full flex flex-col px-10 py-10">
            <div class="mb-4">
                <label for="">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border border-gray-200">
            </div>
            <div class="mb-4 mx-auto">
                <div class="h-captcha" data-sitekey=""></div>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-3">Subscribirme</button>
        </form>
    </div>
</body>

</html>