<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Akmal - Profesional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .profile-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #007bff;
        }

        .social-links {
            list-style: none;
            margin: 20px 0;
        }

        .social-links li {
            margin: 15px 0;
        }

        .social-links a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border: 2px solid #007bff;
            border-radius: 30px;
            display: inline-block;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: #007bff;
            color: white;
        }

        .add-link-form {
            margin-top: 30px;
        }

        input[type="text"] {
            padding: 10px;
            width: 70%;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <img src="gambar/ARTHA22.png" alt="Foto Profil" class="profile-img">
        <h1>Artha Sejahtera Komputindo</h1>
        <p>Di sini kami melayani jasa service dan penjualan laptop, komputer, printer. Kami juga menjual aksesoris dan sperpat kompunen komputer. Jika berminat silahkan hubungi nomor yang tersedia.</p>
        
        <ul class="social-links" id="links">
            <!-- Link default -->
            <li>
                <a href="https://wa.me/62085753150069" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </li>
        </ul>

        <div class="add-link-form">
            <input type="text" id="newLink" placeholder="Masukkan URL sosial media">
            <button onclick="addLink()">Tambah Link</button>
        </div>
    </div>

    <script>
        function addLink() {
            const url = document.getElementById('newLink').value;
            if(url) {
                const list = document.getElementById('links');
                const newItem = document.createElement('li');
                newItem.innerHTML = `
                    <a href="${url}" target="_blank">
                        <i class="fas fa-link"></i> ${new URL(url).hostname}
                    </a>
                `;
                list.appendChild(newItem);
                document.getElementById('newLink').value = '';
            }
        }
    </script>
</body>
</html>