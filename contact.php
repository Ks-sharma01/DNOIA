<?php
require_once __DIR__ . '/config/config.php';

require_once __DIR__ . '/includes/header.php';

?>

<div class="w-100 position-relative">

    <img
        src="<?= BASE_URL ?>assets/images/flash_lighting.jpg"
        alt="AIDCF"
        class="img-fluid w-100 d-block"
        style="height: 180px; object-fit: cover;">

    <h1
        class="position-absolute top-50 start-50 translate-middle
               text-warning fw-bold text-center mb-0">
        Contact
    </h1>

</div>


<div class="container-fluid px-lg-5 px-4">

    <div class="row align-items-stretch">

        <!-- CORPORATE OFFICE -->
        <div class="col-lg-4 col-md-6 col-12 p-4">

            <h5>
                Corporate Office
            </h5>

            <div class="footer-line"></div>

            <!-- Address -->
            <div class="d-flex gap-2 mb-3">

                <div>
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div>
                    Office Number 2,<br>
                    Ist Floor, Local Shopping Center,<br>
                    Uday Park, New Delhi - 110049
                </div>

            </div>


            <!-- Registered Office -->
            <div class="mt-4">

                <h5>
                    Registered Office
                </h5>

                <div class="footer-line"></div>

            </div>

            <div class="d-flex gap-2 mb-3">

                <div>
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div>
                    Office Number 2, Ist Floor,
                    Local Shopping Center,
                    Uday Park, New Delhi - 110049
                </div>

            </div>

        </div>


        <!-- MEMBERSHIP -->
        <div class="col-lg-8 col-md-6 col-12 p-4">

            <div class="container">

                <div class="row align-items-center bg-white rounded-4 shadow-sm overflow-hidden">

                    <!-- Left Content -->
                    <div class="col-lg-8 p-4 p-lg-5">

                        <span
                            class="text-uppercase fw-bold small"
                            style="color: #F2A03A;">
                            Membership
                        </span>

                        <h2 class="fw-bold mt-2 mb-3" style="color: #173E76;">
                            Become a Member of DNOAI
                        </h2>

                        <p class="text-secondary mb-0">
                            Join the Digital Network Operators Association of India
                            and become part of a strong network representing the
                            interests of digital network operators across India.
                        </p>

                    </div>

                    <!-- Right Button -->
                    <div class="col-lg-4 p-4 p-lg-5 text-lg-end text-center">

                        <a href="<?= BASE_URL ?>membership-registration.php"
                            class="btn px-4 py-3 fw-semibold text-white text-nowrap"
                            style="background-color: #173E76; border-radius: 8px;">

                            Become a Member
                            <span class="ms-2">→</span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="map-container mt-2">
    <iframe
        src="https://www.google.com/maps?q=28.5651213,77.2184589&output=embed"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?php

require_once __DIR__ . '/includes/footer.php';

?>