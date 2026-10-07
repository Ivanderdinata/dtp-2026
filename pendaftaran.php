<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran PKL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 40px;
        }

        .container {
            max-width: 500px;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 5px;
        }

        .radio-group label,
        .checkbox-group label {
            font-weight: normal;
            cursor: pointer;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Form Pendaftaran PKL</h2>
        <form action="proses.php" method="POST">

            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>


            <div class="form-group">
                <label for="nis">NIS (Nomor Induk Siswa):</label>
                <input type="number" id="nis" name="nis" required>
            </div>


            <div class="form-group">
                <label for="email">Email Siswa:</label>
                <input type="email" id="email" name="email" required>
            </div>


            <div class="form-group">
                <label>Kompetensi Keahlian / Jurusan:</label>
                <div class="radio-group">
                    <label><input type="radio" name="jurusan" value="RPL" required> Rekayasa Perangkat Lunak (RPL)</label>
                    <label><input type="radio" name="jurusan" value="TKJ"> Teknik Komputer dan Jaringan (TKJ)</label>
                    <label><input type="radio" name="jurusan" value="MM"> Multimedia (MM)</label>
                </div>
            </div>


            <div class="form-group">
                <label for="perusahaan">Pilihan Perusahaan PKL:</label>
                <select id="perusahaan" name="perusahaan" required>
                    <option value="">-- Pilih Perusahaan --</option>
                    <option value="PT Teknologi Nusantara">PT Teknologi Nusantara</option>
                    <option value="CV Digital Solusindo">CV Digital Solusindo</option>
                    <option value="PT Media Kreatif Studio">PT Media Kreatif Studio</option>
                </select>
            </div>


            <div class="form-group">
                <label>Kompetensi / Tech Stack yang Dikuasai:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="tech_stack[]" value="HTML/CSS"> HTML / CSS</label>
                    <label><input type="checkbox" name="tech_stack[]" value="JavaScript"> JavaScript</label>
                    <label><input type="checkbox" name="tech_stack[]" value="PHP"> PHP & MySQL</label>
                    <label><input type="checkbox" name="tech_stack[]" value="Networking"> Jaringan / Networking</label>
                    <label><input type="checkbox" name="tech_stack[]" value="UI/UX Design"> UI/UX Design</label>
                </div>
            </div>


            <div class="form-group">
                <label for="alasan">Alasan Memilih Perusahaan:</label>
                <textarea id="alasan" name="alasan" rows="4" required></textarea>
            </div>

            <button type="submit" name="daftar">Daftar PKL Sekarang</button>
        </form>
    </div>

</body>

</html>