// Sweet Alert
$(document).ready(function () {
    const berhasil = $(".flash-data").data("berhasil");
    const gagal = $(".flash-data").data("gagal");

    const Toast = Swal.mixin({
        toast: true,
        position: "top",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    if (berhasil) {
        Toast.fire({
            icon: "success",
            title: berhasil,
        });
    }
    if (gagal) {
        Toast.fire({
            icon: "error",
            title: gagal,
        });
    }
});

// Alert Delete
$(document).on("click", ".btn-delete", function (e) {
    e.preventDefault();
    var form = $(this).closest("form");
    // var url = form.attr("action");

    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Data ini akan dihapus secara permanen!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
        showLoaderOnConfirm: true,
        preConfirm: () => {
            return new Promise((resolve) => {
                form.submit();
            });
        },
    });
});

// FormUpload
const formUpload = document.getElementById("formUpload");
const btnSimpan = document.getElementById("btnSimpan");
const btnLoading = document.getElementById("btnLoading");

if (formUpload) {
    formUpload.addEventListener("submit", function (e) {
        btnSimpan.style.display = "none";
        btnLoading.style.display = "inline-block";
    });
}
