<?php

require_once __DIR__ . "/config/config.php";

$pageTitle = "Application Submitted";

include __DIR__ . "/includes/header.php";

$applicationNo =
    $_GET["application"] ?? "";

?>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card border-0 shadow-sm">

                <div class="card-body text-center p-5">

                    <div
                        class="mb-4"
                        style="font-size:60px;"
                    >
                        ✓
                    </div>

                    <h2 class="fw-bold">
                        Application Submitted Successfully
                    </h2>

                    <p class="text-muted mt-3">
                        Thank you for submitting your membership
                        application to Digital Network Operators
                        Association of India.
                    </p>

                    <div class="alert alert-info mt-4">

                        <strong>
                            Application Number
                        </strong>

                        <div class="fs-4 mt-2">
                            <?= htmlspecialchars($applicationNo) ?>
                        </div>

                    </div>

                    <p class="small text-muted">
                        Please keep this application number for
                        future communication.
                    </p>

                    <a
                        href="<?= BASE_URL ?>"
                        class="btn btn-primary mt-3"
                    >
                        Back to Home
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php
include __DIR__ . "/includes/footer.php";
?>