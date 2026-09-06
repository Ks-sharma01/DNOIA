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
                    src="<?= BASE_URL ?>assets/images/directors/ravi_gupta.jpg"
                    alt="DDC President"
                    class="img-fluid"
                    style="height: 400px; width: 300px; object-fit: cover;"
                >

            </div>


            <!-- Content -->
            <div class="col-md-8 p-4">

                <div
                    class="overflow-auto thin-scrollbar"
                    style="height: 400px;">

                    <h1
                        class="fw-semibold mb-2"
                        style="color: #f59a32;">
                        Mr. Ravi Gupta
                    </h1>

                    <h5
                        class="fw-semibold mb-3"
                        style="color: #f5a04b;">
                        CEO & Founder, DDC CATV Network Pvt. Ltd, DONAI
                    </h5>

                    <p
                        class="mb-3 text-dark lh-base"
                        style="text-align: justify;">
                        Ravi founded DDC CATV Network Pvt Ltd in 1993 when the Cable TV industry was emerging on the scene in Indian Metros and has been the frontrunner in nurturing it by keeping the pace with technology and bringing professionalism. Ravi is among the first to set up a MPEG4 digital Head and based on advanced state-of-the-an technology in a data centric environment with high reliability infrastructure.
                    </p>

                    <p
                        class="mb-3 text-dark lh-base"
                        style="text-align: justify;">
                        He is also associated with the Digital Network Operators Association of India (DNOAI), where he contributes to strengthening the digital network operator community and promoting collaboration, growth, and professional development within the industry.

                        With his experience and leadership, Mr. Gupta focuses on addressing industry challenges, encouraging technological advancement, and creating opportunities for digital network operators across India. His vision is centered on building a stronger, more organized, and future-ready digital network ecosystem.
                    </p>

                   

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