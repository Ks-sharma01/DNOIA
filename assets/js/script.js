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

// const membershipForm = document.getElementById("membershipForm");

// if (membershipForm) {

//     const fullName = document.getElementById("fullName");

//     const email = document.getElementById("email");

//     const phone = document.getElementById("phone");

//     const message = document.getElementById("message");


//     const fullNameError = document.getElementById("fullNameError");

//     const emailError = document.getElementById("emailError");

//     const phoneError = document.getElementById("phoneError");

//     const messageError = document.getElementById("messageError");


//     // FULL NAME

//     function validateFullName() {

//         const value = fullName.value.trim();

//         fullNameError.textContent = "";

//         if (value === "") {

//             fullNameError.textContent =
//                 "Full name is required.";

//             return false;
//         }

//         if (value.length < 2) {

//             fullNameError.textContent =
//                 "Please enter at least 2 characters.";

//             return false;
//         }

//         if (!/^[a-zA-Z\s.'-]+$/.test(value)) {

//             fullNameError.textContent =
//                 "Please enter a valid name.";

//             return false;
//         }

//         return true;
//     }


//     // EMAIL

//     function validateEmail() {

//         const value = email.value.trim();

//         emailError.textContent = "";

//         if (value === "") {

//             emailError.textContent =
//                 "Email is required.";

//             return false;
//         }

//         const emailPattern =
//             /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

//         if (!emailPattern.test(value)) {

//             emailError.textContent =
//                 "Please enter a valid email address.";

//             return false;
//         }

//         return true;
//     }


//     // PHONE

//     function validatePhone() {

//         const value = phone.value.trim();

//         phoneError.textContent = "";

//         if (value === "") {

//             phoneError.textContent =
//                 "Phone number is required.";

//             return false;
//         }

//         if (!/^\d+$/.test(value)) {

//             phoneError.textContent =
//                 "Phone number must contain only digits.";

//             return false;
//         }

//         if (value.length !== 10) {

//             phoneError.textContent =
//                 "Please enter a 10-digit mobile number.";

//             return false;
//         }

//         if (!/^[6-9]\d{9}$/.test(value)) {

//             phoneError.textContent =
//                 "Please enter a valid mobile number.";

//             return false;
//         }

//         return true;
//     }

//     // MESSAGE

//     function validateMessage() {

//         const value = message.value.trim();

//         messageError.textContent = "";

//         if (value === "") {

//             messageError.textContent =
//                 "Message is required.";

//             return false;
//         }

//         return true;
//     }

//     // PHONE - ONLY NUMBERS

//     phone.addEventListener("input", function () {

//         this.value = this.value
//             .replace(/\D/g, "")
//             .slice(0, 10);

//     });


//     // VALIDATE WHILE USER TYPES

//     fullName.addEventListener(
//         "input",
//         validateFullName
//     );

//     email.addEventListener(
//         "input",
//         validateEmail
//     );

//     phone.addEventListener(
//         "input",
//         validatePhone
//     );

//     message.addEventListener(
//         "input",
//         validateMessage
//     );


//     // FORM SUBMIT

//     membershipForm.addEventListener(
//         "submit",
//         function (e) {

//             e.preventDefault();


//             const validName =
//                 validateFullName();

//             const validEmail =
//                 validateEmail();

//             const validPhone =
//                 validatePhone();

//             const validMessage =
//                 validateMessage();


//             // Stop if any field is invalid
//             if (
//                 !validName ||
//                 !validEmail ||
//                 !validPhone ||
//                 !validMessage
//             ) {

//                 return;
//             }

//             // SEND FORM

//             const button =
//                 document.getElementById("submitBtn");

//             const originalText =
//                 button.innerHTML;


//             button.disabled = true;

//             button.innerHTML = `
//                 Sending...
//                 <span class="ms-2">⏳</span>
//             `;


//             const formData =
//                 new FormData(membershipForm);


//             fetch("send-mail.php", {

//                 method: "POST",

//                 body: formData

//             })

//             .then(response => response.json())

//                 .then(data => {

//                 if (data.success) {

