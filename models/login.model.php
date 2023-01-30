<?php 
function getUser() : array
{
    global $connection;
    $statement = $connection -> prepare('select * from users');
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getEmail(string $email):string
{
    global $connection;
    $statement = $connection -> prepare('select email_address from users where email_address = :email');
    $statement -> execute([
        ":email" => $email
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
