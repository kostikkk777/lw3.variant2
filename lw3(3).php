<?php
function mergeUnique(array $a, array $b): array {
    $result = $a; 

    foreach ($b as $valB) {
        $exists = false;
        foreach ($result as $valRes) {
            if ($valB === $valRes) {
                $exists = true;
                break;
            }
        }
        if (!$exists) {
            $result[] = $valB;
        }
    }
    return $result;
}


$array1 = [1, 5, 8, 12, 20];
$array2 = [3, 5, 7, 12, 25];

echo "Результат задачи №3:\n";
print_r(mergeUnique($array1, $array2));