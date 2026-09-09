<?php
require_once __DIR__ . "/config/config.php";
$pageTitle = "DNOAI - Home";

include "includes/header.php";

?>


<!-- Hero Slider -->

<?php

require "data/banner-data.php";

?>

<section class="banner-section">

    <div
        id="aidcfBanner"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="4000">


        <!-- Indicators -->

        <div class="carousel-indicators">

            <?php foreach ($banners as $index => $banner): ?>

                <button
                    type="button"
                    data-bs-target="#aidcfBanner"
                    data-bs-slide-to="<?= $index ?>"
                    class="<?= $index === 0 ? 'active' : '' ?>"
                    aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                    aria-label="Slide <?= $index + 1 ?>">
                </button>

            <?php endforeach; ?>

        </div>


        <!-- Slides -->

        <div class="carousel-inner">

            <?php foreach ($banners as $index => $banner): ?>

                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">

                    <img
                        src="<?= $banner['image'] ?>"
                        class="d-block w-100 banner-image"
                        alt="<?= $banner['name'] ?>">

                </div>

            <?php endforeach; ?>

        </div>


        <!-- Previous Button -->

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#aidcfBanner"
            data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>

            <span class="visually-hidden">
                Previous
            </span>

        </button>


        <!-- Next Button -->

        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#aidcfBanner"
            data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>

            <span class="visually-hidden">
                Next
            </span>

        </button>

    </div>

</section>


<!-- About Section -->

<section class="py-4">

    <div class="container">

        <h1 class="text-center fw-bold text-warning">Our Members</h1>

    </div>

</section>


<!-- Members -->

<section class="py-5" style="background-color: #173E76;">

    <div class="container">

        <div class="row g-4 justify-content-center">

            <?php

            require "data/member-data.php";

            foreach ($members as $member):

            ?>

                <div class="col-lg-2 col-md-6">

                    <div class="member-box text-center">

                        <a
                            href="<?= $member['url'] ?>"
                            target="_blank"
                            rel="noopener noreferrer">

                            <img
                                src="<?= $member['logo'] ?>"
                                alt="<?= $member['name'] ?>"
                                class="img-fluid">

                        </a>



                    </div>

                </div>

            <?php endforeach; ?>
        </div>


    </div>

    </div>

</section>


<section class="py-5 bg-white shadow-sm">

    <div class="container-fluid px-4">

        <!-- Heading -->

        <h1 class="text-center fw-bold mb-4"
            style="color: #f7931e;">

            Board of Directors

        </h1>


        <?php

        require "data/directors-data.php";

        ?>


        <!-- Directors -->

        <div class="row g-4 justify-content-center">

            <?php foreach ($directors as $director): ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">

                    <div class="card h-100 director-card border-0 rounded-0">

                        <!-- Image -->

                        <div class="p-2">

                            <img
                                src="<?= $director['image'] ?>"
                                alt="<?= $director['name'] ?>"
                                class="card-img-top w-100"
                                style="height: 285px; object-fit: cover;">

                        </div>


                        <!-- Content -->

                        <div class="card-body bg-light shadow-sm text-center px-2 pt-1 pb-3">

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

