<?php
// phpinfo();

function getUserData(): array
{
    return [
        // $userData = [$fullname, $username, $password, $email, $roles];
        ['Jane Doe', 'jane_admin', 'kitten', 'jane_admin@symfony.com', ['ROLE_ADMIN']],
        ['Tom Doe', 'tom_admin', 'kitten', 'tom_admin@symfony.com', ['ROLE_ADMIN']],
        ['John Doe', 'john_user', 'kitten', 'john_user@symfony.com', ['ROLE_USER']],
    ];
}

foreach (getUserData() as [$fullname, $username, $password, $email, $roles]) {
    $data[] = [$fullname, $username, $password, $email, $roles];
}
echo "<pre>";
print_r($data);
echo "</pre>";
exit();