// SweetAlert2 Notification
const flashData = document.querySelector(".flash-data");
const successMessage = flashData.dataset.success;
const errorMessage = flashData.dataset.error;
if (successMessage) {
    Swal.fire({
        icon: "success",
        title: "Berhasil",
        text: successMessage,
        showConfirmButton: false,
        timer: 1500,
    });
} else if (errorMessage) {
    Swal.fire({
        icon: "error",
        title: "Gagal",
        text: errorMessage,
        showConfirmButton: false,
        timer: 1500,
    });
}