<section style="background-color: #173E76;">

    <div class="container-fluid px-4 pt-4">
        <h1 class="text-center fw-bold mb-4"
            style="color: #f7931e;">

            News & Media

        </h1>


        <!-- News & Media -->

        <?php include "data/news-data.php"; ?>

        <section class="pb-5">


            <div class="container">

                <div id="newsCarousel"
                    class="carousel slide"
                    data-bs-ride="carousel"
                    data-bs-interval="4000">

                    <div class="carousel-inner">

                        <?php
                        $chunks = array_chunk($news_info, 3);
                        ?>

                        <?php foreach ($chunks as $index => $newsGroup): ?>

                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">

                                <div class="row g-4 px-3">

                                    <?php foreach ($newsGroup as $news): ?>

                                        <div class="col-lg-4 col-md-6 col-12">

                                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100">

                                                <!-- Image -->
                                                <div style="height: 200px;">

                                                    <img
                                                        src="<?= htmlspecialchars($news['image']); ?>"
                                                        alt="<?= htmlspecialchars($news['heading']); ?>"
                                                        class="w-100 h-100"
                                                        style="object-fit: cover;">

                                                </div>

                                                <!-- Card Body -->
                                                <div class="card-body p-4">

                                                    <h5 class="card-title text-dark fw-medium"
                                                        style="
                                                    line-height: 1.4;
                                                    min-height: 80px;
                                                ">

                                                        <?= htmlspecialchars($news['heading']); ?>

                                                    </h5>

                                                    <div class="text-muted small mb-1">

                                                        <?= htmlspecialchars($news['date']); ?>

                                                    </div>
                                                    <p class="card-text text-secondary small mb-3"
                                                        style="
                                            display: -webkit-box;
                                            line-clamp: 4;
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                        ">
                                                        <?= htmlspecialchars($news['description']); ?>
                                                    </p>

                                                    <a href="#"
                                                        class="text-decoration-none text-dark fw-medium small">

                                                        Read More »

                                                    </a>

                                                </div>

                                            </div>

                                        </div>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>


                    <!-- Previous Button -->
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#newsCarousel"
                        data-bs-slide="prev"
                        style="width: 45px;">

                        <span
                            class="rounded-circle d-flex align-items-center justify-content-center"
                            style="
                        width: 36px;
                        height: 36px;
                        background-color: #f5a623;
                    ">

                            <span class="carousel-control-prev-icon"
                                style="width: 18px; height: 18px;">
                            </span>

                        </span>

                        <span class="visually-hidden">
                            Previous
                        </span>

                    </button>


                    <!-- Next Button -->
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#newsCarousel"
                        data-bs-slide="next"
                        style="width: 45px;">

                        <span
                            class="rounded-circle d-flex align-items-center justify-content-center"
                            style="
                        width: 36px;
                        height: 36px;
                        background-color: #f5a623;
                    ">

                            <span class="carousel-control-next-icon"
                                style="width: 18px; height: 18px;">
                            </span>

                        </span>

                        <span class="visually-hidden">
                            Next
                        </span>

                    </button>

                </div>

            </div>
            <div class="text-center">

                <a href="<?= BASE_URL ?>news-media.php"
                    class="disabled btn btn-dark fw-bold px-4 py-2 mt-4 rounded-1" style="background-color: #F2A03A; border: none">
                    More Coming Soon
                </a>
            </div>
        </section>

        <!-- Social-Posts -->
        <?php include "data/social-data.php"; ?>

        <section class="pt-4 pb-5 bg-light">

            <div class="container">


                <div class="row g-5">

                    <!-- Twitter -->
                    <div class="col-lg-6 col-md-6 col-12">

                        <h2 class="text-center mb-4 fw-bold"
                            style="color: #f2a03a;">
                            X
                        </h2>

                        <div class="border rounded-2 overflow-auto thin-scrollbar p-2"
                            style="height: 500px;">

                            <!-- Twitter Profile -->

                            <div class="p-3 mb-4">

                                <div class="d-flex align-items-start">

                                    <img
                                        src="<?= $twitter_profile['image'] ?>"
                                        alt="<?= $twitter_profile['name'] ?>"
                                        class="rounded-circle"
                                        width="30"
                                        height="30">

                                    <div class="ms-2">

                                        <div class="d-flex align-items-center gap-2">

                                            <strong>
                                                <?= $twitter_profile['name'] ?>
                                            </strong>

                                            <a href="<?= $twitter_profile['profile_url'] ?>"
                                                class="btn btn-primary btn-sm py-0 px-2">

                                                <i class="bi bi-twitter-x"></i>
                                                Follow

                                            </a>

                                        </div>

                                        <p class="small mb-0">
                                            <?= $twitter_profile['description'] ?>
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <!-- Dynamic Twitter Posts -->

                            <?php foreach ($twitter_posts as $post): ?>

                                <div class="card border-0 shadow-sm mb-4">

                                    <div class="card-body">

                                        <div class="d-flex">

                                            <img
                                                src="<?= $twitter_profile['image'] ?>"
                                                alt="<?= $twitter_profile['name'] ?>"
                                                class="rounded-circle"
                                                width="30"
                                                height="30">

                                            <div class="ms-2 flex-grow-1">

                                                <div class="small">

                                                    <strong>
                                                        <?= $twitter_profile['name'] ?>
                                                    </strong>
                                                    <a href="#" class="text-decoration-none">

                                                        <span class="text-muted">
                                                            <?= $twitter_profile['username'] ?>
                                                            ·
                                                        </span>
                                                    </a>
                                                    <?= $post['date'] ?>

                                                </div>

                                                <p class="mb-3 mt-1">
                                                    <?= htmlspecialchars($post['content']) ?>
                                                    <a href="<?= $post['url'] ?>"
                                                        class="text-muted text-decoration-none">

                                                        <i class="bi bi-file-earmark-richtext"></i>

                                                    </a>
                                                </p>

                                                <div class="d-flex gap-4 text-muted small">

                                                    <a href="<?= $post['url'] ?>"
                                                        class="text-muted text-decoration-none">

                                                        <i class="bi bi-chat-left"></i>

                                                    </a>
                                                    <a href="<?= $post['url'] ?>"
                                                        class="text-muted text-decoration-none">

                                                        <i class="bi bi-arrow-repeat"></i>

                                                    </a>
                                                    <a href="<?= $post['url'] ?>"
                                                        class="text-muted text-decoration-none">

                                                        <i class="bi bi-heart"></i>

                                                    </a>

                                                    <a href="<?= $post['url'] ?>"
                                                        class="text-muted text-decoration-none">

                                                        <i class="bi bi-twitter-x"></i>

                                                    </a>

                                                </div>

                                            </div>

                                            <span class="fs-4">
                                                <i class="bi bi-twitter-x"></i>
                                            </span>

                                        </div>


                                    </div>


                                </div>

                            <?php endforeach; ?>
                            <div class="container-fluid px-0">
                                <button class="btn btn-light w-100 rounded-2 text-secondary">
                                    Load More
                                </button>
                            </div>
                        </div>
                        <!-- Coming Soon Overlay -->
                        <!-- <div class="social-coming-soon">
                                <div class="social-coming-soon-content">

                                    <i class="bi bi-clock"></i>

                                    <h3>Coming Soon</h3>

                                    <p>Twitter updates will be available soon.</p>

                                </div>
                            </div> -->


                    </div>


                    <!-- LinkedIn -->
                    <div class="col-lg-6 col-md-6 col-12">

                        <h2 class="text-center mb-4 fw-bold"
                            style="color: #f2a03a;">
                            LinkedIn
                        </h2>
                        <div class="border rounded-2 overflow-auto thin-scrollbar p-3"
                            style="height: 500px;">

                            <!-- Profile -->

                            <div class="card rounded-3 mb-4">

                                <div class="card-body text-center p-4">

                                    <div
                                        class="rounded-circle bg-light mx-auto mb-3
                            d-flex align-items-center justify-content-center"
                                        style="width: 72px; height: 72px;">
                                        <span class="fs-1">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                    </div>

                                    <h5 class="text-primary">
                                        <?= $linkedin_profile['name'] ?>
                                    </h5>

                                    <p class="text-muted mb-2">
                                        <strong>
                                            <?= $linkedin_profile['followers'] ?>
                                        </strong>
                                        <!-- Followers -->
                                    </p>

                                    <p class="text-secondary">
                                        <?= $linkedin_profile['description'] ?>
                                    </p>

                                    <a href="<?= $linkedin_profile['website'] ?>"
                                        class="text-primary text-decoration-none">

                                        🔗
                                         <?= $linkedin_profile['website'] ?>

                                    </a>

                                    <a href="<?= $linkedin_profile['url'] ?>"
                                        class="btn w-100 mt-3 text-white"
                                        style="background-color:#496481;">

                                        in &nbsp; Follow Us on LinkedIn

                                    </a>

                                </div>

                            </div>


                            <!-- Dynamic LinkedIn Posts -->

                            <?php foreach ($linkedin_posts as $post): ?>

                                <div class="card border-0 shadow-sm mb-4">

                                    <div class="card-body p-4">

                                        <div class="d-flex align-items-start">

                                            <img
                                                src="<?= BASE_URL ?>assets/images/logo3.png"
                                                alt="DNOAI"
                                                width="30"
                                                height="30"
                                                class="rounded-circle">

                                            <div class="ms-2">

                                                <strong class="text-primary">
                                                    <?= $linkedin_profile['name'] ?>
                                                </strong>

                                                <div class="small text-muted">
                                                    <?= $post['date'] ?>
                                                </div>

                                            </div>

                                            <a href="<?= $post['url'] ?>"
                                                class="ms-auto bg-primary text-white px-1 rounded-sm text-decoration-none">

                                                in

                                            </a>

                                        </div>

                                        <p class="mt-3 text-secondary">
                                            <?= htmlspecialchars($post['content']) ?>
                                        </p>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                            <div class="container-fluid px-0">
                                <button class="btn btn-secondary w-100 rounded-2 text-white fw-bold">
                                    Load More Posts
                                </button>
                            </div>
                        </div>
                        <!-- Coming Soon Overlay
                            <div class="social-coming-soon">
                                <div class="social-coming-soon-content">

                                    <i class="bi bi-clock"></i>

                                    <h3>Coming Soon</h3>

                                    <p>LinkedIn updates will be available soon.</p>

                                </div>
                            </div> -->

                    </div>

                </div>

            </div>
    </div>

