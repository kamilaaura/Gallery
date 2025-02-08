<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Produk JH</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Reset style dasar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa;
        }
        
        /* Header */
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        header .back-link,
        header .add-photo-link {
            color: #ddd;
            text-decoration: none;
            margin: 0 0.5rem;
            font-size: 0.9rem;
        }

        header .add-photo-link {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
        }

        header .add-photo-link:hover {
            background-color: #218838;
        }

/* Grid Galeri */
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Lebar kolom minimal 300px */
    gap: 20px; /* Jarak antar foto */
    padding: 1rem;
    max-width: 1400px; /* Lebar maksimum grid */
    margin: 0 auto; /* Tengah di layar */
}

.gallery-item {
    position: relative;
    overflow: hidden;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    height: 350px; /* Menentukan tinggi item galeri */
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Memastikan foto menutupi area */
    display: block;
    border-radius: 8px;
}


        .gallery-info {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            width: 100%;
            padding: 0.5rem;
            box-sizing: border-box;
            font-size: 0.9rem;
        }

        /* Tombol Like */
        .like-button {
            background: #ff4757;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-radius: 4px;
            margin-top: 0.5rem;
        }

        .like-button:hover {
            background: #ff6b81;
        }
    </style>
</head>
<body>
    <header>
        <h1>Galeri Produk JH</h1>
        <a href="../index.html" class="back-link">Kembali ke Album</a>
        <a href="../tambah-foto.html" class="add-photo-link">➕ Tambah Foto</a>
    </header>
    <main>
        <!-- Galeri -->
        <section class="gallery" id="gallery">
            <!-- Foto akan ditambahkan secara dinamis -->
        </section>
    </main>
    <script>
        // Foto yang akan dimasukkan ke galeri
        const photos = [
            { src: "../assets/images/a.jpg", description: "Produk A", price: "Rp 120.000" },
            { src: "../assets/images/b.jpg", description: "Produk B", price: "Rp 150.000" },
            { src: "../assets/images/c.jpg", description: "Produk C", price: "Rp 200.000" },
            { src: "../assets/images/d.jpg", description: "Produk D", price: "Rp 180.000" },
            { src: "../assets/images/e.jpg", description: "Produk E", price: "Rp 210.000" },
            { src: "../assets/images/f.jpg", description: "Produk F", price: "Rp 210.000" },
            { src: "../assets/images/g.jpg", description: "Produk G", price: "Rp 250.000" },
            { src: "../assets/images/h.jpg", description: "Produk G", price: "Rp 250.000" },
            { src: "../assets/images/i.jpg", description: "Produk G", price: "Rp 250.000" },
            { src: "../assets/images/j.jpg", description: "Produk G", price: "Rp 250.000" },
            { src: "../assets/images/k.jpg", description: "Produk G", price: "Rp 250.000" },
            { src: "../assets/images/l.jpg", description: "Produk H", price: "Rp 250.000" }
        ];

        // Menambahkan foto ke galeri
        const gallery = document.getElementById("gallery");

        photos.forEach(photo => {
            const galleryItem = document.createElement("div");
            galleryItem.classList.add("gallery-item");

            galleryItem.innerHTML = `
                <img src="${photo.src}" alt="${photo.description}">
                <div class="gallery-info">
                    <p>${photo.description}</p>
                    <p>${photo.price}</p>
                    <button class="like-button">❤️ Like</button>
                </div>
            `;
            gallery.appendChild(galleryItem);
        });
        
    </script>
</body>
</html>
