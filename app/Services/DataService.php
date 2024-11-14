<?php

namespace App\Services;

class DataService
{
    public static function prepareData()
    {
        return [
            ['ID', 'First Name', 'Last Name', 'Username', 'Email', 'Gender'],
            [1, 'John', 'Doe', 'johndoe', 'john.doe@example.com', 'Male'],
            [2, 'Jane', 'Smith', 'janesmith', 'jane.smith@example.com', 'Female'],
            [3, 'Alice', 'Johnson', 'alicej', 'alice.johnson@example.com', 'Female'],
            [4, 'Bob', 'Brown', 'bobb', 'bob.brown@example.com', 'Male'],
        ];
    }
}
