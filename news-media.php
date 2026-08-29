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
        News & Media
    </h1>

</div>

<?php require "data/news-data.php"; ?>

<div class="container bg-light py-2">

    <!-- NEWS ITEMS -->

    <?php if(!empty($currentNews)): ?>
    <?php foreach ($currentNews as $item): ?>

        <div class="card mt-4 border-1 p-2">

            <!-- Date -->
            <div class="card border-1 p-2 mb-2">
                <span><?= htmlspecialchars($item["date"]) ?></span>
            </div>

            <div class="d-flex align-items-start gap-3 pb-2">

                <!-- Image -->
                <div class="flex-shrink-0">

                    <img
                        src="<?= htmlspecialchars($item["image"]) ?>"
                        alt="<?= htmlspecialchars($item["heading"]) ?>"
                        class="img-fluid"
                        style="
                            height: 100px;
                            width: 100px;
                            object-fit: cover;
                        "
                    >

                </div>

                <!-- Content -->
                <div class="flex-grow-1">

                    <h5
                        class="fw-semibold mb-2"
                        style="color: #f59a32;">
                        <?= htmlspecialchars($item["heading"]) ?>
                    </h5>

                    <p
                        class="mb-2 text-dark lh-base"
                        style="text-align: justify;">
                        <?= htmlspecialchars($item["description"]) ?>
                    </p>

                    <a
                        class="text-white rounded-1 read-more-btn"
                        style="
                            
                            background-color: #173E76;
                            padding: 10px 10px;
                            text-decoration: none;
                        "
                        href="<?= htmlspecialchars($item["link"]) ?>"
                        target="_blank">
                        Read More
                    </a>

                </div>

            </div>

        </div>

    <?php endforeach; ?>

    <?php else: ?>
            <div class="text-center">
                <p class="py-2" style="color: #173E76">
                    No news & media found.
                </p>
            </div>
    <?php endif; ?>


    <!-- PAGINATION -->

        <nav class="mt-4" aria-label="News pagination">

            <ul class="pagination justify-content-center">

                <!-- Previous -->
                <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : '' ?>">

                    <a
                        class="page-link"
                        href="?page=<?= $currentPage - 1 ?>">
                        Previous
                    </a>

                </li>


                <!-- Page Numbers -->
                <?php for ($page = 1; $page <= $totalPages; $page++): ?>

                    <li class="page-item <?= ($page == $currentPage) ? 'active' : '' ?>">

                        <a
                            class="page-link"
                            href="?page=<?= $page ?>">
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


<?php

require_once __DIR__ . '/includes/footer.php';

?>