<!-- views/home/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <meta name="description" content="<?= $data['content']; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/form.css">
</head>

<body>

    <section>
        <main class="container pt-5">
            <article class="bg-success-subtle rounded-2 p-2 text-success d-flex align-items-center justify-content-between">
                <span>Kullanıcılar</span>
                <div>
                    <a href="/PHP_advanced/home" class="btn btn-outline-success">Geri Dön</a>
                    <a href="/PHP_advanced/home/listUser" class="btn btn-success">Listele</a>
                </div>
            </article>
            <article>
                <table class="table mt-3 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Kullanıcı</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Parola</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listUserResult as $user) : ?>
                            <tr>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['parola'] ?></td>
                                <td>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <button type="submit" class="btn btn-secondary update-btn" data-user-id="user-details-<?= $user['id'] ?>">Güncelle</button>
                                        <form action="/PHP_advanced/home/deleteUser" method="post">
                                            <input type="hidden" name="userId" value="<?= $user['id'] ?>">
                                            <button type="submit" class="btn btn-danger">Sil</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-none" id="user-hide-<?= $user['id'] ?>">
                                <td colspan="12">
                                    <form action="/PHP_advanced/home/updateUser" method="post">
                                        <input class="rounded-2" type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
                                        <input class="rounded-2" type="email" id="email" name="email" placeholder="E-Mail" required>
                                        <input class="rounded-2" type="password" id="password" name="password" placeholder="Parola" required>
                                        <input type="hidden" name="userId" value="<?= $user['id'] ?>">
                                        <input class="rounded-2 deneme" type="submit" value="Kullanıcı Güncelle">
                                    </form>
                                </td>
                            </tr>
                            <tr class="d-none">
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </article>
        </main>
    </section>




    <script src="../asset/js/updateButton.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>