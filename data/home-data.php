<?php

$news_media = [
    [
        "date" => "06-Apr-26",
        "title" => "TRAI aims to regulate free ad-supported streaming TV (FAST) apps like Samsung TV Plus"
    ],
    [
        "date" => "06-Apr-26",
        "title" => "MSOs back TRAI move to regulate FAST platforms, seek level playing field"
    ],
    [
        "date" => "25-Mar-26",
        "title" => "TDSAT issues notice to Prasar Bharati over WAVES OTT onboarding row"
    ],
    [
        "date" => "19-Mar-26",
        "title" => "EXCLUSIVE: Cable operators move TDSAT against Prasar Bharati's WAVES OTT onboarding"
    ],
];

$industry_updates = [
    [
        "date" => "03-Apr-26",
        "title" => "Prasar Bharati Annual Report 2024-2025"
    ],
    [
        "date" => "24-Mar-26",
        "title" => "EY-FICCI Report on Media and Entertainment 2026"
    ],
    [
        "date" => "23-Mar-26",
        "title" => "An empirical assessment of Regulatory Design and Consumer Experience in Indian Broadcasting : Esya Centre"
    ],
    [
        "date" => "03-Mar-26",
        "title" => "The Indian Telecom Services Performance Indicators by TRAI"
    ],
];

$press_releases = [
    [

        "date" => "27-Aug-25",
        "title" => "AIDCF Urges Government to Reduce GST Slab from 18% to 5% for Cable TV"
    ],
    [
        "date" => "18-Jul-25",
        "title" => "AIDCF Calls on MIB to Reject TRAI's Proposal on DTH License Fee Reduction"
    ],
    [
        "date" => "17-Jun-25",
        "title" => "AIDCF Elects New Leadership: Mr. Anirudhsinh Jadeja as President, Mr. Sankaranarayana as Vice President, Mr. Sanjay Goyal as Treasurer"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "AIDCF Releases Landmark Report on the State of Cable"
    ],
];

$consultation_Papers_Recos = [
    [

        "date" => "27-Aug-25",
        "title" => "Recommendations on Framework for Service Authorisations for provision of Broadcasting Services under the Telecommunications Act, 2023",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "18-Jul-25",
        "title" => "Recommendations on Regulatory framework for Ground-based Broadcasters",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "17-Jun-25",
        "title" => "Consultation Paper on Framework for Service Authorisations for provision of Broadcasting Services under the Telecommunications Act, 2023",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Recommendations on the Framework for Service Authorisations to be Granted Under the Telecommunications Act, 2023",
        "remark" => "Interconnection"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "TV Broadcasters"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "National Broadcasting Policy"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "National Broadcasting Policy"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "National Broadcasting Policy"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "National Broadcasting Policy"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "National Broadcasting Policy"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Consultation paper on Regulatory framework for Ground-based Broadcasters",
        "remark" => "National Broadcasting Policy"
    ]
];



// Pagination settings

$itemsPerPage = 10;

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($currentPage < 1) {
    $currentPage = 1;
}

$totalItems = count($consultation_Papers_Recos);

$totalPages = ceil($totalItems / $itemsPerPage);

$startIndex = ($currentPage - 1) * $itemsPerPage;

$currentConsultationPapers = array_slice($consultation_Papers_Recos, $startIndex, $itemsPerPage);



$rules_Regulations = [
    [

        "date" => "27-Aug-25",
        "title" => "Recommendations on Framework for Service Authorisations for provision of Broadcasting Services under the Telecommunications Act, 2023",
        "remark" => "Upto the 4th amendment of 08 July 2024",
    ],
    [
        "date" => "18-Jul-25",
        "title" => "Recommendations on Regulatory framework for Ground-based Broadcasters",
        "remark" => "Upto the 6th amendment of 08 July 2024",
    ],
    [
        "date" => "17-Jun-25",
        "title" => "Consultation Paper on Framework for Service Authorisations for provision of Broadcasting Services under the Telecommunications Act, 2023",
        "remark" => "Upto the 4th amendment of 08 July 2024",
    ],
    [
        "date" => "09-Jun-25",
        "title" => "The Telecommunication (Broadcasting and Cable) Services Standards of Quality of Service and Consumer Protection (Addressable Systems) Regulations, 2017",
        "remark" => "Released on 30 November 2022",
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Guidelines for Platform Services offered by Multi System Operators",
        "remark" => "Released on 30 November 2022",
    ],
    [
        "date" => "09-Jun-25",
        "title" => "The Information Technology (Intermediary Guidelines and Digital Media Ethics Code) Rules, 2021",
        "remark" => "Updated as on 06 April 2023",
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Guidelines for obtaining License for Providing Direct-To-Home (DTH) Broadcasting Services in lndia",
        "remark" => "Updated as on 06 April 2023",

    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Operational Guidelines for Direct-To-Home (DTH) Broadcasting Services in India",
        "remark" => "DTH"
    ],
];

// Pagination settings for rules and regulations

$itemsPerPage = 10;

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($currentPage < 1) {
    $currentPage = 1;
}

$totalItems = count($rules_Regulations);

$totalPages = ceil($totalItems / $itemsPerPage);

$startIndex = ($currentPage - 1) * $itemsPerPage;

$currentRules_Regulations = array_slice($rules_Regulations, $startIndex, $itemsPerPage);



$websites_Links = [
    [

        "name" => "Ministry of Information and Broadcasting",
        "link" => "https://mib.gov.in/"
    ],
    [
        "name" => "Telecom Regulatory Authority of India",
        "link" => "https://trai.gov.in/"
    ],
    [
        "name" => "Telecom Disputes Settlement & Appellate Tribunal",
        "link" => "https://tdsat.gov.in/Delhi/Delhi.php"
    ],
    [
        "name" => "Prasar Bharati",
        "link" => "https://prasarbharati.gov.in/"
    ],
    [
        "name" => "Press Information Bureau",
        "link" => "https://pib.gov.in/"
    ],
    [
        "name" => "News Broadcasters & Digital Association",
        "link" => "https://www.nbdanewdelhi.com/"
    ],
    [
        "name" => "Indian Broadcasting and Digital Foundation",
        "link" => "https://www.ibdf.com/"
    ],
    [
        "name" => "Broadcast Seva",
        "link" => "https://new.broadcastseva.gov.in/digigov-portal-web-app/"
    ],
];