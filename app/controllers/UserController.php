<?php

require_once __DIR__ . '/../models/UserModel.php';


class UserController
{
    private $userModel;

    public function __construct(PDO $db)
    {
        $this->userModel = new UserModel($db);
    }

    public function listUser()
    {
        $data = [
            'title' => 'Listeleme',
            'content' => 'Bu sayfada kullanıcılar listeleniyor..'
        ];

        $listUserResult = $this->userModel->listUser();

        if ($listUserResult) {
            require_once __DIR__ . '/../view/user/userList.php';
        } else {
            echo "Listelemede bir hata oluştu.";
        }
    }

    public function addUser()
    {
        $data = [
            'title' => 'Ekleme',
            'content' => 'Bu sayfada kullanıcılar ekleniyor'
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form verilerini alma
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Kullanıcı ekleme işlemini çağırma
            $addUserResult = $this->userModel->addUser($username, $email, $password);

            if ($addUserResult) {
                require_once __DIR__ . '/../view/user/userAdd.php';
                exit;
            } else {
                echo "Kullanıcı eklenirken bir hata oluştu.";
            }
        }
    }

    public function deleteUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
            $userId = $_POST['userId'];

            $deleteResult = $this->userModel->deleteUser($userId);

            if ($deleteResult) {
                header("Location: /PHP_advanced/home/listUser");
                exit();
            } else {
                echo "Silme işlemi başarısız oldu.";
            }
        }
    }

    public function updateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
            $userId = $_POST['userId'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $updateResult = $this->userModel->updateUser($userId, $username, $email, $password);

            if ($updateResult) {
                header("Location: /PHP_advanced/home/listUser");
                exit();
            } else {
                echo "Silme işlemi başarısız oldu.";
            }
        }
    }
}