//                     // Reset form
//                     membershipForm.reset();

//                     // Show success toast
//                     showToast(
//                         "Success",
//                         "Form has been submitted successfully."
//                     );

//                 } else {

//                     showToast(
//                         "Error",
//                         data.message
//                     );

//                 }

//             })

//             .catch(error => {

//                 console.error(error);

//                 showToast(
//                     "Error",
//                     "Unable to send your enquiry. Please try again."
//                 );

//             })

//             .finally(() => {

//                 button.disabled = false;

//                 button.innerHTML = originalText;

//             });

//         }
//     );

// }

// function showToast(title, message) {

//     const toastElement =
//         document.getElementById("formToast");

//     const toastTitle =
//         document.getElementById("toastTitle");

//     const toastMessage =
//         document.getElementById("toastMessage");


//     if (!toastElement) {
//         return;
//     }


//     toastTitle.textContent = title;

//     toastMessage.textContent = message;


//     const toast =
//         bootstrap.Toast.getOrCreateInstance(
//             toastElement,
//             {
//                 delay: 4000
//             }
//         );


//     toast.show();
// }


// membership form

let currentStep = 0;

const steps = document.querySelectorAll(".form-step");
const progressBar = document.getElementById("progressBar");
const progressSteps = document.querySelectorAll(".step");

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const submitBtn = document.getElementById("submitBtn");


function showStep(step) {

    steps.forEach((item, index) => {
        item.classList.toggle(
            "active",
            index === step
        );
    });


    progressSteps.forEach((item, index) => {

        item.classList.remove("active");

        if (index < step) {
            item.classList.add("completed");
        }

        if (index === step) {
            item.classList.add("active");
        }

    });


    const progress = ((step + 1) / steps.length) * 100;

    progressBar.style.width = progress + "%";


    prevBtn.style.display = step === 0 ? "none" : "inline-block";


    nextBtn.style.display = step === steps.length - 1 ? "none" : "inline-block";


    submitBtn.style.display = step === steps.length - 1 ? "inline-block" : "none";


    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}


// ********************* PART A **********************************

const membershipForm = document.getElementById("membershipForm");

