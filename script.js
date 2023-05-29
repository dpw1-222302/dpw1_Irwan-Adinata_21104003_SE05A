function hitungTotalHarga() {
    // Mendapatkan nilai input dari form
    let jumlahBarangA = parseInt(document.getElementById('jumlahBarangA').value);
    let jumlahBarangB = parseInt(document.getElementById('jumlahBarangB').value);
    let jumlahBarangC = parseInt(document.getElementById('jumlahBarangC').value);

    // Mendefinisikan harga barang
    let hargaBarangA = 10000;
    let hargaBarangB = 15000;
    let hargaBarangC = 20000;

    // Menghitung total harga
    let totalHarga = (jumlahBarangA * hargaBarangA) + (jumlahBarangB * hargaBarangB) + (jumlahBarangC * hargaBarangC);

    // Menampilkan hasil pada elemen dengan id "hasil"
    document.getElementById('hasil').innerHTML = "Total harga pembelian: Rp " + totalHarga;
}