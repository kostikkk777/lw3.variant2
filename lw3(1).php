<?php
function groupUsersByRole(array $users): array {
    $result = [];
    foreach ($users as $user) {
        $role = $user['role'];
        $name = $user['name'];
    
        $result[$role][] = $name;
    }
    return $result;
}

$users = [
    ['name' => 'Ivan', 'role' => 'admin'],
    ['name' => 'Petr', 'role' => 'user'],
    ['name' => 'Anna', 'role' => 'admin'],
];

print_r(groupUsersByRole($users));