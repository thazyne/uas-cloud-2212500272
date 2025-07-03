<?php
require 'dbconn.php';

if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['email'])) {
    $nim = $conn->real_escape_string($_POST['nim']);
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $conn->query("INSERT INTO mahasiswa (nim, nama, email) VALUES ('$nim', '$nama', '$email')");
}

$result = $conn->query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-8">
    <h1 class="text-3xl font-bold mb-6">Daftar Mahasiswa</h1>
    <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6 w-full max-w-md">
        <div class="mb-4">
            <input type="text" name="nim" placeholder="NIM" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <input type="text" name="nama" placeholder="Nama" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <input type="email" name="email" placeholder="Email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah Mahasiswa</button>
    </form>
    <ul class="w-full max-w-md">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <li class="bg-white shadow rounded px-4 py-2 mb-2 flex flex-col md:flex-row md:justify-between">
                <span><?php echo htmlspecialchars($row['nim']) . ' - ' . htmlspecialchars($row['nama']) . ' - ' . htmlspecialchars($row['email']); ?></span>
            </li>
        <?php } ?>
    </ul>
</body>
</html>