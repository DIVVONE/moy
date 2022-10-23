<?php
$connection = mysqli_connect('localhost', 'id11931656_user', 'lalka', 'id11931656_users') or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_input = 'Вы не ввели логин';
    }
    elseif (empty($_POST['password'])) 
    {
        $info_input = 'Вы не ввели пароль';
    }
    else 
    {    
        $login = $_POST['login'];
        $password = $_POST['password'];            
        $user = mysqli_query($connection, "SELECT `user_id` FROM `users_data` WHERE `user_login` = '$login' AND `user_passwd` = '$password'");
        $id_user = mysqli_fetch_array($user);
                
        if (empty($id_user['id'])) 
        {
            $info_input = 'Введенные данные не верны';
        }
        else 
        {
            $_SESSION['password'] = $password; 
            $_SESSION['login'] = $login; 
            $_SESSION['id'] = $id_user['id']; 

            $info_input = 'Вы успешно вошли в систему';         
        }     
    }
}
        
$info_input = isset($info_input) ? $info_input : NULL;
echo $info_input;
?>