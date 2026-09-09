<?php

$news_media = [
    [
        "date" => "06-Jul-26",
        "title" => "The Digital Network Operators Association of India (DNOAI) continues to work towards creating a stronger and more collaborative ecosystem for digital network operators."
    ],
    [
        "date" => "06-Jul-26",
        "title" => "Through industry engagement, knowledge sharing, and collective representation, DNOAI aims to support operators in navigating the evolving digital landscape."
    ],
    [
        "date" => "25-Jul-26",
        "title" => "Stay connected with DNOAI for the latest industry news, announcements, events, and updates."
    ],
    [
        "date" => "19-Jul-26",
        "title" => "Digital network operators are at the heart of India’s connected future. DNOAI is committed to bringing industry stakeholders together to address emerging challenges, share knowledge, and promote sustainable growth."
    ],
];

$industry_updates = [
    [
        "date" => "03-Jul-26",
        "title" => "India’s Digital Network Ecosystem Continues to Expand"
    ],
    [
        "date" => "24-Jul-26",
        "title" => "Driving Innovation in Digital Connectivity"
    ],
    [
        "date" => "23-Jul-26",
        "title" => "Empowering Network Operators Through Collaboration"
    ],
    [
        "date" => "03-Jul-26",
        "title" => "Towards a Future-Ready Digital Network Industry"
    ],
];

$press_releases = [
    [

        "date" => "27-Aug-26",
        "title" => "DNOAI Announces Commitment to Strengthening India’s Digital Network Industry"
    ],
    [
        "date" => "18-Jul-26",
        "title" => "DNOAI Calls for Greater Collaboration Across the Digital Network Ecosystem"
    ],
    [
        "date" => "17-Jun-26",
        "title" => "DNOAI Strengthens Its Focus on a Future-Ready Digital Connectivity Ecosystem"
    ],
    [
        "date" => "09-Jun-26",
        "title" => "DNOAI seeks to contribute to the development of a stronger, more connected, and sustainable digital ecosystem."
    ],
];

$consultation_Papers_Recos = [
    [

        "date" => "27-Aug-25",
        "title" => "Recommendations for Strengthening India’s Digital Network Infrastructure",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "18-Jul-25",
        "title" => "Industry Perspectives on Emerging Digital Connectivity Regulations",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "17-Jun-25",
        "title" => "Promoting a Supportive Policy Environment for Network Operators",
        "remark" => "Regulatory Framework"
    ],
    [
        "date" => "09-Jun-25",
        "title" => "Building a Future-Ready Digital Network Ecosystem",
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

        "name" => "Axom Communications & Cable Private Limited",
        "link" => "https://axom.co.in/"
    ],
    [
        "name" => "DDC CATV Network Pvt. Ltd",
        "link" => "https://www.ddccatv.com/"
    ],
  
    [
        "name" => "Siti Networks Limited",
        "link" => "https://www.sitinetworks.com/"
    ],
    [
        "name" => "Rajasthan Infotech Media Services Private Limited",
        "link" => "https://rajasthaninfotech.in/"
    ],
   
];