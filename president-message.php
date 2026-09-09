<?php
require_once __DIR__ . '/config/config.php';

require_once __DIR__ . '/includes/header.php';

?>

<div class="w-100">
    
    <img
    src="<?= BASE_URL ?>assets/images/flash_lighting.jpg"
    alt="AIDCF"
    class="img-fluid w-100 d-block"
    style="height: 180px; object-fit: cover;"
    >
    
</div>
<div class="container-fluid bg-light py-4">

    <div class="container bg-white shadow-sm">

        <div class="row">

            <!-- Image -->
            <div class="col-md-4 p-4 d-flex justify-content-center">

                <img
                    src="<?= BASE_URL ?>assets/images/directors/sn.jpg"
                    alt="DDC President"
                    class="img-fluid"
                    style="height: 400px; width: 300px; object-fit: cover;"
                >

            </div>


            <!-- Content -->
            <div class="col-md-8 p-4">

                <div
                    class="overflow-hidden thin-scrollbar"
                    style="height: auto;">

                    <h1
                        class="fw-semibold mb-2"
                        style="color: #f59a32;">
                       Mr. Sanjiv Narain
                    </h1>

                    <h5
                        class="fw-semibold mb-3"
                        style="color: #f5a04b;">
                         Founder, Axom ISPL | DNOAI
                    </h5>

                    <p
                        class="mb-3 text-dark lh-base"
                        style="text-align: justify;">
                        Mr. Sanjiv Narain is an experienced entrepreneur and industry professional associated with the digital communications, cable television, and internet services sector. He is the Founder of AXOM ISPL, an internet and ICT service provider based in Guwahati, Assam, offering broadband, cable TV, and IPTV services.</p>

                    <p
                        class="mb-3 text-dark lh-base"
                        style="text-align: justify;">
                        As a Promoter and Director of the Digital Network Operators Association of India (DNOAI), Mr. Narain contributes to the association's efforts to bring digital network operators together and strengthen representation of the industry.
                        With his experience in the digital network and telecommunications ecosystem, Mr. Narain brings valuable industry perspective to DNOAI, particularly in areas such as network development, digital connectivity, technological advancement, and the growth of the cable and broadband industry.</p>

                </div>

            </div>

        </div>

    </div>

</div>


<?php include "data/president-tenure.php"; ?>

<div class="container-fluid bg-light py-4">
    <h3 class="text-center">
        <span class="fw-semibold" style="color: #f59a32;">List of Presidents</span>
    </h3>

    <div class="container">

        <div class="table-responsive">

            <table class="table table-bordered table-hover mb-0 align-middle">

                <thead>
                    <tr class="text-white text-center">
                        <th
                            scope="col"
                            class="py-3 text-white"
                            style="background-color: #173E76; width: 150px;">
                            From
                        </th>

                        <th
                            scope="col"
                            class="py-3 text-white"
                            style="background-color: #173E76; width: 170px;">
                            To
                        </th>

                        <th
                            scope="col"
                            class="py-3 text-white"
                            style="background-color: #173E76;">
                            President
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($presidents as $president): ?>

                        <tr>

                            <td class="py-3 px-3">
                                <?= htmlspecialchars($president['from']) ?>
                            </td>

                            <td class="py-3 px-3">
                                <?= htmlspecialchars($president['to']) ?>
                            </td>

                            <td class="py-3 px-3">
                                <?= htmlspecialchars($president['president']) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>
        
<?php

require_once __DIR__ . '/includes/footer.php';

?>