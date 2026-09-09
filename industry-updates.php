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
        Industry Updates
    </h1>

</div>

<!-- <?php require "data/industry-updates-data.php"; ?>
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

                    <?php if(!empty($currentIndustryUpdates)): ?>

                    <?php foreach ($currentIndustryUpdates as $industryUpdate): ?>

                        <tr>

                            <td class="py-3 px-3">
                                <?= date('j-M-Y', strtotime($industryUpdate['date'])) ?>
                            </td>

                            <td class="py-3 px-3">
                                <a href="#" class="title-link">
                                    <?= htmlspecialchars($industryUpdate['title']) ?>

                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    <?php else: ?>
                         <tr>
                            <td colspan="2" class="text-center py-4" style="color: #173E76">
                                No industry updates found.
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>

            </table>

           

            <nav class="mt-4" aria-label= "Industry Updates Pagination">

            <ul class="pagination justify-content-center">

                
                <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : "" ?>">
                    <a class="page-link" href="?page=<?= $currentPage - 1 ?>">
                        Previous
                    </a>
                </li>


                
                <?php for($page = 1; $page <= $totalPages; $page++): ?>
                    <li class="page-item <?= ($page == $currentPage) ? 'active' : ''?>">
                        <a class="page-link" href="?page=<?= $page ?>">
                            <?= $page ?>

                        </a>
                    </li>
                <?php endfor; ?>


               
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

</section> -->


<div class="social-overlay-wrapper">

    <div class="border rounded-2 overflow-auto thin-scrollbar p-3"
        style="height: 500px;">

        <!-- ALL YOUR EXISTING CODE -->

    </div>

    <!-- Coming Soon Overlay -->
    <div class="social-coming-soon">
        <div class="social-coming-soon-content">

            <i class="bi bi-clock"></i>

            <h3>Coming Soon</h3>

            <p>Industry Updates will be available soon.</p>

        </div>
    </div>

</div>

<?php

require_once __DIR__ . '/includes/footer.php';

?>