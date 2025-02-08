document.addEventListener('DOMContentLoaded', () => {
    // Like functionality
    document.querySelectorAll('.like-button').forEach((button) => {
        button.addEventListener('click', () => {
            button.textContent = button.textContent === '❤️ Like' ? '💖 Liked' : '❤️ Like';
        });
    });

    // Add comment functionality
    document.querySelectorAll('.add-comment').forEach((button) => {
        button.addEventListener('click', (e) => {
            const textarea = e.target.previousElementSibling;
            const commentText = textarea.value.trim();
            if (commentText) {
                const commentList = e.target.nextElementSibling;
                const commentItem = document.createElement('li');
                commentItem.textContent = commentText;

                // Add delete option
                const deleteBtn = document.createElement('button');
                deleteBtn.textContent = 'Hapus';
                deleteBtn.addEventListener('click', () => commentItem.remove());

                commentItem.appendChild(deleteBtn);
                commentList.appendChild(commentItem);
                textarea.value = '';
            }
        });
    });

    // Add photo functionality
    const addPhotoForm = document.getElementById('add-photo-form');
    addPhotoForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Tambah foto berhasil (implementasi detail dapat ditambahkan)');
    });
});
