<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama       = trim($_POST['nama'] ?? '');
    $nis        = trim($_POST['nis'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $jurusan    = $_POST['jurusan'] ?? '';
    $perusahaan = $_POST['perusahaan'] ?? '';
    $alasan     = trim($_POST['alasan'] ?? '');

    $tech_stack     = $_POST['tech_stack'] ?? [];
    $tech_stack_str = !empty($tech_stack) ? implode(", ", $tech_stack) : "Tidak ada";

    try {
        $sql = "INSERT INTO pendaftaran (nama, nis, email, jurusan, perusahaan, tech_stack, alasan) 
                VALUES (:nama, :nis, :email, :jurusan, :perusahaan, :tech_stack, :alasan)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nama'       => $nama,
            ':nis'        => $nis,
            ':email'      => $email,
            ':jurusan'    => $jurusan,
            ':perusahaan' => $perusahaan,
            ':tech_stack' => $tech_stack_str,
            ':alasan'     => $alasan
        ]);

?>
        <!DOCTYPE html>
        <html lang="id">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hasil Pendaftaran PKL</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f9;
                    margin: 40px;
                }

                .result-card {
                    max-width: 500px;
                    background: #ffffff;
                    padding: 25px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    margin: 0 auto;
                }

                h2 {
                    color: #4CAF50;
                    text-align: center;
                }

                .data-row {
                    margin-bottom: 12px;
                    border-bottom: 1px solid #eee;
                    padding-bottom: 8px;
                }

                .label {
                    font-weight: bold;
                    color: #555;
                }

                .back-btn {
                    display: inline-block;
                    margin-top: 15px;
                    padding: 10px 15px;
                    background-color: #4CAF50;
                    color: white;
                    text-decoration: none;
                    border-radius: 4px;
                    text-align: center;
                }
            </style>
        </head>

        <body>

            <div class="result-card">
                <h2>Pendaftaran Berhasil Disimpan!</h2>

                <div class="data-row"><span class="label">Nama Lengkap:</span> <?php echo htmlspecialchars($nama); ?></div>
                <div class="data-row"><span class="label">NIS:</span> <?php echo htmlspecialchars($nis); ?></div>
                <div class="data-row"><span class="label">Email:</span> <?php echo htmlspecialchars($email); ?></div>
                <div class="data-row"><span class="label">Jurusan:</span> <?php echo htmlspecialchars($jurusan); ?></div>
                <div class="data-row"><span class="label">Pilihan Perusahaan:</span> <?php echo htmlspecialchars($perusahaan); ?></div>
                <div class="data-row"><span class="label">Tech Stack Dikuasai:</span> <?php echo htmlspecialchars($tech_stack_str); ?></div>
                <div class="data-row"><span class="label">Alasan:</span> <?php echo nl2br(htmlspecialchars($alasan)); ?></div>

                <a href="index.html" class="back-btn">Kembali ke Form</a>
            </div>

        </body>

        </html>
<?php

    } catch (PDOException $e) {
        echo "Gagal menyimpan data ke database: " . $e->getMessage();
    }
} else {
    header("Location: pendaftaran.html");
    exit();
}
?>