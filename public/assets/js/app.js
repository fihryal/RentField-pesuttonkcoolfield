// active nav link
const activePage = window.location.pathname;
const navLink = document
    .querySelectorAll(".navbar-custom-nav a")
    .forEach((link) => {
        if (link.href.includes(`${activePage}`)) {
            link.classList.add("active");
        }
    });

// Modal Box
const rentModal = document.querySelector("#rent-modal");
const rentButtons = document.querySelectorAll(".rent-button");

rentButtons.forEach((btn) => {
    btn.onclick = (e) => {
        rentModal.style.display = "flex";
        e.preventDefault();
    };
});

// Testimoni
let testimonials = document.querySelectorAll(".testimonial");
let currentIndex = 0;

function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
        if (i === index) {
            testimonial.style.display = "block";
        } else {
            testimonial.style.display = "none";
        }
    });
}

function nextTestimonial() {
    currentIndex++;
    if (currentIndex >= testimonials.length) {
        currentIndex = 0;
    }
    showTestimonial(currentIndex);
}

// Example of using setInterval() to automate the slideshow
setInterval(nextTestimonial, 5000); // Change testimonial every 5 seconds

// klik tombol close modal
document.querySelector(".modal .cancel-button").onclick = (e) => {
    rentModal.style.display = "none";
    e.preventDefault();
};

// klik di luar modal
window.onclick = (e) => {
    if (e.target === rentModal) {
        rentModal.style.display = "none";
    }
};

// validasi form *on progress*
const rentSubmitButton = document.querySelector(".rent-submit-button");
rentSubmitButton.disabled = true;
const form = document.querySelector("#rentForm");
const inputForms = document.querySelectorAll("#rentForm input");

form.addEventListener("keyup", function () {
    for (let i = 0; i < inputForms.length; i++) {
        if (inputForms[i].value.length !== 0) {
            rentSubmitButton.classList.remove("disabled");
            rentSubmitButton.classList.add("disabled");
        } else {
            return false;
        }
    }
    rentSubmitButton.disabled = false;
    rentSubmitButton.classList.remove("disabled");
});

// sending data when checkout clicked
rentSubmitButton.addEventListener("click", function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const data = new URLSearchParams(formData);
    const objData = Object.fromEntries(data);
    const message = formatMessage(objData);
    window.open(
        "https://wa.me/6281354064206?text=" + encodeURIComponent(message)
    );
});

// messages format untuk whatsapp
const formatMessage = (obj) => {
    return `Informasi penyewa
    Nama: ${obj.fname} ${obj.lname}
    Email: ${obj.email}
    No.hp: ${obj.phone}

    Rincian penyewaan
    Tanggal & waktu: ${obj.date}
    Durasi: ${obj.duration} menit
    Terima Kasih.
    `;
};
