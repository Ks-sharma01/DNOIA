<?php

$industryUpdates = [
    [
        'date' => '2024-06-01',
        'title' => 'Industry Update 1',
    ],
    [
        'date' => '2024-05-15',
        'title' => 'Industry Update 2',
    ],
    [
        'date' => '2024-04-30',
        'title' => 'Industry Update 3',
    ],
    [
        'date' => '2024-03-20',
        'title' => 'Industry Update 4',
    ],
    [
        'date' => '2024-02-10',
        'title' => 'Industry Update 5',
    ],
    [
        'date' => '2024-01-05',
        'title' => 'Industry Update 6',
    ],
    [
        'date' => '2023-12-15',
        'title' => 'Industry Update 7',
    ],
    [
        'date' => '2023-11-30',
        'title' => 'Industry Update 8',
    ],
    [
        'date' => '2023-10-20',
        'title' => 'Industry Update 9',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 10',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 11',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 12',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 13',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 14',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 15',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 16',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 17',
    ],
    [
        'date' => '2023-09-10',
        'title' => 'Industry Update 18',
    ],
];

// Pagination settings

$itemsPerPage = 10;

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($currentPage < 1) {
    $currentPage = 1;
}

$totalItems = count($industryUpdates);

$totalPages = ceil($totalItems / $itemsPerPage);

$startIndex = ($currentPage - 1) * $itemsPerPage;

$currentIndustryUpdates = array_slice($industryUpdates, $startIndex, $itemsPerPage);


?>