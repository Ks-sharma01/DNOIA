<?php
require_once __DIR__ . '/config/config.php';

require_once __DIR__ . '/includes/header.php';

?>



<div class="container py-5">

    <div class="membership-wrapper">

        <!-- Header -->
        <div class="text-center mb-4">
            <h2 class="fw-bold">Membership Registration Form</h2>
            <p class="text-muted">
                Digital Network Operators Association of India
            </p>
        </div>

        <!-- Progress -->
        <div class="progress-wrapper mb-5">

            <div class="progress" style="height: 6px;">
                <div
                    class="progress-bar"
                    id="progressBar"
                    style="width: 11%;">
                </div>
            </div>

            <div class="steps">

                <div class="step active">
                    <span>1</span>
                    <small>Organization</small>
                </div>

                <div class="step">
                    <span>2</span>
                    <small>Representative</small>
                </div>

                <div class="step">
                    <span>3</span>
                    <small>Business</small>
                </div>

                <div class="step">
                    <span>4</span>
                    <small>Regulatory</small>
                </div>

                <div class="step">
                    <span>5</span>
                    <small>Category</small>
                </div>

                <div class="step">
                    <span>6</span>
                    <small>Documents</small>
                </div>

                <div class="step">
                    <span>7</span>
                    <small>Payment</small>
                </div>

                <div class="step">
                    <span>8</span>
                    <small>Declaration</small>
                </div>

                <div class="step">
                    <span>9</span>
                    <small>Recommendation</small>
                </div>

            </div>
        </div>


        <form
            id="membershipForm"
            action="submit-membership.php"
            method="POST"
            enctype="multipart/form-data" novalidate>

            <!-- ================= STEP 1 ================= -->
            <div class="form-step active">

                <div class="form-card">

                    <h4>Part A – Particulars of the Applicant</h4>
                    <p class="text-muted">
                        Organization / MSO Details
                    </p>

                    <hr>

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label class="form-label">
                                Legal Name of Network <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                id="legal_name_network"
                                name="legal_name_network"
                                class="form-control"
                                required>
                            <span class="text-danger" id="legal_name_network_err"></span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                Name of MSO <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                id="mso_name"
                                name="mso_name"
                                class="form-control"
                                required>
                            <span class="text-danger" id="mso_name_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Constitution of Organization <span class="text-danger">*</span>
                            </label>

                            <select
                                name="organization_type" id="organization_type"
                                class="form-select"
                                required>
                                <option value="">Select</option>
                                <option value="Company">Company</option>
                                <option value="LLP">LLP</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Proprietorship">
                                    Proprietorship
                                </option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="text-danger" id="organization_type_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Date of Incorporation / Constitution <span class="text-danger">*</span>
                            </label>

                            <input
                                type="date" id="incorporation_date"
                                name="incorporation_date"
                                class="form-control">
                            <span class="text-danger" id="incorporation_date_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                CIN / LLPIN / Registration No.(if applicable)
                            </label>

                            <input
                                type="text"
                                name="registration_no"
                                class="form-control">

                        </div>

                        <div class="col-12">

                            <label class="form-label">
                                Registered / Principal Office Address <span class="text-danger">*</span>
                            </label>

                            <textarea
                                name="registered_address" id="registered_address"
                                class="form-control"
                                rows="3"
                                required></textarea>
                            <span class="text-danger" id="registered_address_err"></span>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">
                                City <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="city" id="city"
                                class="form-control"
                                required>
                            <span class="text-danger" id="city_err"></span>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">
                                State <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="state" id="state"
                                class="form-control"
                                required>
                            <span class="text-danger" id="state_err"></span>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">
                                PIN Code <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="pin_code" id="pin_code"
                                maxlength="6"
                                class="form-control"
                                required>
                            <span class="text-danger" id="pin_code_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Telephone <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="telephone" id="telephone"
                                class="form-control">
                            <span class="text-danger" id="telephone_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="organization_email" id="email"
                                class="form-control"
                                required>
                            <span class="text-danger" id="email_err"></span>
                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= STEP 2 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part B – Authorized Representative</h4>

                    <p class="text-muted">
                        Details of person authorized to represent the MSO before DNOAI
                    </p>

                    <hr>

                    <div class="row g-4">

                        <div class="col-md-6">

                            <label class="form-label">
                                Name <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="representative_name" id="representative_name"
                                class="form-control"
                                required>
                            <span class="text-danger" id="representative_name_err"></span>
                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Father's Name <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="father_name" id="father_name"
                                class="form-control">
                            <span class="text-danger" id="father_name_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Designation <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="designation" id="designation"
                                class="form-control"
                                required>
                            <span class="text-danger" id="designation_err"></span>

                        </div>

                        <div class="col-12">

                            <label class="form-label">
                                Correspondence Address <span class="text-danger">*</span>
                            </label>

                            <textarea
                                name="correspondence_address"
                                class="form-control" id="correspondence_address"
                                rows="3"
                                required></textarea>
                            <span class="text-danger" id="correspondence_address_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Mobile <span class="text-danger">*</span>
                            </label>

                            <input
                                type="tel"
                                name="representative_mobile"
                                class="form-control" id="representative_mobile"
                                maxlength="10"
                                pattern="[0-9]{10}"
                                required>
                            <span class="text-danger" id="representative_mobile_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Email <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                name="representative_email" id="representative_email"
                                class="form-control">
                            <span class="text-danger" id="representative_email_err"></span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= STEP 3 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part C – MSO Business Particulars</h4>

                    <hr>

                    <h5 class="font-semibold">Nature of Business <span class="text-danger">*</span></h5>
                    <span>Please tick the applicable activities:</span>

                    <div class="row mt-3">

                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="nature_of_business[]" id="mso"
                                    value="Multi-System Operator"
                                    class="form-check-input business-checkbox">
                                <label class="form-check-label" for="mso">
                                    Multi-System Operator (MSO)
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="nature_of_business[]" id="cableTv"
                                    value="Cable TV Distribution"
                                    class="form-check-input business-checkbox">
                                <label class="form-check-label" for="cableTv">
                                    Cable TV Distribution
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="nature_of_business[]" id="broadband"
                                    value="Broadband / Internet Services"
                                    class="form-check-input business-checkbox">
                                <label class="form-check-label" for="broadband">
                                    Broadband / Internet Services
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="nature_of_business[]"
                                    value="IPTV / Digital Services" id="iptv"
                                    class="form-check-input business-checkbox">
                                <label class="form-check-label" for="iptv">
                                    IPTV / Digital Services
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="nature_of_business[]" id="contentDistribution"
                                    value="Content Distribution"
                                    class="form-check-input business-checkbox">
                                <label class="form-check-label" for="contentDistribution">
                                    Content Distribution
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="nature_of_business[]"
                                    value="Other Related Activities" id="otherActivities"
                                    class="form-check-input business-checkbox">
                                <label class="form-check-label" for="otherActivities">
                                    Other Related Activities
                                </label>
                            </div>
                        </div>

                        <span id="natureOfBusiness_err" class="text-danger"></span>

                    </div>


                    <!-- <hr class="my-4"> -->


                    <h5 class="mt-4">Area of Operation</h5>

                    <div class="row g-4">

                        <div class="col-12">

                            <label class="form-label">
                                State(s) in which the MSO operates <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="operating_states" id="operating_states"
                                class="form-control" placeholder="Enter comma separated..">
                            <span class="text-danger" id="operating_states_err"></span>
                        </div>

                        <div class="col-12">

                            <label class="form-label">
                                Districts / Cities / Areas Covered <span class="text-danger">*</span>
                            </label>

                            <textarea
                                name="operating_areas"
                                class="form-control" id="operating_areas"
                                rows="3" placeholder="Enter comma separated.."></textarea>
                            <span class="text-danger" id="operating_areas_err"></span>
                        </div>

                        <div class="col-md-6">
                            <h5 class="mt-2">Network / Subscriber Details:</h5>

                            <label class="form-label">
                                Active Subscribers (Approx.) <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="active_subscribers" id="active_subscribers"
                                class="form-control"
                                min="0"
                                required>
                            <span class="text-danger" id="active_subscribers_err"></span>
                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= STEP 4 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part D – Regulatory & Licensing Particulars</h4>

                    <hr>

                    <h5 class="mt-2">MSO Registration / Permission / Licence Details</h5>
                    <div class="row g-2">

                        <div class="col-md-6">

                            <label class="form-label">
                                License No. <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="license_no" id="license_no"
                                class="form-control">
                            <span class="text-danger" id="license_no_err"></span>
                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Issue Date <span class="text-danger">*</span>
                            </label>

                            <input
                                type="date"
                                name="license_issue_date" id="license_issue_date"
                                class="form-control">
                            <span class="text-danger" id="license_issue_date_err"></span>
                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Expiry Date <span class="text-danger">*</span>
                            </label>

                            <input
                                type="date"
                                name="license_expiry_date" id="license_expiry_date"
                                class="form-control">
                            <span class="text-danger" id="license_expiry_date_err"></span>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                GST No. <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="gst_no" id="gst_no"
                                class="form-control">
                            <span class="text-danger" id="gst_no_err"></span>
                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                PAN No. <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="pan_no" id="pan_no"
                                class="form-control"
                                maxlength="10">
                            <span class="text-danger" id="pan_no_err"></span>
                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Aadhaar No. <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="aadhaar_no" id="aadhaar_no"
                                class="form-control"
                                maxlength="12">
                            <span class="text-danger" id="aadhaar_no_err"></span>
                        </div>

                    </div>


                    <hr class="my-4">

                    <h5>
                        Regulatory / Legal Proceedings
                    </h5>

                    <p class="text-muted small">
                        Is the applicant presently involved in any material
                        proceeding, dispute, show-cause notice or regulatory
                        action relating to its MSO / broadcasting / distribution
                        business?
                    </p>

                    <div class="d-flex gap-4">

                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="legal_proceeding" id="legal_proceeding_no"
                                value="No">
                            <label class="form-check-label" for="legal_proceeding_no">
                                No
                            </label>
                        </div>

                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="legal_proceeding" id="legal_proceeding_yes"
                                value="Yes">
                            <label class="form-check-label" for="legal_proceeding_yes">
                                Yes
                            </label>
                        </div>
                    </div>
                    <span class="text-danger" id="legal_proceeding_err"></span>

                    <div class="mt-3">

                        <label class="form-label">
                            If Yes, provide brief particulars
                        </label>

                        <textarea
                            name="legal_proceeding_details"
                            class="form-control" id="legal_proceeding_details"
                            rows="4"></textarea>
                        <span class="text-danger" id="legal_proceeding_details_err"></span>
                    </div>

                </div>

            </div>


            <!-- ================= STEP 5 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part E – Membership Category</h4>

                    <p class="text-muted">
                        Select the category under which you seek admission <span class="text-danger">*</span>
                    </p>

                    <hr>

                    <div class="membership-options">

                        <label class="membership-option">

                            <input
                                type="radio"
                                name="membership_category"
                                value="MSO Member"
                                required>

                            <div>
                                <strong>MSO Member</strong>
                                <small>
                                    Membership for Multi-System Operators
                                </small>
                            </div>

                        </label>


                        <label class="membership-option">

                            <input
                                type="radio"
                                name="membership_category"
                                value="Associate">

                            <div>
                                <strong>Associate</strong>
                                <small>
                                    Associate membership category
                                </small>
                            </div>

                        </label>


                        <label class="membership-option">

                            <input
                                type="radio"
                                name="membership_category"
                                value="Other">

                            <div>
                                <strong>Other Category</strong>
                            </div>

                        </label>

                    </div>

                    <span class="text-danger" id="membership_category_err"></span>
                    <div class="mt-4">

                        <label class="form-label">
                            Other Category
                        </label>

                        <input
                            type="text" id="other_membership_category"
                            name="other_membership_category"
                            class="form-control">
                        <span class="text-danger" id="other_membership_category_err"></span>
                    </div>

                </div>

            </div>


            <!-- ================= STEP 6 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part F – Documents Enclosed</h4>

                    <p class="text-muted">
                        Upload the applicable documents
                    </p>

                    <hr>

                    <?php
                    $documents = [
                        "mso_license" => "MSO License",
                        "incorporation_certificate" =>
                        "Certificate of Incorporation / Registration",
                        "pan_card" => "PAN Card",
                        "gst_certificate" => "GST Registration Certificate",
                        "aadhaar" => "Aadhaar",
                        "moa_aoa" =>
                        "Memorandum & Articles of Association / Constitution Documents",
                        "board_resolution" =>
                        "Board Resolution / Authorisation Letter",
                        "representative_id" =>
                        "Authorised Representative's ID / Contact Details",
                        "office_proof" =>
                        "Proof of Registered Office",
                        "network_details" =>
                        "Details of Network / Operational Area",
                        "other_document" =>
                        "Any Other Document Required by DNOAI"
                    ];

                    foreach ($documents as $name => $label):
                    ?>

                        <div class="document-row">

                            <div>
                                <strong>
                                    <?= htmlspecialchars($label) ?> <span class="text-danger">*</span>
                                </strong>
                            </div>

                            <div>
                                <input
                                    type="file"
                                    name="<?= $name ?>" id="<?= $name ?>"
                                    class="form-control document-input"
                                    accept=".pdf,.jpg,.jpeg,.png">
                                <span class="text-danger" id="<?= $name ?>_err"></span>
                            </div>

                        </div>

                    <?php endforeach; ?>

                    <div class="alert alert-info mt-4">
                        Accepted formats: PDF, JPG, JPEG and PNG.(Maximum size: 2 MB)
                    </div>

                </div>

            </div>


            <!-- ================= STEP 7 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part G – Membership Fee</h4>

                    <hr>

                    <div class="row g-4">

                        <!-- BANK DETAILS -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">

                                    <h5 class="mb-3">
                                        <i class="bi bi-bank me-2"></i>
                                        Bank Details
                                    </h5>

                                    <div class="alert alert-info mb-4">
                                        <strong>Payment Information:</strong>
                                        Please use the following bank details for membership fee payment.
                                    </div>

                                    <div class="row g-3">

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">
                                                Account Name
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="Digital Network Operators Association of India"
                                                readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">
                                                Bank Name
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="State Bank of India"
                                                readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">
                                                Account Number
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="1234567XXXXXXX"
                                                readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">
                                                IFSC Code
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="SBIN000XXXX"
                                                readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">
                                                Branch
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="New Delhi Main Branch"
                                                readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">
                                                Account Type
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="Current Account"
                                                readonly>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- PAYMENT DETAILS -->
                        <div class="col-12">

                            <h5 class="mb-3">
                                Payment Details
                            </h5>

                            <div class="row g-4">

                                <div class="col-md-4">

                                    <label class="form-label">
                                        Membership Fee
                                    </label>

                                    <input
                                        type="number"
                                        name="membership_fee"
                                        id="membership_fee"
                                        class="form-control"
                                        min="0"
                                        step="0.01">

                                </div>


                                <div class="col-md-4">

                                    <label class="form-label">
                                        GST
                                    </label>

                                    <input
                                        type="number"
                                        name="gst_amount"
                                        id="gst_amount"
                                        class="form-control"
                                        min="0"
                                        step="0.01">

                                </div>


                                <div class="col-md-4">

                                    <label class="form-label">
                                        Total Amount
                                    </label>

                                    <input
                                        type="number"
                                        name="total_amount"
                                        id="total_amount"
                                        class="form-control fw-bold"
                                        min="0"
                                        step="0.01"
                                        readonly>

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Date of Payment
                                    </label>

                                    <input
                                        type="date"
                                        name="payment_date"
                                        class="form-control">

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Payment Mode
                                    </label>

                                    <select
                                        name="payment_mode"
                                        class="form-select">

                                        <option value="">
                                            Select Payment Mode
                                        </option>

                                        <option value="NEFT / RTGS">
                                            NEFT / RTGS
                                        </option>

                                        <option value="Cheque">
                                            Cheque
                                        </option>

                                        <option value="Online Transfer">
                                            Online Transfer
                                        </option>

                                        <option value="Other">
                                            Other
                                        </option>

                                    </select>

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Transaction / Cheque No.
                                    </label>

                                    <input
                                        type="text"
                                        name="transaction_no"
                                        class="form-control">

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= STEP 8 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part H – Declaration & Undertaking</h4>

                    <hr>

                    <div class="declaration-box">

                        <p>
                            I / We hereby apply for membership of
                            <strong>DNOAI – Association of MSOs</strong>
                            and confirm that the information furnished in this
                            application and the documents submitted along with it
                            are true and correct to the best of my / our knowledge
                            and belief.
                        </p>

                        <p>
                            I / We further confirm that I / We are / am operating
                            the business in accordance with applicable laws,
                            regulations, directions and orders of competent
                            authorities.
                        </p>

                        <p>
                            I / We have read and understood all the governing
                            documents, membership rules and bye-laws of DNOAI,
                            as amended from time to time.
                        </p>

                        <p class="fw-semibold">
                            I / We undertake to:
                        </p>

                        <ol>
                            <li class="mb-2">
                                Abide by the Memorandum, Articles, Rules, Regulations,
                                Bye-Laws and policies of DNOAI.
                            </li>

                            <li class="mb-2">
                                Comply with the decisions of the competent governing
                                body of DNOAI.
                            </li>

                            <li class="mb-2">
                                Provide information and documents as may reasonably
                                be required by DNOAI.
                            </li>

                            <li class="mb-2">
                                Promptly inform DNOAI of any material change in the
                                information furnished.
                            </li>

                            <li class="mb-2">
                                Conduct the business in accordance with applicable
                                laws and regulatory requirements.
                            </li>

                            <li class="mb-2">
                                Maintain the professional integrity and reputation
                                expected of a member of DNOAI.
                            </li>

                            <li class="mb-2">
                                Pay membership fees, subscriptions and other lawful
                                dues within the prescribed time.
                            </li>

                            <li>
                                Understand that admission to membership is subject
                                to approval by the competent authority of DNOAI.
                            </li>
                        </ol>

                    </div>


                    <!-- Declaration -->
                    <div class="form-check mt-4">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="declaration"
                            value="1"
                            id="declaration">

                        <label class="form-check-label" for="declaration">
                            I / We agree to the above declaration and undertaking.
                            <span class="text-danger">*</span>
                        </label>

                        <div
                            id="declaration_err"
                            class="text-danger mt-1">
                        </div>

                    </div>


                    <hr class="my-4">


                    <h5>Authorized Signatory</h5>


                    <div class="row g-4 mt-1">

                        <!-- Name -->
                        <div class="col-md-6">

                            <label for="signatory_name" class="form-label">
                                Name <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="signatory_name"
                                id="signatory_name"
                                class="form-control"
                                maxlength="100"
                                autocomplete="name"
                                required>

                            <div
                                id="signatory_name_err"
                                class="text-danger mt-1">
                            </div>

                        </div>


                        <!-- Designation -->
                        <div class="col-md-6">

                            <label for="signatory_designation" class="form-label">
                                Designation <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="signatory_designation"
                                id="signatory_designation"
                                class="form-control"
                                maxlength="100"
                                required>

                            <div
                                id="signatory_designation_err"
                                class="text-danger mt-1">
                            </div>

                        </div>


                        <!-- Signature -->
                        <div class="col-md-6">

                            <label for="signature" class="form-label">
                                Signature <span class="text-danger">*</span>
                            </label>

                            <input
                                type="file"
                                name="signature"
                                id="signature"
                                class="form-control"
                                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                required>

                            <div class="form-text">
                                JPG or PNG only. Maximum size: 2 MB.
                            </div>

                            <div
                                id="signature_err"
                                class="text-danger mt-1">
                            </div>

                        </div>


                        <!-- Date -->
                        <div class="col-md-3">

                            <label for="signatory_date" class="form-label">
                                Date <span class="text-danger">*</span>
                            </label>

                            <input
                                type="date"
                                name="signatory_date"
                                id="signatory_date"
                                class="form-control"
                                required>

                            <div
                                id="signatory_date_err"
                                class="text-danger mt-1">
                            </div>

                        </div>


                        <!-- Place -->
                        <div class="col-md-3">

                            <label for="signatory_place" class="form-label">
                                Place <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                name="signatory_place"
                                id="signatory_place"
                                class="form-control"
                                maxlength="100"
                                required>

                            <div
                                id="signatory_place_err"
                                class="text-danger mt-1">
                            </div>

                        </div>


                        <!-- Company Seal -->
                        <div class="col-md-6">

                            <label for="company_seal" class="form-label">
                                Company / Organisation Seal
                            </label>

                            <input
                                type="file"
                                name="company_seal"
                                id="company_seal"
                                class="form-control"
                                accept=".jpg,.jpeg,.png,image/jpeg,image/png">

                            <div class="form-text">
                                Optional. JPG or PNG only. Maximum size: 2 MB.
                            </div>

                            <div
                                id="company_seal_err"
                                class="text-danger mt-1">
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= STEP 9 ================= -->
            <div class="form-step">

                <div class="form-card">

                    <h4>Part I – Recommendation / Sponsorship</h4>

                    <p class="text-muted">
                        Recommended by DNOAI Member, if applicable.
                    </p>

                    <hr>

                    <div class="row g-4">

                        <div class="col-md-6">

                            <label class="form-label">
                                Name of Member / MSO
                            </label>

                            <input
                                type="text"
                                name="recommending_mso"
                                class="form-control">

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Membership No.
                            </label>

                            <input
                                type="text"
                                name="recommending_membership_no"
                                class="form-control">

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Name of Recommending Person
                            </label>

                            <input
                                type="text"
                                name="recommending_person"
                                class="form-control">

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Date
                            </label>

                            <input
                                type="date"
                                name="recommendation_date"
                                class="form-control">

                        </div>

                        <div class="col-md-6">

                            <label class="form-label">
                                Signature
                            </label>

                            <input
                                type="file"
                                name="recommendation_signature"
                                class="form-control"
                                accept=".jpg,.jpeg,.png">

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= NAVIGATION ================= -->

            <div class="form-navigation">

                <button
                    type="button"
                    id="prevBtn"
                    class="btn btn-outline-secondary"
                    onclick="changeStep(-1)"
                    style="display:none;">
                    ← Previous
                </button>

                <button
                    type="button"
                    id="nextBtn"
                    class="btn btn-primary"
                    onclick="changeStep(1)">
                    Next →
                </button>

                <button
                    type="submit"
                    id="submitBtn"
                    class="btn btn-success"
                    style="display:none;">
                    Submit Application
                </button>

            </div>

        </form>

    </div>

</div>



<?php

require_once __DIR__ . '/includes/footer.php';

?>