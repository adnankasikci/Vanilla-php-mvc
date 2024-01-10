<!-- views/home/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <meta name="description" content="<?= $data['content']; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <section>
        <main class="container pt-5">
            <article class="bg-success-subtle rounded-2 p-2 text-success d-flex align-items-center justify-content-between">
                <span>Kullanıcılar</span>
                <a href="/PHP_advanced/home/listUser" class="btn btn-success">Listele</a>
            </article>
            <article>
                <div class="alert alert-success mt-5 d-flex flex-column" role="alert">
                    <h3 class="text-success">Kullanıcı Başarıyla Silindi</h3>
                    <span><?php echo "Kullanıcı Adı: " . $username .  " " . " Mail Adresi: " . $email . " Parola: " . $password ?></span>
                    <a class="btn btn-success d-inline mt-5" href="/PHP_advanced/home">Geri Dön</a>
                </div>
            </article>
        </main>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>