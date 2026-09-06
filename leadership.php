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

<section class="py-5" style="background-color: white;">

    <div class="container-fluid px-4">

        <!-- Heading -->

        <h2 class="text-center fw-bold mb-4"
            style="color: #f7931e;">

            Board of Directors

        </h2>


        <?php

        require "data/directors-data.php";

        ?>


        <!-- Directors -->

        <div class="row g-4 justify-content-center">

            <?php foreach ($directors as $director): ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">

                    <div class="card h-100 border-0 rounded-0">

                        <!-- Image -->

                        <div class="p-2">

                            <img
                                src="<?= $director['image'] ?>"
                                alt="<?= $director['name'] ?>"
                                class="card-img-top w-100"
                                style="height: 285px; object-fit: cover;">

                        </div>


                        <!-- Content -->

                        <div class="card-body bg-light director-info text-center px-2 pt-1 pb-3">

                            <h5 class="fw-bold mb-2"
                                style="font-size: 16px;">

                                <?= $director['name'] ?>

                            </h5>


                            <p class="mb-0"
                               style="
                                   font-size: 15px;
                                   line-height: 1.45;
                               ">

                                <?= $director['designation'] ?>

                            </p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>
<?php include "data/governing-council.php"; ?>

<section class="py-4 bg-light">

    <div class="container">

        <!-- Heading -->
        <h2
            class="text-center fw-semibold mb-4"
            style="color: #f59a32;">
            Governing Council
        </h2>

        <!-- Table -->
        <div class="table-responsive">

            <table class="table table-hover table-bordered mb-0 align-middle">

                <thead>

                    <tr class="text-center">

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;">
                            Name
                        </th>

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;">
                            Position
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($governingCouncil as $member): ?>

                        <tr>

                            <td class="py-3 px-3">

                                <?= htmlspecialchars($member['name']) ?>

                            </td>

                            <td class="py-3 px-3">

                                <?= htmlspecialchars($member['position']) ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</section>


<!-- <section class="py-4 bg-light">

    <div class="container">

        
        <h2
            class="text-center fw-semibold mb-4"
            style="color: #f59a32;">
            Legal & Regulatory Committee
        </h2>

        
        <div class="table-responsive">

            <table class="table table-hover table-bordered mb-0 align-middle">

                <thead>

                    <tr class="text-center">

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;
                            ">
                            Name
                        </th>

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;">
                            Position
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($legalRegulatoryCommittees as $member): ?>

                        <tr>

                            <td class="py-3 px-3">

                                <?= htmlspecialchars($member['name']) ?>

                            </td>

                            <td class="py-3 px-3">

                                <?= htmlspecialchars($member['position']) ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</section> -->

<?php

require_once __DIR__ . '/includes/footer.php';

?>