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
        Contact
    </h1>

</div>


<div class="container-fluid px-lg-5 px-4">
        <div class="row">
                 <!-- CORPORATE OFFICE -->
            <div class="col-lg-4 col-md-6 col-12 p-4">
                
                <h5 class="">
                    Corporate Office
                </h5>
                
                <div class="footer-line"></div>
                
                    
                    <!-- Address -->
                    <div class="d-flex gap-1 mb-3">
                        
                        <div>
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        
                        <div>
                            236, Okhla Industrial Estate,<br>
                            Phase 3, New Delhi – 110020<br>
                            (INDIA)
                        </div>
                        
                    </div>
                    
                    
                    <!-- Email -->
                    <div class="d-flex gap-2">
                        
                        <div class="">
                            <i class="bi bi-envelope"></i>
                        </div>
                        
                        <div>
                            <a href="mailto:contact@dnoia.com">
                                contact@dnoia.com
                            </a>
                        </div>
                        
                    </div>

                    <div class="mt-3">
                    <h5>
                        Registered Office
                    </h5>
                        <div class="footer-line"></div>

                    </div>
                     <div class="d-flex gap-1 mb-3">
                        
                        <div class="">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        
                        <div>
                            236, Okhla Industrial Estate, Phase 3, New Delhi – 110020
                        </div>
                        
                    </div>
                                    
            </div>
            <div class="col-lg-8 col-md-6 col-12 p-2 shadow-sm">
                     
                <div class="container">

                    <div class="row rounded-2 overflow-hidden shadow-sm">
                        <!-- Right Form -->
                        <div class="col-lg-12 py-3 px-4">

                            <h3 class="fw-bold mb-2" style="color: #F2A03A;">
                                Write to us
                            </h3>

                            <small class="text-secondary">
                                * Fields marked with an asterisk are required
                            </small>

                <form id="membershipForm" novalidate>

                    <div class="row g-3 mt-2">

                        <!-- Full Name -->
                        <div class="col-md-4">

                            <label class="form-label fw-semibold">
                                Full Name *
                            </label>

                            <input
                                type="text"
                                name="full_name"
                                id="fullName"
                                class="form-control"
                                placeholder="Enter your name"
                                maxlength="100"
                                required
                            >

                            <span
                                id="fullNameError"
                                class="text-danger small">
                            </span>

                        </div>


                        <!-- Email -->
                        <div class="col-md-4">

                            <label class="form-label fw-semibold">
                                Email *
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Enter your email"
                                maxlength="150"
                                required
                            >

                            <span
                                id="emailError"
                                class="text-danger small">
                            </span>

                        </div>


                        <!-- Phone -->
                        <div class="col-md-4">

                            <label class="form-label fw-semibold">
                                Phone *
                            </label>

                            <input
                                type="tel"
                                name="phone"
                                id="phone"
                                class="form-control"
                                placeholder="Enter your phone"
                                maxlength="10"
                                inputmode="numeric"
                                required
                            >

                            <span
                                id="phoneError"
                                class="text-danger small">
                            </span>

                        </div>


                        <!-- Message -->
                        <div class="col-12">

                            <label class="form-label fw-semibold">
                                Message *
                            </label>

                            <textarea
                                name="message"
                                id="message"
                                class="form-control"
                                rows="4"
                                maxlength="1000"
                                placeholder="Enter your message"
                                required
                            ></textarea>

                            <span
                                id="messageError"
                                class="text-danger small">
                            </span>

                        </div>


                        <!-- Button -->
                        <div class="col-12">

                            <button
                                type="submit"
                                id="submitBtn"
                                class="btn btn-primary px-4 py-2 fw-semibold form-submit-btn">

                                Submit
                                <span class="ms-2">→</span>

                            </button>

                        </div>

                    </div>

                </form>

                <div class="toast-container position-fixed top-0 end-0 p-3">

                <div
                    id="formToast"
                    class="toast"
                    role="alert"
                    aria-live="assertive"
                    aria-atomic="true">

                    <div class="toast-header">

                        <strong class="me-auto" id="toastTitle">
                            DNOIA
                        </strong>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="toast"
                            aria-label="Close">
                        </button>

                    </div>

                    <div class="toast-body" id="toastMessage">
                        Form submitted successfully.
                    </div>

                </div>

            </div>

                        </div>

                    </div>

                </div>
                    
               
                
            </div>
                
        </div>
        
        
</div>

<div class="map-container mt-2">
    <iframe
        src="https://www.google.com/maps?q=236%20Okhla%20Industrial%20Estate%20Phase%203%20New%20Delhi%20110020&output=embed"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?php

require_once __DIR__ . '/includes/footer.php';

?>