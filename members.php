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


<div class="container-fluid bg-light py-4" id="criteriaId">

    <h2 class="text-center fw-bold mb-4"
       style="color: #f7931e;">

       Criteria

   </h2>
    <div class="container bg-white shadow-sm">
        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-12 p-4 d-flex justify-content-center align-items-center">

                <img
                    src="<?= BASE_URL ?>assets/images/criteria.png"
                    alt="Membership Criteria"
                    class="img-fluid mx-auto"
                    style="  width: 100%;
                    max-width: 700px;
                    height: auto;
                    object-fit: contain;"
                >

            </div>

        </div>

    </div>

</div>
<div class="container-fluid bg-light py-4" id="advantagesId">

    <h2 class="text-center fw-bold mb-4"
       style="color: #f7931e;">

       Advantages

   </h2>
    <div class="container bg-white shadow-sm">
        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-12 p-4 d-flex justify-content-center align-items-center">

                <img
                    src="<?= BASE_URL ?>assets/images/advantages.png"
                    alt="Membership Advantages"
                    class="img-fluid mx-auto"
                    style="  width: 100%;
                    max-width: 700px;
                    height: auto;
                    object-fit: contain;"
                >

            </div>

        </div>

    </div>

</div>

<div class="container-fluid bg-light py-4" id="membersId">

    <h2 class="text-center fw-bold mb-4"
       style="color: #f7931e;">

       Members

   </h2>
   
    <?php
    require_once __DIR__ . "/data/member-data.php";
    ?>

<div class="container-fluid bg-light py-2">

    <div class="container pb-4 px-4">

        <div class="row g-4 justify-content-center">

            <?php foreach ($members_details as $member): ?>

                <div class="col-12 col-sm-6 col-lg-4">

                    <div class="card h-100 bg-white rounded-3 member-card"
                         style="border: 1px solid #ccc;">

                        <!-- Logo -->
                        <div
                            class="d-flex justify-content-center align-items-center"
                            style="height: 200px; padding: 15px;">

                            <img
                                src="<?= $member['logo'] ?>"
                                alt="<?= htmlspecialchars($member['name']) ?>"
                                class="img-fluid"
                                style="
                                    max-width: 180px;
                                    max-height: 170px;
                                    object-fit: contain;
                                "
                            >

                        </div>


                        <!-- Card Content -->
                        <div class="card-body pt-2 px-4 pb-4">

                            <!-- Name -->
                            <h5
                                class="text-center fw-bold mb-2"
                                style="
                                    color: #142b3a;
                                    font-size: 19px;
                                ">

                                <?= htmlspecialchars($member['name']) ?>

                            </h5>


                            <!-- Address -->
                            <p
                                class="text-muted mb-4"
                                style="
                                    font-size: 15px;
                                    line-height: 1.5;
                                ">

                                <?= htmlspecialchars($member['address']) ?>

                            </p>


                            <!-- Phone -->
                            <?php if (!empty($member['phone'])): ?>

                                <p
                                    class="mb-1"
                                    style="font-size: 14px;">

                                    <strong>Phone:</strong>
                                    <?= htmlspecialchars($member['phone']) ?>

                                </p>

                            <?php endif; ?>


                            <!-- Website -->
                            <?php if (!empty($member['url'])): ?>

                                <p
                                    class="mb-0"
                                    style="font-size: 14px;">

                                    <strong>Website:</strong>

                                    <a
                                        href="<?= htmlspecialchars($member['url']) ?>"
                                        target="_blank"
                                        class=" text-dark">

                                        <?= htmlspecialchars($member['url']) ?>

                                    </a>

                                </p>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>

</div>


<?php

require_once __DIR__ . '/includes/footer.php';

?>
