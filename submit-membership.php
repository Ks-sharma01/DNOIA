<?php

require_once __DIR__ . "/config/config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: membership-registration.php");
    exit;
}


/*
 Upload Directory
*/

$uploadDir = __DIR__ . "/assets/images/membership/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}


/*
| Helper Function
*/

function clean($value)
{
    return htmlspecialchars(
        trim($value ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );
}


/*
| Basic Information
*/

$legalNameNetwork =
    clean($_POST["legal_name_network"]);

$msoName =
    clean($_POST["mso_name"]);

$organizationType =
    clean($_POST["organization_type"]);

$incorporationDate =
    clean($_POST["incorporation_date"]);

$registrationNo =
    clean($_POST["registration_no"]);

$registeredAddress =
    clean($_POST["registered_address"]);

$city =
    clean($_POST["city"]);

$state =
    clean($_POST["state"]);

$pinCode =
    clean($_POST["pin_code"]);

$telephone =
    clean($_POST["telephone"]);

$organizationEmail =
    clean($_POST["organization_email"]);


/*
| Authorized Representative
*/

$representativeName =
    clean($_POST["representative_name"]);

$fatherName =
    clean($_POST["father_name"]);

$designation =
    clean($_POST["designation"]);

$correspondenceAddress =
    clean($_POST["correspondence_address"]);

$representativeMobile =
    clean($_POST["representative_mobile"]);

$representativeEmail =
    clean($_POST["representative_email"]);


/*
| Business
*/

$businessActivities =
    $_POST["nature_of_business"] ?? [];

$businessActivitiesText =
    implode(", ", $businessActivities);

$otherBusinessActivity =
    clean($_POST["other_business_activity"]);

$operatingStates =
    clean($_POST["operating_states"]);

$operatingAreas =
    clean($_POST["operating_areas"]);

$activeSubscribers =
    clean($_POST["active_subscribers"]);


/*

| Regulatory

*/

$licenseNo =
    clean($_POST["license_no"]);

$licenseIssueDate =
    clean($_POST["license_issue_date"]);

$licenseExpiryDate =
    clean($_POST["license_expiry_date"]);

$gstNo =
    clean($_POST["gst_no"]);

$panNo =
    clean($_POST["pan_no"]);

$aadhaarNo =
    clean($_POST["aadhaar_no"]);

$legalProceeding =
    clean($_POST["legal_proceeding"]);

$legalProceedingDetails =
    clean($_POST["legal_proceeding_details"]);


/*
|--------------------------------------------------------------------------
| Membership
|--------------------------------------------------------------------------
*/

$membershipCategory =
    clean($_POST["membership_category"]);

$otherMembershipCategory =
    clean($_POST["other_membership_category"]);


/*
|--------------------------------------------------------------------------
| Payment
|--------------------------------------------------------------------------
*/

$membershipFee =
    clean($_POST["membership_fee"]);

$gstAmount =
    clean($_POST["gst_amount"]);

$totalAmount =
    clean($_POST["total_amount"]);

$paymentDate =
    clean($_POST["payment_date"]);

$paymentMode =
    clean($_POST["payment_mode"]);

$transactionNo =
    clean($_POST["transaction_no"]);


/*
|--------------------------------------------------------------------------
| Authorized Signatory
|--------------------------------------------------------------------------
*/

$signatoryName =
    clean($_POST["signatory_name"]);

$signatoryDesignation =
    clean($_POST["signatory_designation"]);

$signatoryDate =
    clean($_POST["signatory_date"]);

$signatoryPlace =
    clean($_POST["signatory_place"]);


/*
|--------------------------------------------------------------------------
| Recommendation
|--------------------------------------------------------------------------
*/

$recommendingMso =
    clean($_POST["recommending_mso"]);

$recommendingMembershipNo =
    clean($_POST["recommending_membership_no"]);

$recommendingPerson =
    clean($_POST["recommending_person"]);

$recommendationDate =
    clean($_POST["recommendation_date"]);


/*
|--------------------------------------------------------------------------
| Upload Function
|--------------------------------------------------------------------------
*/

function uploadDocument($fieldName, $uploadDir)
{
    if (
        !isset($_FILES[$fieldName]) ||
        $_FILES[$fieldName]["error"] === UPLOAD_ERR_NO_FILE
    ) {
        return null;
    }

    if ($_FILES[$fieldName]["error"] !== UPLOAD_ERR_OK) {
        return null;
    }

    $allowedExtensions = [
        "pdf",
        "jpg",
        "jpeg",
        "png"
    ];

    $originalName =
        $_FILES[$fieldName]["name"];

    $extension =
        strtolower(
            pathinfo(
                $originalName,
                PATHINFO_EXTENSION
            )
        );

    if (!in_array(
        $extension,
        $allowedExtensions,
        true
    )) {
        return null;
    }


    /*
     * Generate unique filename
     */

    $newName =
        $fieldName . "_" .
        time() . "_" .
        bin2hex(random_bytes(5)) .
        "." .
        $extension;


    $destination =
        $uploadDir . $newName;


    if (
        move_uploaded_file(
            $_FILES[$fieldName]["tmp_name"],
            $destination
        )
    ) {

        return $newName;

    }

    return null;
}


/*
|--------------------------------------------------------------------------
| Upload Documents
|--------------------------------------------------------------------------
*/

$uploadedFiles = [];

$documentFields = [

    "mso_license",
    "incorporation_certificate",
    "pan_card",
    "gst_certificate",
    "aadhaar",
    "moa_aoa",
    "board_resolution",
    "representative_id",
    "office_proof",
    "network_details",
    "other_document",
    "signature",
    "company_seal",
    "recommendation_signature"

];


foreach ($documentFields as $field) {

    $uploadedFiles[$field] =
        uploadDocument(
            $field,
            $uploadDir
        );

}


/*
|--------------------------------------------------------------------------
| Generate Application Number
|--------------------------------------------------------------------------
*/

$applicationNo =
    "DNOAI-" .
    date("Ymd") .
    "-" .
    strtoupper(
        substr(
            bin2hex(random_bytes(4)),
            0,
            6
        )
    );


/*
|--------------------------------------------------------------------------
| Save Data
|--------------------------------------------------------------------------
|
| For now, data is stored in JSON.
| Later you can replace this with MySQL.
|
*/

$data = [

    "application_no" => $applicationNo,

    "organization" => [

        "legal_name_network" => $legalNameNetwork,
        "mso_name" => $msoName,
        "organization_type" => $organizationType,
        "incorporation_date" => $incorporationDate,
        "registration_no" => $registrationNo,
        "registered_address" => $registeredAddress,
        "city" => $city,
        "state" => $state,
        "pin_code" => $pinCode,
        "telephone" => $telephone,
        "email" => $organizationEmail

    ],

    "representative" => [

        "name" => $representativeName,
        "father_name" => $fatherName,
        "designation" => $designation,
        "correspondence_address" =>
            $correspondenceAddress,
        "mobile" => $representativeMobile,
        "email" => $representativeEmail

    ],

    "business" => [

        "activities" => $businessActivities,
        "other_activity" =>
            $otherBusinessActivity,
        "operating_states" =>
            $operatingStates,
        "operating_areas" =>
            $operatingAreas,
        "active_subscribers" =>
            $activeSubscribers

    ],

    "regulatory" => [

        "license_no" => $licenseNo,
        "issue_date" =>
            $licenseIssueDate,
        "expiry_date" =>
            $licenseExpiryDate,
        "gst_no" => $gstNo,
        "pan_no" => $panNo,
        "aadhaar_no" => $aadhaarNo,
        "legal_proceeding" =>
            $legalProceeding,
        "details" =>
            $legalProceedingDetails

    ],

    "membership" => [

        "category" =>
            $membershipCategory,
        "other_category" =>
            $otherMembershipCategory

    ],

    "payment" => [

        "membership_fee" =>
            $membershipFee,
        "gst" => $gstAmount,
        "total_amount" =>
            $totalAmount,
        "payment_date" =>
            $paymentDate,
        "payment_mode" =>
            $paymentMode,
        "transaction_no" =>
            $transactionNo

    ],

    "authorized_signatory" => [

        "name" =>
            $signatoryName,
        "designation" =>
            $signatoryDesignation,
        "date" =>
            $signatoryDate,
        "place" =>
            $signatoryPlace

    ],

    "recommendation" => [

        "mso" =>
            $recommendingMso,
        "membership_no" =>
            $recommendingMembershipNo,
        "person" =>
            $recommendingPerson,
        "date" =>
            $recommendationDate

    ],

    "documents" =>
        $uploadedFiles,

    "submitted_at" =>
        date("Y-m-d H:i:s")

];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ksgamingarena01@gmail.com';
    $mail->Password = 'qijbfnbianemkodb';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
  

    $mail->setFrom('ksgamingarena01@gmail.com', 'Digital Network Operator Association of India (DNOAI)');
    $mail->addAddress('ks009232@gmail.com');
      // Reply-to representative email
    if (!empty($representativeEmail)) {
        $mail->addReplyTo(
            $representativeEmail,
            $representativeName
        );
    }

    $mail->isHTML(true);
    $mail->Subject = 'New DNOAI Membership Application - ' . $applicationNo;
     $mail->Body = "

    <div class='email-wrapper' style='font-family:Arial,sans-serif;
            width:100%;
            max-width:900px;
            margin:0 auto;
            border:1px solid #ddd;
            border-radius:10px;
            overflow:hidden;
            box-sizing:border-box;'>

        <div style='background:#173E76;
                    color:#fff;
                    padding:25px;'>

            <h2 style='margin:0;'>
                New DNOAI Membership Application
            </h2>

            <p style='margin:8px 0 0;'>
                Application No:
                <strong>{$applicationNo}</strong>
            </p>

        </div>


        <div style='padding:25px;'>


            <!-- BASIC INFORMATION -->

            <h3 style='color:#173E76;'>
                Part A - Particulars Of The Applicant
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Legal Name of Network
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$legalNameNetwork}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        MSO Name
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$msoName}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Organization Type
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$organizationType}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Incorporation Date
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$incorporationDate}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Registration No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$registrationNo}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Registered Address
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$registeredAddress}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        City
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$city}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        State
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$state}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        PIN Code
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$pinCode}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Telephone
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$telephone}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Organization Email
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$organizationEmail}
                    </td>
                </tr>

            </table>


            <!-- REPRESENTATIVE -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part B - Authorized Representative
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Name
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$representativeName}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Father's Name
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$fatherName}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Designation
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$designation}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Correspondence Address
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$correspondenceAddress}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Mobile
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$representativeMobile}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Email
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$representativeEmail}
                    </td>
                </tr>

            </table>


            <!-- BUSINESS -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part C - MSO Business Particulars
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Business Activities
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$businessActivitiesText}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Other Business Activity
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$otherBusinessActivity}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Operating States
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$operatingStates}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Operating Areas
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$operatingAreas}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Active Subscribers
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$activeSubscribers}
                    </td>
                </tr>

            </table>


            <!-- REGULATORY -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part D - Regulatory & Licensing Particulars
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        License No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$licenseNo}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        License Issue Date
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$licenseIssueDate}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        License Expiry Date
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$licenseExpiryDate}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        GST No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$gstNo}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        PAN No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$panNo}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Aadhaar No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$aadhaarNo}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Legal Proceeding
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$legalProceeding}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Legal Proceeding Details
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$legalProceedingDetails}
                    </td>
                </tr>

            </table>


            <!-- MEMBERSHIP -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part E - Membership Category
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Membership Category
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$membershipCategory}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Other Membership Category
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$otherMembershipCategory}
                    </td>
                </tr>

            </table>


            <!-- PAYMENT -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part G - Membership Fee
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Membership Fee
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$membershipFee}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        GST Amount
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$gstAmount}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Total Amount
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$totalAmount}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Payment Date
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$paymentDate}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Payment Mode
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$paymentMode}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Transaction No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$transactionNo}
                    </td>
                </tr>

            </table>


            <!-- SIGNATORY -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part H - Declaration & Undertaking
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Name
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$signatoryName}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Designation
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$signatoryDesignation}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Date
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$signatoryDate}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Place
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$signatoryPlace}
                    </td>
                </tr>

            </table>


            <!-- RECOMMENDATION -->

            <h3 style='color:#173E76;margin-top:30px;'>
                Part I - Recommendation / Sponsorship
            </h3>

            <table class='email-table' width='100%'
                   cellpadding='8'
                   cellspacing='0'
                   style='border-collapse:collapse;'>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Recommending MSO
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$recommendingMso}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Membership No.
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$recommendingMembershipNo}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Recommending Person
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$recommendingPerson}
                    </td>
                </tr>

                <tr>
                    <td style='font-weight:bold;border:1px solid #ddd;'>
                        Recommendation Date
                    </td>

                    <td style='border:1px solid #ddd;'>
                        {$recommendationDate}
                    </td>
                </tr>

            </table>


            <div style='margin-top:30px;
                        padding:15px;
                        background:#f5f5f5;
                        border-radius:6px;'>

                <strong>Submitted At:</strong>
                " . date("d-M-Y") . "

            </div>

        </div>

    </div>
    ";

       /*
    |--------------------------------------------------------------------------
    | Attach Uploaded Documents
    |--------------------------------------------------------------------------
    */

    foreach ($uploadedFiles as $field => $fileName) {

        if (!empty($fileName)) {

            $filePath = $uploadDir . $fileName;

            if (file_exists($filePath)) {

                $mail->addAttachment(
                    $filePath,
                    $fileName
                );

            }
        }
    }

    $mail->send();
    $mailSent = true;

    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your form has been submitted successfully.'
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        $mailSent = false,
        'message' => $mail -> ErrorInfo
    ]);
      
}

if($mailSent){
       header(
        "Location: membership-success.php?application=" .
        urlencode($applicationNo)
    );

    exit;
}