<?php

$news_info = [
    [
        "image" => "assets/images/truTv_iptv.jpg",
        "heading" => "India’s Digital Network Ecosystem Continues to Expand",
        "date" => "06-Apr-26",
        "description" => "The Digital Network Operators Association of India (DNOAI) continues to work towards creating a stronger and more collaborative…",
        "link" => ""
    ],
    [
        "image" => "assets/images/truTv_iptv.jpg",
        "heading" => "DNOAI Empowering Network Operators Through Collaboration",
        "date" => "06-Apr-26",
        "description" => "Digital Network Operator Association of India said the consultation paper comprehensively captures the concerns raised…",
        "link" => ""
    ],
    [
        "image" => "assets/images/truTv_iptv.jpg",
        "heading" => "DNOAI Calls for Greater Collaboration Across the Digital Network Ecosystem",
        "date" => "19-Mar-26",
        "description" => "The battle between traditional television distributors and digital platforms has found its way to the courts, with the All India…",
        "link" => "https://www.medianama.com/2026/03/225-dnoia-moves-tdsat-over-waves-plan-to-stream-linear-tv-channels/"
    ],
    [
        "image" => "assets/images/truTv_iptv.jpg",
        "heading" => "DNOAI Strengthens Its Focus on a Future-Ready Digital Connectivity Ecosystem",
        "date" => "25-Mar-26",
        "description" => "DNOAI seeks to encourage constructive dialogue on the development of a robust and sustainable digital network ecosystem…",
        "link" => "https://www.medianama.com/2026/03/226-tdsat-issues-notice-to-prasar-bharati-over-waves-ott-onboarding-row/"
    ],
    [
        "image" => "assets/images/truTv_iptv.jpg",
        "heading" => "DNOAI seeks to contribute to the development of a stronger, more connected",
        "date" => "19-Mar-26",
        "description" => "Digital Network Operator Association of India (DNOAI), an industry body representing multi-system operators (MSOs)…",
        "link" => "https://www.medianama.com/2026/03/227-cable-operators-move-tdsat-against-prasar-bharatis-waves-ott/"
    ],
    [
        "image" => "assets/images/truTv_iptv.jpg",
        "heading" => "Cable Industry in limbo as Government stays silent on AGR burden",
        "date" => "25-Feb-26",
        "description" => "In its July representation, DNOAI, which represents leading Multi System Operators reaching over 4.5 crore…",
        "link" => "https://www.medianama.com/2026/02/228-cable-industry-in-limbo-as-government-stays-silent-on-agr-burden/"
        
    ],
];

// Number of news items per page
$itemsPerPage = 10;

// Current page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($currentPage < 1) {
    $currentPage = 1;
}

// Total items
$totalItems = count($news_info);

// Total pages
$totalPages = ceil($totalItems / $itemsPerPage);

// Starting position
$startIndex = ($currentPage - 1) * $itemsPerPage;

// Get only 10 items for current page
$currentNews = array_slice($news_info, $startIndex, $itemsPerPage);


$press_Releases = [
    [
        'date' => '2024-06-15',
        'title' => 'DNOIA Press Release 1',
    ],
    [
        'date' => '2024-03-16',
        'title' => 'DNOIA Press Release 2',
    ],
    [
        'date' => '2024-01-10',
        'title' => 'DNOIA Press Release 3',
    ],
    [
        'date' => '2023-11-05',
        'title' => 'DNOIA Press Release 4',
    ],
    [
        'date' => '2023-09-20',
        'title' => 'DNOIA Press Release 5',
    ],
    [
        'date' => '2023-07-15',
        'title' => 'DNOIA Press Release 6',
    ],
    [
        'date' => '2023-05-10',
        'title' => 'DNOIA Press Release 7',
    ],
    [
        'date' => '2023-03-05',
        'title' => 'DNOIA Press Release 8',
    ],
    [
        'date' => '2023-01-01',
        'title' => 'DNOIA Press Release 9',
    ],
    [
        'date' => '2022-11-20',
        'title' => 'DNOIA Press Release 10',
    ]
];