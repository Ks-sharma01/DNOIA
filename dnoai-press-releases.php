<?php
require_once __DIR__ . '/config/config.php';

require_once __DIR__ . '/includes/header.php';

?>

<div class="w-100 position-relative">

    <img
        src="<?= BASE_URL ?>assets/images/flash_lighting.jpg"
        alt="AIDCF"
        class="img-fluid w-100 d-block"
        style="height: 180px; object-fit: cover;"
    >

    <h1
        class="position-absolute top-50 start-50 translate-middle
               text-warning fw-bold text-center mb-0">
        DNOAI Press Releases
    </h1>

</div>

<!-- <?php require "data/news-data.php"; ?> -->

<!-- <section class="py-4 bg-light">

    <div class="container">
        <div class="table-responsive">

            <table class="table table-hover table-bordered mb-0 align-middle">

                <thead>

                    <tr class="text-center">

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;
                            ">
                            Date
                        </th>

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;">
                            Title
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($press_Releases as $release): ?>

                        <tr>

                            <td class="py-3 px-3">
                                <?= date('j-M-Y', strtotime($release['date'])) ?>
                            </td>

                            <td class="py-3 px-3">
                                <a href="#" class="title-link">
                                    <?= htmlspecialchars($release['title']) ?>

                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

       

    </div>

</section> -->

<div class="social-overlay-wrapper">

    <div class="border rounded-2 overflow-auto thin-scrollbar p-3"
        style="height: 500px;">

        <!-- ALL YOUR EXISTING LINKEDIN CODE -->

    </div>

    <!-- Coming Soon Overlay -->
    <div class="social-coming-soon">
        <div class="social-coming-soon-content">

            <i class="bi bi-clock"></i>

            <h3>Coming Soon</h3>

            <p>Press Releases will be available soon.</p>

        </div>
    </div>

</div>


<?php

require_once __DIR__ . '/includes/footer.php';

?>