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
        Relevant Websites

    </h1>

</div>


<?php require "data/home-data.php"; ?>
<section class="py-4 bg-light">

    <div class="container">
        <div class="table-responsive">

            <table class="table table-hover table-bordered mb-0 align-middle">

                <thead>

                    <tr class="text-center">

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;
                            ">
                            Text
                        </th>

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;">
                            Link
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php if(!empty($websites_Links)): ?>

                    <?php foreach ($websites_Links as $link): ?>

                        <tr>

                            <td class="py-3 px-3">
                                <?= htmlspecialchars($link['name']) ?>
                            </td>

                            <td class="py-3 px-3">
                                <a href="<?= htmlspecialchars($link['link']) ?>" class="title-link text-muted">
                                    <?= htmlspecialchars($link['link']) ?>

                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    <?php else: ?>
                         <tr>
                            <td colspan="2" class="text-center py-4" style="color: #173E76">
                                No websites found.
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>

            </table>

    </div>

</section>



<?php

require_once __DIR__ . '/includes/footer.php';

?>