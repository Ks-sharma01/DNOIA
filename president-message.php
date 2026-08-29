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
                    src="<?= BASE_URL ?>assets/images/Mr.-Anirudh-Sinh-Jadeja.png"
                    alt="AIDCF President"
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
                        Mr. Anirudhsinh Jadeja
                    </h1>

                    <h5
                        class="fw-semibold mb-3"
                        style="color: #f5a04b;">
                        Managing Director, GTPL Hathway Limited; President, AIDCF
                    </h5>

                    <p
                        class="mb-3 text-dark lh-base"
                        style="text-align: justify;">
                        In an era where digital transformation is reshaping how we
                        communicate and connect, the broadcasting industry has a
                        pivotal role in driving progress. At AIDCF, we envision to
                        lead India's digital cable and broadband industry into a
                        future where technology, accessibility, and quality converge
                        to deliver exceptional, user-centered digital experiences.
                        This ambitious vision guides our efforts to foster a
                        broadcasting environment that champions innovation and
                        inclusivity.
                    </p>

                    <p
                        class="mb-3 text-dark lh-base"
                        style="text-align: justify;">
                        The broadcasting landscape in India is undergoing rapid
                        evolution. From discussions on the National Broadcasting
                        Policy and the Broadcasting Services Regulation Bill to the
                        debates on integrating OTT and news platforms within the
                        regulatory fold, the industry is aligning itself to meet
                        the demands of a digital-first world. These developments
                        underscore the importance of defining a new approach that
                        considers the unique needs of both traditional and digital
                        broadcasting players while ensuring fair competition and
                        consumer protection.
                    </p>

                    <p
                        class="mb-0 text-dark lh-base"
                        style="text-align: justify;">
                        As the broadcasting landscape continues to evolve, so too
                        must our strategies and policies. This is a time for
                        dynamic collaboration, informed decision-making, and
                        proactive initiatives to address emerging challenges and
                        harness new opportunities. AIDCF is driven to work closely
                        with all stakeholders and stands as a bridge between
                        industry players and regulatory bodies, facilitating
                        dialogue, aligning goals, and creating pathways to support
                        the sustainable growth of the industry. Together with our
                        members and partners, we are building a resilient,
                        inclusive and future-ready industry that honors the
                        diversity, needs, and aspirations of all Indians.
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