document.getElementById('pinjamForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const namaPeminjam = document.getElementById('namaPeminjam').value;
    const judul =