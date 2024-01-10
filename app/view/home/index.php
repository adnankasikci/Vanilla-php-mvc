<!-- views/home/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <meta name="description" content="<?= $data['content']; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="asset/css/form.css">
</head>

<body>

    <section>
        <main class="container pt-5">
            <article class="bg-success-subtle rounded-2 p-2 text-success ">
                <div class="d-flex align-items-center justify-content-between">
                    <span>Kullanıcılar</span>
                    <a href="/PHP_advanced/home/listUser" class="btn btn-success">Listele</a>
                </div>
                <form class="mt-3" action="home/addUser" method="post">
                    <input class="rounded-2 deneme" type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
                    <input class="rounded-2" type="email" id="email" name="email" placeholder="E-Mail" required>
                    <input class="rounded-2" type="password" id="password" name="password" placeholder="Parola" required>
                    <input class="rounded-2 deneme" type="submit" value="Kullanıcı Ekle">
                </form>
            </article>
            <article>

            </article>
        </main>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>