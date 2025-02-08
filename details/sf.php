<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Produk JH</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        header .back-link {
            color: #ddd;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            padding: 2rem;
        }
        .gallery-item {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }
        .gallery-info {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
        .gallery-info button {
            background-color: #ff4757;
            color: white;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            border-radius: 4px;
            margin-bottom: 0.5rem;
        }
        .gallery-info button:hover {
            background-color: #ff6b81;
        }
        .comment-section {
            margin-top: 1rem;
        }
        .comment-section textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: none;
        }
        .comment-section .add-comment {
            background-color: #333;
            color: white;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            border-radius: 4px;
        }
        .comment-section ul {
            list-style: none;
            padding: 0;
        }
        .gallery-management {
            padding: 2rem;
            background-color: #fff;
            border-top: 1px solid #ddd;
        }
        .gallery-management form {
            display: grid;
            gap: 1rem;
        }
        .gallery-management input, .gallery-management textarea, .gallery-management button {
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .gallery-management button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .gallery-management button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1>Galeri Produk JH</h1>
        <a href="../index.html" class="back-link">Kembali ke Album</a>
    </header>
    <main>
        <section class="gallery">
            <div class="gallery-item">
                <img src="../assets/images/a.jpg" alt="Produk A">
                <div class="gallery-info">
                    <p>Deskripsi: Produk A</p>
                    <p>Harga: Rp 120.000</p>
                    <button class="like-button">❤️ Like</button>
                    <div class="comment-section">
                        <textarea placeholder="Tambahkan komentar"></textarea>
                        <button class="add-comment">Tambah</button>
                        <ul class="comments-list"></ul>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="../assets/images/b.jpg" alt="Produk B">
                <div class="gallery-info">
                    <p>Deskripsi: Produk B</p>
                    <p>Harga: Rp 150.000</p>
                    <button class="like-button">❤️ Like</button>
                    <div class="comment-section">
                        <textarea placeholder="Tambahkan komentar"></textarea>
                        <button class="add-comment">Tambah</button>
                        <ul class="comments-list"></ul>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img src="../assets/images/c.jpg" alt="Produk C">
                <div class="gallery-info">
                    <p>Deskripsi: Produk C</p>
                    <p>Harga: Rp 200.000</p>
                    <button class="like-button">❤️ Like</button>
                    <div class="comment-section">
                        <textarea placeholder="Tambahkan komentar"></textarea>
                        <button class="add-comment">Tambah</button>
                        <ul class="comments-list"></ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-management">
            <h2>Kelola Foto</h2>
            <form id="add-photo-form">
                <input type="file" accept="image/*">
                <textarea placeholder="Deskripsi produk"></textarea>
                <input type="text" placeholder="Harga produk">
                <button type="submit">Tambahkan Foto</button>
            </form>
        </section>
    </main>
    <script src="../js/gallery.js"></script>
</body>
</html>
