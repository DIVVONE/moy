<?php
$connection = mysqli_connect('localhost', 'id11931656_user', 'lalka', 'id11931656_users') or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = 'Вы не ввели Логин';
    }       
    elseif (empty($_POST['password'])) 
    {
        $info_reg = 'Вы не ввели пароль';
    }                      
    else 
    {
        $login = $_POST['login'];            
        $password = $_POST['password'];
  
        $query = "INSERT INTO users_data (login, password)
        VALUES ('$login', '$password')";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    
        $info_reg = 'Вы успешно зарегистрировались!';

    }
}

echo $info_reg;
?>