</section>
<?php include "data/home-data.php"; ?>

<section class="py-5 bg-light">
        <div class="container">

            <div class="row g-4">

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="bg-white rounded-1 overflow-hidden">

                        <!-- Header -->
                        <div class="text-center py-3"
                            style="background-color: #173E76;">

                            <h5 class="mb-0 text-warning fw-semibold">
                                News and Media
                            </h5>

                        </div>

                        <!-- Scrollable Content -->
                        <div class="p-3 news-list thin-scrollbar">

                            <?php foreach ($news_media as $item): ?>

                                <div class="border rounded-1 bg-white p-3 mb-3">

                                    <div class="row align-items-center">

                                        <!-- Date -->
                                        <div class="col-4 border-end">

                                            <small class="text-dark">
                                                <?= htmlspecialchars($item['date']); ?>
                                            </small>

                                        </div>

                                        <!-- Title -->
                                        <div class="col-8">

                                            <a href="#" class="mb-0 small fw-medium text-dark text-decoration-none news-heading">
                                                <?= htmlspecialchars($item['title']); ?>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                        <!-- View All -->
                        <div class="text-end px-3 pb-3">

                            <a href="<?= BASE_URL ?>news-media.php"
                                class="btn btn-sm text-warning px-3 py-2"
                                style="background-color: #173E76;">

                                View All

                            </a>

                        </div>

                    </div>

                </div>


                <!-- ================= INDUSTRY UPDATES ================= -->

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="bg-white rounded-1 overflow-hidden">

                        <!-- Header -->
                        <div class="text-center py-3"
                            style="background-color:#173E76;">

                            <h5 class="mb-0 text-warning fw-semibold">
                                Industry Updates
                            </h5>

                        </div>

                        <!-- Scrollable Content -->
                        <div class="p-3 news-list thin-scrollbar">

                            <?php foreach ($industry_updates as $item): ?>

                                <div class="border rounded-1 bg-white p-3 mb-3">

                                    <div class="row align-items-center">

                                        <!-- Date -->
                                        <div class="col-4 border-end">

                                            <small class="text-dark">
                                                <?= htmlspecialchars($item['date']); ?>
                                            </small>

                                        </div>

                                        <!-- Title -->
                                        <div class="col-8">

                                            <a href="#" class="mb-0 small fw-medium text-dark text-decoration-none news-heading">
                                                <?= htmlspecialchars($item['title']); ?>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                        <!-- View All -->
                        <div class="text-end px-3 pb-3">

                            <a href="<?= BASE_URL ?>industry-updates.php"
                                class="btn btn-sm text-warning px-3 py-2"
                                style="background-color: #173E76;">

                                View All

                            </a>

                        </div>

                    </div>

                </div>


                <!-- ================= PRESS RELEASES ================= -->

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="bg-white rounded-1 overflow-hidden">

                        <!-- Header -->
                        <div class="text-center py-3"
                            style="background-color:#173E76;">

                            <h5 class="mb-0 text-warning fw-semibold">
                                Press Releases
                            </h5>

                        </div>

                        <!-- Scrollable Content -->
                        <div class="p-3 news-list thin-scrollbar">

                            <?php foreach ($press_releases as $item): ?>

                                <div class="border rounded-1 bg-white p-3 mb-3">

                                    <div class="row align-items-center">

                                        <!-- Date -->
                                        <div class="col-4 border-end">

                                            <small class="text-dark">
                                                <?= htmlspecialchars($item['date']); ?>
                                            </small>

                                        </div>

                                        <!-- Title -->
                                        <div class="col-8">

                                            <a href="#" class="mb-0 small fw-medium text-dark text-decoration-none news-heading">
                                                <?= htmlspecialchars($item['title']); ?>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                        <!-- View All -->
                        <div class="text-end px-3 pb-3">

                            <a href="<?= BASE_URL ?>dnoai-press-releases.php"
                                class="btn btn-sm text-warning px-3 py-2"
                                style="background-color:#173E76;">

                                View All

                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="bg-white rounded-1 overflow-hidden">

                        <!-- Header -->
                        <div class="text-center py-3"
                            style="background-color:#173E76;">

                            <h5 class="mb-0 text-warning fw-semibold">
                                Consultation Papers & Recos
                            </h5>

                        </div>

                        <!-- Scrollable Content -->
                        <div class="p-3 news-list thin-scrollbar">

                            <?php foreach ($consultation_Papers_Recos as $item): ?>

                                <div class="border rounded-1 bg-white p-3 mb-3">

                                    <div class="row align-items-center">

                                        <!-- Date -->
                                        <div class="col-4 border-end">

                                            <small class="text-dark">
                                                <?= htmlspecialchars($item['date']); ?>
                                            </small>

                                        </div>

                                        <!-- Title -->
                                        <div class="col-8">

                                            <a href="#" class="mb-0 small fw-medium text-dark text-decoration-none news-heading">
                                                <?= htmlspecialchars($item['title']); ?>
                                            </a>
                                            <p class="small fw-medium text-muted"><?= htmlspecialchars($item['remark']); ?></p>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                        <!-- View All -->
                        <div class="text-end px-3 pb-3">

                            <a href="<?= BASE_URL ?>consultation-papers.php"
                                class="btn btn-sm text-warning px-3 py-2"
                                style="background-color: #173E76;">

                                View All

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="bg-white rounded-1 overflow-hidden">

                        <!-- Header -->
                        <div class="text-center py-3"
                            style="background-color:#173E76;">

                            <h5 class="mb-0 text-warning fw-semibold">
                                Rules & Regulations
                            </h5>

                        </div>

                        <!-- Scrollable Content -->
                        <div class="p-3 news-list thin-scrollbar">

                            <?php foreach ($rules_Regulations as $item): ?>

                                <div class="border rounded-1 bg-white p-3 mb-3">

                                    <div class="row align-items-center">

                                        <!-- Date -->
                                        <div class="col-4 border-end">

                                            <small class="text-dark">
                                                <?= htmlspecialchars($item['date']); ?>
                                            </small>

                                        </div>

                                        <!-- Title -->
                                        <div class="col-8">

                                            <a href="#" class="mb-0 small fw-medium text-dark text-decoration-none news-heading">
                                                <?= htmlspecialchars($item['title']); ?>
                                            </a>

                                            <p class="small text-muted"> <?= htmlspecialchars($item['remark']); ?> </p>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                        <!-- View All -->
                        <div class="text-end px-3 pb-3">

                            <a href="<?= BASE_URL ?>rules-regulations.php"
                                class="btn btn-sm text-warning px-3 py-2"
                                style="background-color:#173E76;">

                                View All

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="bg-white rounded-1 overflow-hidden">

                        <!-- Header -->
                        <div class="text-center py-3"
                            style="background-color:#173E76;">

                            <h5 class="mb-0 text-warning fw-semibold">
                                Website Links
                            </h5>

                        </div>

                        <!-- Scrollable Content -->
                        <div class="p-3 news-list thin-scrollbar">

                            <?php foreach ($websites_Links as $item): ?>

                                <div class="border rounded-1 bg-white p-3 mb-3">

                                    <div class="row align-items-center">

                                        <!-- Date -->
                                        <div class="border-end">

                                            <small class="text-dark">
                                                <?= htmlspecialchars($item['name']); ?>
                                            </small>

                                        </div>

                                        <!-- Title -->
                                        <div class="col-8">

                                            <a href="<?= htmlspecialchars($item['link']); ?>" class="mb-0 small fw-medium text-muted">
                                                <?= htmlspecialchars($item['link']); ?>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                        <!-- View All -->
                        <div class="text-end px-3 pb-3">

                            <a href="<?= BASE_URL ?>relevant-websites.php"
                                class="btn btn-sm text-warning px-3 py-2"
                                style="background-color: #173E76;">

                                View All

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Coming Soon Overlay -->
        <!-- <div class="social-coming-soon">
            <div class="social-coming-soon-content">

                <i class="bi bi-clock"></i>

                <h3>Coming Soon</h3>

                <p>Will be available soon.</p>

            </div>
        </div> -->
    
    
</section>

<section class="py-5">
    <div class="container">

        <div class="row align-items-center bg-white rounded-4 shadow-sm overflow-hidden">

            <!-- Left Content -->
            <div class="col-lg-8 p-4 p-lg-5">

                <span
                    class="text-uppercase fw-bold small"
                    style="color: #F2A03A;">
                    Membership
                </span>

                <h2 class="fw-bold mt-2 mb-3" style="color: #173E76;">
                    Become a Member of DNOAI
                </h2>

                <p class="text-secondary mb-0">
                    Join the Digital Network Operators Association of India
                    and become part of a strong network representing the
                    interests of digital network operators across India.
                </p>

            </div>

            <!-- Right Button -->
            <div class="col-lg-4 p-4 p-lg-5 text-lg-end text-center"
                 style="background-color: #f6f8fc;">

                <a href="<?= BASE_URL ?>membership-registration.php"
                   class="btn px-4 py-3 fw-semibold text-white"
                   style="background-color: #173E76; border-radius: 8px;">

                    Become a Member
                    <span class="ms-2">→</span>

                </a>

            </div>

        </div>

    </div>
</section>



<?php

include "includes/footer.php";

?>