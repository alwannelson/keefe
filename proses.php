<?php
include('koneksi.php');

// Set header agar mengirimkan response JSON
header('Content-Type: application/json');

if (isset($_POST['name']) && isset($_POST['qty']) && isset($_POST['reason'])) {
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $instansi_name = isset($_POST['instansi_name']) ? mysqli_real_escape_string($koneksi, $_POST['instansi_name']) : '';
    $qty = (int) $_POST['qty'];
    $reason = mysqli_real_escape_string($koneksi, $_POST['reason']);

    if ($name != "" && $qty > 0 && $reason != "") {
        $sql = "INSERT INTO tb_bk_tm (name, instansi_name, qty, reason) 
                VALUES ('$name', '$instansi_name', '$qty', '$reason')";
        $simpan = mysqli_query($koneksi, $sql);

        if ($simpan) {
            echo json_encode(['message' => 'Data berhasil tersimpan ke Database!']);
        } else {
            echo json_encode(['message' => 'Gagal menyimpan data: ' . mysqli_error($koneksi)]);
        }
    } else {
        echo json_encode(['message' => 'Harap isi semua field dengan benar.']);
    }
} else {
    echo json_encode(['message' => 'Harap isi semua field yang diperlukan.']);
}
?>
<script>
$(document).ready(function () {
    $('#guestForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "#proses.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                if (response.message) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: response.message,
                        icon: 'success',
                    }).then(function () {
                        $('#guestForm')[0].reset();
                        $('#input_instansi').hide();
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error: ', status, error);
                Swal.fire({
                    title: 'Error!',
                    text: 'Terjadi kesalahan saat menyimpan data.',
                    icon: 'error'
                });
            }
        });
    });
});
</script>