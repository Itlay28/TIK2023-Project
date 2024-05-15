// Fungsi untuk mengubah warna teks secara acak
function changeTextColor() {
    const colors = ['#FF5733', '#FFC300', '#33FF57', '#33BFFF', '#D133FF'];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    const textElements = document.querySelectorAll('h1, h2, p'); // Pilih elemen teks
    textElements.forEach(element => {
        element.style.color = randomColor;
    });
}

// Fungsi untuk menampilkan pesan saat cursor di atas gambar
function showImageMessage() {
    const image = document.querySelector('.image-container img');
    image.addEventListener('mouseover', () => {
        alert('Anda sedang mengarahkan cursor ke gambar!');
    });
}

// Fungsi untuk menampilkan dan menyembunyikan konten ketika tombol diklik
function toggleContent() {
    const content = document.querySelector('.content');
    content.style.display = content.style.display === 'none' ? 'block' : 'none';
}

// Fungsi untuk menampilkan pesan selamat datang setelah beberapa detik
function showWelcomeMessage() {
    setTimeout(function() {
        alert("Selamat datang di Home saya! 😊");
    }, 100); 
}

// Panggil fungsi showWelcomeMessage() saat halaman dimuat
window.onload = function() {
    showWelcomeMessage();
};