if(membershipForm){

    
    const legal_Name = document.getElementById("legal_name_network");
    const legal_Name_Err = document.getElementById("legal_name_network_err");

    const mso_name = document.getElementById("mso_name");
const mso_name_err = document.getElementById("mso_name_err");

const organization_type = document.getElementById("organization_type");
const organization_type_err = document.getElementById("organization_type_err");

const incorporation_date = document.getElementById("incorporation_date");
const incorporation_date_err = document.getElementById("incorporation_date_err");

const registered_address = document.getElementById("registered_address");
const registered_address_err = document.getElementById("registered_address_err");

const city = document.getElementById("city");
const city_err = document.getElementById("city_err");

const state = document.getElementById("state");
const state_err = document.getElementById("state_err");

const pin_code = document.getElementById("pin_code");
const pin_code_err = document.getElementById("pin_code_err");

const telephone = document.getElementById("telephone");
const telephone_err = document.getElementById("telephone_err");

const email = document.getElementById("email");
const email_err = document.getElementById("email_err");

// ********************* PART A **********************************
// LEGAL NAME

function validateLegalName() {
    
    const value = legal_Name.value.trim();
    
    legal_Name_Err.textContent = "";
    
    if (value === "") {
        
        legal_Name_Err.textContent =
        "Legal Name is required.";
        
        return false;
    }
    
    return true;
}

// MSO NAME

function validateMSOName() {
    
    const value = mso_name.value.trim();
    
    mso_name_err.textContent = "";
    
    if (value === "") {
        
        mso_name_err.textContent =
        "MSO Name is required.";
        
        return false;
    }
    
    return true;
}


// ORGANIZATION TYPE

function validateConstitutionofOrganization() {
    
    const value = organization_type.value;
    
    organization_type_err.textContent = "";
    
    if (value === "") {
        
        organization_type_err.textContent =
        "Please select constitution";
        
        return false;
    }
    
    return true;
}


// DATE OF INCORPORATION

function validateDateofIncorporation() {
    
    const value = incorporation_date.value;
    
    incorporation_date_err.textContent = "";
    
    if (!value) {
        
        incorporation_date_err.textContent =
        "Please select date.";
        
        return false;
    }
    
    // Prevent future date
    const today = new Date().toISOString().split("T")[0];
    
    if (value > today) {
        
        incorporation_date_err.textContent =
        "Date of incorporation cannot be in the future.";
        
        return false;
    }
    
    return true;
}


// REGISTERED ADDRESS

function validatePrincipalOfficeAddress() {
    
    const value = registered_address.value.trim();
    
    registered_address_err.textContent = "";
    
    if (value === "") {
        
        registered_address_err.textContent =
        "Address is required.";
        
        return false;
    }
    
    return true;
}


// CITY

function validateCity() {
    
    const value = city.value.trim();
    
    city_err.textContent = "";
    
    if (value === "") {
        
        city_err.textContent =
        "City is required.";
        
        return false;
    }
    
    return true;
}


// STATE

function validateState() {
    
    const value = state.value.trim();
    
    state_err.textContent = "";
    
    if (value === "") {
        
        state_err.textContent =
        "State is required.";
        
        return false;
    }
    
    return true;
}


// PIN CODE

function validatePincode() {
    
    const value = pin_code.value.trim();
    
    pin_code_err.textContent = "";
    
    if (value === "") {
        
        pin_code_err.textContent =
        "PIN code is required.";
        
        return false;
    }
    
    if (!/^[0-9]{6}$/.test(value)) {
        
        pin_code_err.textContent =
        "PIN code must be exactly 6 digits.";
        
        return false;
    }
    
    return true;
}


// TELEPHONE / MOBILE

function validateTelephone() {
    
    const value = telephone.value.trim();
    
    telephone_err.textContent = "";
    
    if (value === "") {
        telephone_err.textContent = "Telephone no. is required";
        return false;
        
    }
    
    if (!/^[0-9]+$/.test(value)) {
        
        telephone_err.textContent =
        "Mobile number must contain only digits.";
        
        return false;
    }
    
    if (value.length !== 10) {
        
        telephone_err.textContent =
        "Please enter a 10-digit mobile number.";
        
        return false;
    }
    
    if (!/^[6-9][0-9]{9}$/.test(value)) {
        
        telephone_err.textContent =
        "Please enter a valid mobile number.";
        
        return false;
    }
    
    return true;
}


// EMAIL

function validateEmail() {
    
    const value = email.value.trim();
    
    email_err.textContent = "";
    
    if (value === "") {
        
        return true;
    }
    
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    
    if (!emailPattern.test(value)) {
        
        email_err.textContent =
        "Please enter a valid email address.";
        
        return false;
    }
    return true;
}



// VALIDATE WHILE USER TYPES       

legal_Name.addEventListener(
    "input",
    validateLegalName
);

mso_name.addEventListener(
    "input",
    validateMSOName
);

organization_type.addEventListener(
    "change",
    validateConstitutionofOrganization
);

incorporation_date.addEventListener(
    "change",
    validateDateofIncorporation
);

registered_address.addEventListener(
    "input",
    validatePrincipalOfficeAddress
);

city.addEventListener(
    "input",
    validateCity
);

state.addEventListener(
    "input",
    validateState
);

pin_code.addEventListener(
    "input",
    validatePincode
);

telephone.addEventListener(
    "input",
    validateTelephone
);

email.addEventListener(
    "input",
    validateEmail
);


// ********************* PART B **********************************

const representative_name = document.getElementById("representative_name");
const representative_name_err = document.getElementById("representative_name_err");

const father_name = document.getElementById("father_name");
const father_name_err = document.getElementById("father_name_err");

const designation = document.getElementById("designation");
const designation_err = document.getElementById("designation_err");

const correspondence_address = document.getElementById("correspondence_address");
const correspondence_address_err = document.getElementById("correspondence_address_err");

const representative_mobile = document.getElementById("representative_mobile");
const representative_mobile_err = document.getElementById("representative_mobile_err");

const representative_email = document.getElementById("representative_email");
const representative_email_err = document.getElementById("representative_email_err");

function validateRepresentativeName() {
    
    const value = representative_name.value.trim();
    
    representative_name_err.textContent = "";
    
    if (value === "") {
        
        representative_name_err.textContent =
        "Representative name is required.";
        
        return false;
    }
    
    return true;
}

function validateFatherName() {
    
    const value = father_name.value.trim();
    
    father_name_err.textContent = "";
    
    if (value === "") {
        
        father_name_err.textContent = "Father name is required.";
        
        return false;
    }
    
    return true;
}

function validateDesignation() {
    
    const value = designation.value.trim();
    
    designation_err.textContent = "";
    
    if (value === "") {

        designation_err.textContent = "Designation is required.";
        
        return false;
    }
    
    return true;
}

function validateCorrespondenceAddress() {
    
    const value = correspondence_address.value.trim();
    
    correspondence_address_err.textContent = "";
    
    if (value === "") {
        
        correspondence_address_err.textContent = "Correspondence Address is required.";
        
        return false;
    }
    
    return true;
}

// MOBILE

function validateRepresentativeMobile() {
    
    const value = representative_mobile.value.trim();
    
    representative_mobile_err.textContent = "";
    
    if (value === "") {
        representative_mobile_err.textContent = "Mobile is required";
        
        return false;
    }
    
    if (!/^[0-9]+$/.test(value)) {
        
        representative_mobile_err.textContent = "Mobile number must contain only digits.";
        
        return false;
    }
    
    if (value.length !== 10) {
        
        representative_mobile_err.textContent = "Please enter a 10-digit mobile number.";
        
        return false;
    }
    
    if (!/^[6-9][0-9]{9}$/.test(value)) {
        
        representative_mobile_err.textContent = "Please enter a valid mobile number.";
        
        return false;
    }
    
    return true;
}


// EMAIL

function validateRepresentativeEmail() {
    
    const value = representative_email.value.trim();
    
    representative_email_err.textContent = "";
    
    if (value === "") {
        
        representative_email_err.textContent = "Email is required.";
        
        return false;
    }
    
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    
    if (!emailPattern.test(value)) {
        
        representative_email_err.textContent = "Please enter a valid email address.";
        
        return false;
    }
    
    return true;
}

representative_name.addEventListener(
    "input",
    validateRepresentativeName
);
father_name.addEventListener(
    "input",
    validateFatherName
);
designation.addEventListener(
    "input",
    validateDesignation
);
correspondence_address.addEventListener(
    "input",
    validateCorrespondenceAddress
);
representative_mobile.addEventListener(
    "input",
    validateRepresentativeMobile
);
representative_email.addEventListener(
    "input",
    validateRepresentativeEmail
);



// ********************* PART C **********************************

function validateNatureOfBusiness() {

    const selected = document.querySelectorAll(
        '.business-checkbox:checked'
    );

    const error = document.getElementById(
        "natureOfBusiness_err"
    );

    if (selected.length === 0) {

        error.textContent = "Please select at least one business activity.";
        
        return false;
    }
    
    error.textContent = "";
    
    return true;
}

const operating_states = document.getElementById("operating_states");
const operating_states_err = document.getElementById("operating_states_err")

function validateMSOOperatingStates() {
    const value = operating_states.value.trim();
    operating_states_err.textContent = "";
    if (value === "") {
        
        operating_states_err.textContent = "Enter atleast one state";
        
        return false;
    }
    return true;
}

const operating_areas = document.getElementById("operating_areas")
const operating_areas_err = document.getElementById("operating_areas_err")

function validateMSOOperatingAreas() {
    const value = operating_areas.value.trim();
    operating_areas_err.textContent = "";
    if (value === "") {
        
        operating_areas_err.textContent = "Enter areas you covered";
        
        return false;
    }
    return true;
}

const active_subscribers = document.getElementById("active_subscribers")
const active_subscribers_err = document.getElementById("active_subscribers_err")

function validateActiveSubscriber() {
    const value = active_subscribers.value;
    active_subscribers_err.textContent = "";
    if (value === "") {
        
        active_subscribers_err.textContent = "Enter active subscribers";
        
        return false;
    }
    
    if (!/^[0-9]+$/.test(value)) {
        
        active_subscribers_err.textContent = "Enter only digits.";
        
        return false;
    }
    return true;
}

// Validate whenever a checkbox is checked/unchecked
document.querySelectorAll('.business-checkbox').forEach(function (checkbox) {
    checkbox.addEventListener('change', validateNatureOfBusiness);
});
operating_states.addEventListener("input", validateMSOOperatingStates)
operating_areas.addEventListener("input", validateMSOOperatingAreas)
active_subscribers.addEventListener("input", validateActiveSubscriber)


// ********************* PART D **********************************

const license_no = document.getElementById("license_no")
const license_no_err = document.getElementById("license_no_err")

function validateLicenseNo() {
    const value = license_no.value.trim()
    license_no_err.textContent = ""
    if (value === "") {
        license_no_err.textContent = "License no. is required"
        return false;
    }
    return true;
}

const license_issue_date = document.getElementById("license_issue_date")
const license_issue_date_err = document.getElementById("license_issue_date_err")

function validateIssueDate() {
    const value = license_issue_date.value
    license_issue_date_err.textContent = ""
    if (value === "") {
        license_issue_date_err.textContent = "Please select issue date"
        return false;
    }
    // Prevent future date
    const today = new Date().toISOString().split("T")[0];
    
    if (value > today) {
        
        license_issue_date_err.textContent =
        "Issue date cannot be in the future.";
        
        return false;
    }
    return true;
}

const license_expiry_date = document.getElementById("license_expiry_date")
const license_expiry_date_err = document.getElementById("license_expiry_date_err")

function validateExpiryDate() {
    const value = license_expiry_date.value
    license_expiry_date_err.textContent = ""
    if (value === "") {
        license_expiry_date_err.textContent = "Please select expiry date"
        return false;
    }
    // Prevent future date
    const today = new Date().toISOString().split("T")[0];
    
    if (value < today) {
        
        license_expiry_date_err.textContent = "Expiry date must be future date";
        
        return false;
    }
    return true;
}

const gst_no = document.getElementById("gst_no")
const gst_no_err = document.getElementById("gst_no_err")


function validateGSTNo() {
    const value = gst_no.value.trim()
    gst_no_err.textContent = ""
    if (value === "") {
        gst_no_err.textContent = "GST no. is required"
        return false;
    }
    if (!(value.length === 15)) {
        gst_no_err.textContent = "GST no. should have 15 characters"
        return false;
    }
    return true;
}


const pan_no = document.getElementById("pan_no")
const pan_no_err = document.getElementById("pan_no_err")


function validatePanNo() {
    const value = pan_no.value.trim()
    pan_no_err.textContent = ""
    if (value === "") {
        pan_no_err.textContent = "PAN no. is required"
        return false;
    }
    if (!(value.length === 10)) {
        pan_no_err.textContent = "PAN no. should have 10 characters"
        return false;
    }
    return true;
}

const aadhaar_no = document.getElementById("aadhaar_no")
const aadhaar_no_err = document.getElementById("aadhaar_no_err")


function validateAadharNo() {
    const value = aadhaar_no.value.trim()
    if (value === "") {
        aadhaar_no_err.textContent = "Aadhaar no. is required"
        return false;
    }
    if (!/^\d{12}$/.test(value)) {
        
        aadhaar_no_err.textContent = "Aadhaar no. should contain exactly 12 digits.";
        
        return false;
    }
    aadhaar_no_err.textContent = "";
    return true;
}


const legal_proceeding = document.querySelectorAll('input[name="legal_proceeding"]');
const details = document.getElementById("legal_proceeding_details");
function validateLegalProceeding() {
    const selected = document.querySelector('input[name="legal_proceeding"]:checked');
    const error = document.getElementById("legal_proceeding_err");
    const detailsError = document.getElementById("legal_proceeding_details_err");
    
    // No radio selected
    if (!selected) {
        error.textContent = "Please select Yes or No.";
        return false;
    }
    
    error.textContent = "";
    
    // Only validate details when Yes is selected
    if (selected.value === "Yes") {
        
        if (details.value.trim() === "") {
            detailsError.textContent = "Please provide brief particulars.";
            details.focus();
            return false;
        }
        
        detailsError.textContent = "";
    }
    
    // If No, no textarea validation
    if (selected.value === "No") {
        detailsError.textContent = "";
    }
    
    return true;
}

license_no.addEventListener("input", validateLicenseNo)
license_issue_date.addEventListener("change", validateIssueDate)
license_expiry_date.addEventListener("change", validateExpiryDate)
gst_no.addEventListener("input", validateGSTNo)
pan_no.addEventListener("input", validatePanNo)
aadhaar_no.addEventListener("input", validateAadharNo)
legal_proceeding.forEach(radio => {
    radio.addEventListener("change", validateLegalProceeding);
});
details.addEventListener("input", validateLegalProceeding)


// ********************* PART E **********************************

const membership_category = document.querySelectorAll('input[name="membership_category"]');
const other_category = document.getElementById("other_membership_category");
function validateMembershipCategory() {
    const selected = document.querySelector('input[name="membership_category"]:checked');
    const error = document.getElementById("membership_category_err");
    const other_category_err = document.getElementById("other_membership_category_err");
    
    // if no category selected
    if (!selected) {
        error.textContent = "Please select atleast one category";
        return false;
    }
    
    error.textContent = "";
    
    // Only validate details when Other category is selected
    if (selected.value === "Other") {
        
        if (other_category.value.trim() === "") {
            other_category_err.textContent = "Please provide category name";
            other_category.focus();
            return false;
        }
        
        other_category_err.textContent = "";
    }
    
    // If Membership category, no textarea validation
    if (selected.value === "MSO Member" || selected.value === "Associate") {
        other_category_err.textContent = "";
    }
    
    return true;
}

membership_category.forEach(radio => {
    radio.addEventListener("change", validateMembershipCategory);
});
other_category.addEventListener("input", validateMembershipCategory)


// ********************* PART F **********************************


const documentInputs = document.querySelectorAll(".document-input");

documentInputs.forEach(input => {
    input.addEventListener("change", validateDocuments);
});

function validateDocuments() {

    let isValid = true;
    
    documentInputs.forEach(input => {

        const error = document.getElementById(
            input.id + "_err"
        );

        error.textContent = "";
        
        // File required
        if (input.files.length === 0) {
            
            error.textContent =
            "Please upload " +
            input.closest(".document-row")
            .querySelector("strong")
            .textContent.trim() +
            ".";
            
            isValid = false;
            return;
        }
        
        const file = input.files[0];
        
        const allowedTypes = [
            "application/pdf",
            "image/jpeg",
            "image/png"
        ];

        if (!allowedTypes.includes(file.type)) {
            
            error.textContent =
            "Only PDF, JPG, JPEG and PNG files are allowed.";
            
            isValid = false;
            return;
        }
        
        const maxSize = 2 * 1024 * 1024;
        
        if (file.size > maxSize) {

            error.textContent =
            "File size should not exceed 2 MB.";
            
            isValid = false;
        }
    });

    return isValid;
}


// ********************* PART H **********************************

const declaration = document.getElementById("declaration");
const declaration_err = document.getElementById("declaration_err");

function validateDeclaration() {
    
    if (!declaration.checked) {
        
        declaration_err.textContent =
        "Please accept the declaration and undertaking.";
        
        return false;
    }
    
    declaration_err.textContent = "";
    return true;
}

// Remove error immediately when checked
declaration.addEventListener("change", function () {

    if (this.checked) {
        declaration_err.textContent = "";
    }
    
});

const signatory_name = document.getElementById("signatory_name");
const signatory_name_err = document.getElementById("signatory_name_err");

function validateSignatoryName() {
    
    const value = signatory_name.value.trim();
    
    signatory_name_err.textContent = "";
    
    if (value === "") {
        
        signatory_name_err.textContent = "Name is required.";
        
        return false;
    }
    
    return true;
}

const signatory_designation = document.getElementById("signatory_designation");
const signatory_designation_err = document.getElementById("signatory_designation_err");

function validateSignatoryDesignation() {
    
    const value = signatory_designation.value.trim();
    
    signatory_designation_err.textContent = "";
    
    if (value === "") {
        
        signatory_designation_err.textContent = "Designation is required.";
        
        return false;
    }
    
    return true;
}

const signatureInput = document.getElementById("signature");

signatureInput.addEventListener("change", validateSignatureFile);

function validateSignatureFile() {
    
    let isValid = true;
    
    const error = document.getElementById("signature_err");
    
    error.textContent = "";
    
    // File required
    if (signatureInput.files.length === 0) {
        
        error.textContent = "Please upload signature";
        
        isValid = false;
        return;
        
    }
    const file = signatureInput.files[0];
    
    const allowedTypes = [
            "application/pdf",
            "image/jpeg",
            "image/png"
        ];

        if (!allowedTypes.includes(file.type)) {

            error.textContent =
                "Only PDF, JPG, JPEG and PNG files are allowed.";
                
            isValid = false;
            return;
        }
        
        const maxSize = 2 * 1024 * 1024;
        
        if (file.size > maxSize) {
            
            error.textContent =
            "File size should not exceed 2 MB.";
            
            isValid = false;
        }
        
        
        return isValid;
    }
    
    const signatory_date = document.getElementById("signatory_date");
    const signatory_date_err = document.getElementById("signatory_date_err");
   
    function validateSignatoryDate() {

        const value = signatory_date.value;
        
        signatory_date_err.textContent = "";
        
        if (!value) {
            
            signatory_date_err.textContent = "Please select date.";
            
            return false;
        }
        
        // Prevent future date
        const today = new Date().toISOString().split("T")[0];
        
        if (value > today) {
            
            signatory_date_err.textContent = "Date cannot be in the future.";
            
            return false;
        }
        
        return true;
    }
    
    const signatory_place = document.getElementById("signatory_place");
    const signatory_place_err = document.getElementById("signatory_place_err");
    
    function validateSignatoryPlace() {
        
        const value = signatory_place.value.trim();
        
        signatory_place_err.textContent = "";
        
        if (value === "") {
            
            signatory_place_err.textContent = "Place is required.";
            
            return false;
        }
        
        return true;
    }
    
    signatory_name.addEventListener("input", validateSignatoryName)
    signatory_designation.addEventListener("input", validateSignatoryDesignation)
    signatory_date.addEventListener("change", validateSignatoryDate)
    signatory_place.addEventListener("input", validateSignatoryPlace)
    
    // VALIDATE CURRENT STEP
    
    function validateStep1() {
        const isLegalNameValid = validateLegalName();
        const isMSONameValid = validateMSOName();
        const isOrganizationTypeValid = validateConstitutionofOrganization();
        const isDateValid = validateDateofIncorporation();
        const isAddressValid = validatePrincipalOfficeAddress();
        const isCityValid = validateCity();
        const isStateValid = validateState();
        const isPincodeValid = validatePincode();
        const isTelephoneValid = validateTelephone();
        const isEmailValid = validateEmail();
        
        return (
        isLegalNameValid &&
        isMSONameValid &&
        isOrganizationTypeValid &&
        isDateValid &&
        isAddressValid &&
        isCityValid &&
        isStateValid &&
        isPincodeValid &&
        isTelephoneValid &&
        isEmailValid
    );
}

function validateStep2() {
    const isRepresentativeNameValid =
    validateRepresentativeName();
    
    const isRepresentativeFatherNameValid =
    validateFatherName();
    
    const isRepresentativeDesignationValid =
    validateDesignation();
    
    const isCorrespondenceAddressValid =
    validateCorrespondenceAddress();

    const isMobileValid =
    validateRepresentativeMobile();
    
    const isRepresentativeEmailValid =
    validateRepresentativeEmail();
    
    return (
        isRepresentativeNameValid &&
        isRepresentativeFatherNameValid &&
        isRepresentativeDesignationValid &&
        isCorrespondenceAddressValid &&
        isMobileValid &&
        isRepresentativeEmailValid
    );
}


function validateStep3() {
    const isNatureOfBusinessValid = validateNatureOfBusiness();
    const isOperatingMSOStatesValid = validateMSOOperatingStates();
    const isOperatingMSOAreasValid = validateMSOOperatingAreas();
    const isActiveSubscribersValid = validateActiveSubscriber()
    return (
        isNatureOfBusinessValid &&
        isOperatingMSOStatesValid &&
        isOperatingMSOAreasValid && isActiveSubscribersValid
    )
}

function validateStep4() {
    const isLicenseValid = validateLicenseNo();
    const isIssueDateValid = validateIssueDate();
    const isExpiryDateValid = validateExpiryDate();
    const isGSTNoValid = validateGSTNo();
    const isPanNoValid = validatePanNo();
    const isAadharNoValid = validateAadharNo();
    const isLegalProceedingValid = validateLegalProceeding();
    return (
        isLicenseValid && isIssueDateValid &&
        isExpiryDateValid && isGSTNoValid &&
        isPanNoValid && isAadharNoValid && isLegalProceedingValid
    )
}

function validateStep5() {
    const isCategorySelected = validateMembershipCategory();
    return isCategorySelected
}

function validateStep6() {
    const isDocumentValid = validateDocuments();
    return isDocumentValid
}

function validateStep8(){
    const isDeclarationAccepted = validateDeclaration();
    const isSignatoryNameValid = validateSignatoryName();
    const isSignatoryDesignationValid = validateSignatoryDesignation();
    const isSignatureValid = validateSignatureFile();
    const isSignatoryDateValid = validateSignatoryDate();
    const isSignatoryPlaceValid = validateSignatoryPlace();
    
    return (
        isDeclarationAccepted && isSignatoryNameValid &&
        isSignatoryDesignationValid && isSignatureValid &&
        isSignatoryDateValid && isSignatoryPlaceValid
    ) 
}

// CHANGE STEP

function changeStep(direction) {
    
    // NEXT button
    if (direction === 1) {
        
        // Validate Step 1 before moving to Step 2
        if (currentStep === 0) {
            
            if (!validateStep1()) {
                return;
            }
        }
        
        // Validate Step 2 before moving to Step 3
        if (currentStep === 1) {
            
            if (!validateStep2()) {
                return;
            }
        }
        // Validate Step 3 before moving to Step 4
        if (currentStep === 2) {
            
            if (!validateStep3()) {
                return;
            }
        }
        // Validate Step 4 before moving to Step 5
        if (currentStep === 3) {
            
            if (!validateStep4()) {
                return;
            }
        }
        // Validate Step 5 before moving to Step 6
        if (currentStep === 4) {
            
            if (!validateStep5()) {
                return;
            }
        }
        // Validate Step 6 before moving to Step 7
        if (currentStep === 5) {
            
            if (!validateStep6()) {
                return;
            }
        }
        // Validate Step 8 before moving to Step 9
        if (currentStep === 7) {
            
            if (!validateStep8()) {
                return;
            }
        }
        
    }
    
    // Move one step
    currentStep += direction;
    
    // Prevent going below first step
    if (currentStep < 0) {
        currentStep = 0;
    }
    
    // Prevent going beyond last step
    if (currentStep >= steps.length) {
        currentStep = steps.length - 1;
    }
    
    showStep(currentStep);
}


// INITIAL STEP

showStep(currentStep);


// FORM SUBMIT

document.getElementById("membershipForm")
.addEventListener("submit", function (e) {
    
    if (!(validateStep1() && validateStep2() && validateStep3() && validateStep4() && 
    validateStep4() && validateStep5() && validateStep6() && validateStep8()) ) {
        
        e.preventDefault();
        
        return;
    }
    
    submitBtn.disabled = true;
    submitBtn.innerHTML = "Submitting...";
});
}