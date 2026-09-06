<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?= $pageTitle ?? 'DNOAI' ?>
    </title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom CSS -->
        <link
            rel="stylesheet"
        href="<?= BASE_URL ?>assets/css/style.css">

</head>

<body>

<header>

    
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-bg shadow-sm">

    <div class="container">

        <a class="navbar-brand"
        href="index.php">
        
        <img
        src="<?= BASE_URL ?>assets/images/dnoai_logo.png"
        alt="DNOAI Logo"
        class="logo text-white rounded-5" style="height: 60px; width: 60px">
        
    </a>
    
    
    <!-- Mobile Button -->
    
    <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#mainNavbar">
    
            <span class="navbar-toggler-icon bg-white"></span>
            
        </button>


        <!-- Menu -->
        
        <div
            class="collapse navbar-collapse"
            id="mainNavbar">
            
            <ul class="navbar-nav m-auto">

                <li class="nav-item">
                    
                    <a
                        class="nav-link text-white"
                        href="index.php">
                        
                        Home
                        
                    </a>
                    
                </li>
                
                
                <!-- About -->
                
              <li class="nav-item dropdown">

                <button
                    class="nav-link dropdown-toggle text-white border-0 bg-transparent w-100 text-start"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">

                    About

                </button>

                <ul class="dropdown-menu">

                    <li>
                        <a
                            class="dropdown-item text-muted"
                            href="<?= BASE_URL ?>about.php#contentId">
                            DNOAI
                        </a>
                    </li>

                    <!-- <li>
                        <a
                            class="dropdown-item text-muted"
                            href="<?= BASE_URL ?>about.php#stakeholdersId">
                            Cable TV Industry
                        </a>
                    </li> -->

                    <li>
                        <a
                            class="dropdown-item text-muted"
                            href="<?= BASE_URL ?>about.php#visionId">
                            Vision & Mission
                        </a>
                    </li>

                    <li>
                        <a
                            class="dropdown-item"
                            href="<?= BASE_URL ?>president-message.php">
                            President's Message
                        </a>
                    </li>

                    <li>
                        <a
                            class="dropdown-item"
                            href="<?= BASE_URL ?>leadership.php">
                            Leadership
                        </a>
                    </li>

                    <li>
                        <a
                            class="dropdown-item"
                            href="#">
                            Coming Soon
                        </a>
                    </li>

                </ul>

            </li>
                
                <!-- Membership -->
                
               <li class="nav-item dropdown">
                    
                        <button
                            class="nav-link dropdown-toggle text-white border-0 bg-transparent w-100 text-start"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            Membership

                        </button>
                       
                

                    <ul class="dropdown-menu">

                        <li>
                            <a
                            class="dropdown-item"
                                href="<?= BASE_URL ?>members.php#criteriaId">
                                
                                Membership Criteria
                                
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= BASE_URL ?>members.php#advantagesId">
                                
                                Membership Advantages

                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="<?= BASE_URL ?>members.php#membersId">
                                
                                Members

                            </a>
                        </li>
                      
                        
                    </ul>

                </li>
                
                
                <!-- Resources -->
                
                <li class="nav-item dropdown">
                    
                        <button
                            class="nav-link dropdown-toggle text-white border-0 bg-transparent w-100 text-start"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            Resources

                        </button>
                                           
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a
                                class="dropdown-item"
                                href="#">
                                
                                Coming Soon
                                
                            </a>
                        </li>
                        
                        <li>
                            <a
                            class="dropdown-item"
                            href="#">

                               
                             Coming Soon

                            </a>
                        </li>

                        <li>
                            <a
                            class="dropdown-item"
                                href="#">
                                
                                Coming Soon
                                
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="#">

                                Coming Soon

                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="#">

                                Coming Soon

                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="#">

                                Coming Soon

                            </a>
                        </li>
                        
                    </ul>
                    
                </li>
                
                
                <!-- Contact -->
                
                <li class="nav-item">
                    
                    <a
                    class="nav-link text-white"
                    href="<?= BASE_URL ?>contact.php">
                    
                    Contact
                    
                </a>

                </li>
                
            </ul>

        </div>
        <div class="d-none d-lg-flex gap-4">
            <!-- <a href="#">
                <i class="bi bi-twitter-x text-white"></i>
            </a>
            <a href="#">
                <i class="bi bi-linkedin bg-white"></i>
            </a> -->
            <!-- <span class="text-white">

                Coming Soon
            </span> -->
        </div>
    </div>

</nav>
</header>