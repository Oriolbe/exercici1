<?php
$array = [23, 34];
function sum(array $arguments)
{
    if (is_array($arguments)) {
        for ($i = 0; $i < count($arguments); $i++) {
            $result += $arguments[$i];
        }
        return $result;
    }
    return null;
}
