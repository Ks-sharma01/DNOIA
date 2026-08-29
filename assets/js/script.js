function openSectionFromHash() {

    const hash = window.location.hash;

    if (!hash) {
        return;
    }

    const target = document.getElementById(decodeURIComponent(hash.slice(1)));

    if (!target || !target.classList.contains("collapse")) {
        return;
    }

    const scrollToTarget = function () {
        setTimeout(function () {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }, 0);
    };

    const collapse = bootstrap.Collapse.getOrCreateInstance(target, {
        toggle: false
    });

    if (target.classList.contains("show")) {
        scrollToTarget();
        return;
    }

    target.addEventListener("shown.bs.collapse", scrollToTarget, { once: true });
    collapse.show();
}

document.addEventListener("DOMContentLoaded", openSectionFromHash);
window.addEventListener("hashchange", openSectionFromHash);

const membershipForm = document.getElementById("membershipForm");

if (membershipForm) {

    const fullName = document.getElementById("fullName");

    const email = document.getElementById("email");

    const phone = document.getElementById("phone");

    const message = document.getElementById("message");


    const fullNameError = document.getElementById("fullNameError");

    const emailError = document.getElementById("emailError");

    const phoneError = document.getElementById("phoneError");

    const messageError = document.getElementById("messageError");


    // FULL NAME

    function validateFullName() {

        const value = fullName.value.trim();

        fullNameError.textContent = "";

        if (value === "") {

            fullNameError.textContent =
                "Full name is required.";

            return false;
        }

        if (value.length < 2) {

            fullNameError.textContent =
                "Please enter at least 2 characters.";

            return false;
        }

        if (!/^[a-zA-Z\s.'-]+$/.test(value)) {

            fullNameError.textContent =
                "Please enter a valid name.";

            return false;
        }

        return true;
    }


    // EMAIL

    function validateEmail() {

        const value = email.value.trim();

        emailError.textContent = "";

        if (value === "") {

            emailError.textContent =
                "Email is required.";

            return false;
        }

        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

        if (!emailPattern.test(value)) {

            emailError.textContent =
                "Please enter a valid email address.";

            return false;
        }

        return true;
    }


    // PHONE

    function validatePhone() {

        const value = phone.value.trim();

        phoneError.textContent = "";

        if (value === "") {

            phoneError.textContent =
                "Phone number is required.";

            return false;
        }

        if (!/^\d+$/.test(value)) {

            phoneError.textContent =
                "Phone number must contain only digits.";

            return false;
        }

        if (value.length !== 10) {

            phoneError.textContent =
                "Please enter a 10-digit mobile number.";

            return false;
        }

        if (!/^[6-9]\d{9}$/.test(value)) {

            phoneError.textContent =
                "Please enter a valid mobile number.";

            return false;
        }

        return true;
    }

    // MESSAGE

    function validateMessage() {

        const value = message.value.trim();

        messageError.textContent = "";

        if (value === "") {

            messageError.textContent =
                "Message is required.";

            return false;
        }

        return true;
    }

    // PHONE - ONLY NUMBERS

    phone.addEventListener("input", function () {

        this.value = this.value
            .replace(/\D/g, "")
            .slice(0, 10);

    });


    // VALIDATE WHILE USER TYPES

    fullName.addEventListener(
        "input",
        validateFullName
    );

    email.addEventListener(
        "input",
        validateEmail
    );

    phone.addEventListener(
        "input",
        validatePhone
    );

    message.addEventListener(
        "input",
        validateMessage
    );


    // FORM SUBMIT

    membershipForm.addEventListener(
        "submit",
        function (e) {

            e.preventDefault();


            const validName =
                validateFullName();

            const validEmail =
                validateEmail();

            const validPhone =
                validatePhone();

            const validMessage =
                validateMessage();


            // Stop if any field is invalid
            if (
                !validName ||
                !validEmail ||
                !validPhone ||
                !validMessage
            ) {

                return;
            }

            // SEND FORM

            const button =
                document.getElementById("submitBtn");

            const originalText =
                button.innerHTML;


            button.disabled = true;

            button.innerHTML = `
                Sending...
                <span class="ms-2">⏳</span>
            `;


            const formData =
                new FormData(membershipForm);


            fetch("send-mail.php", {

                method: "POST",

                body: formData

            })

            .then(response => response.json())

                .then(data => {

                if (data.success) {

                    // Reset form
                    membershipForm.reset();

                    // Show success toast
                    showToast(
                        "Success",
                        "Form has been submitted successfully."
                    );

                } else {

                    showToast(
                        "Error",
                        data.message
                    );

                }

            })

            .catch(error => {

                console.error(error);

                showToast(
                    "Error",
                    "Unable to send your enquiry. Please try again."
                );

            })

            .finally(() => {

                button.disabled = false;

                button.innerHTML = originalText;

            });

        }
    );

}

function showToast(title, message) {

    const toastElement =
        document.getElementById("formToast");

    const toastTitle =
        document.getElementById("toastTitle");

    const toastMessage =
        document.getElementById("toastMessage");


    if (!toastElement) {
        return;
    }


    toastTitle.textContent = title;

    toastMessage.textContent = message;


    const toast =
        bootstrap.Toast.getOrCreateInstance(
            toastElement,
            {
                delay: 4000
            }
        );


    toast.show();
}