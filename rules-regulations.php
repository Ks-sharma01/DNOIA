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
        Rules & Regulations

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
                            style="background-color: #173E76; width: 160px;
                            ">
                            Date
                        </th>

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76;">
                            Title
                        </th>

                        <th
                            class="py-3 text-white fw-semibold"
                            style="background-color: #173E76; width: 250px;">
                            Remark
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php if(!empty($currentRules_Regulations)): ?>

                    <?php foreach ($currentRules_Regulations as $item): ?>

                        <tr>

                            <td class="py-3 px-3">
                                <?= date('j-M-Y', strtotime($item['date'])) ?>
                            </td>

                            <td class="py-3 px-3">
                                <a href="#" class="title-link">

                                    <?= htmlspecialchars($item['title']) ?>
                                </a>


                            </td>

                            <td class="py-3 px-3">

                                <?= htmlspecialchars($item['remark']) ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    <?php else: ?>
                         <tr>
                            <td colspan="3" class="text-center py-4" style="color: #173E76">
                                No rules & regulations found.
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>

            </table>

            <!-- Pagination -->

            <nav class="mt-4" aria-label= "Industry Updates Pagination">

            <ul class="pagination justify-content-center">

                <!-- Previous Page Link -->
                <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : "" ?>">
                    <a class="page-link" href="?page=<?= $currentPage - 1 ?>">
                        Previous
                    </a>
                </li>


                <!-- Page Numbers -->
                <?php for($page = 1; $page <= $totalPages; $page++): ?>
                    <li class="page-item <?= ($page == $currentPage) ? 'active' : ''?>">
                        <a class="page-link" href="?page=<?= $page ?>">
                            <?= $page ?>

                        </a>
                    </li>
                <?php endfor; ?>


                <!-- Next -->
                  <li class="page-item <?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">

                    <a
                        class="page-link"
                        href="?page=<?= $currentPage + 1 ?>">
                        Next
                    </a>

                </li>
            </ul>
            </nav>

       

    </div>

</section>


<?php

require_once __DIR__ . '/includes/footer.php';

?>