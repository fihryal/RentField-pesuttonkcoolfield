// Modal Box
const rentModal = document.querySelector("#rent-modal");
const rentButtons = document.querySelectorAll(".rent-button");

rentButtons.forEach((btn) => {
    btn.onclick = (e) => {
        rentModal.style.display = "flex";
        e.preventDefault();
    };
});

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
