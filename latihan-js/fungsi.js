function sapaDunia() {
    console.log("Halo, Dunia!");
}

sapaDunia(); // Output: Halo, Dunia!

// Fungsi dengan parameter dan tanpa return
function sapaNama(nama) { // 'nama' adalah parameter
    console.log("Halo, " + nama + "!");
}

// Memanggil fungsi dengan mengirimkan nilai (argumen)
sapaNama("Budi"); // Output: Halo, Budi!
sapaNama("Siti"); // Output: Halo, Siti!

// Fungsi dengan parameter dan return
function tambahDuaAngka(angka1, angka2) {
    let hasil = angka1 + angka2;
    return hasil; // Mengembalikan nilai hasil
}

// Memanggil fungsi dan menyimpan hasilnya
let total = tambahDuaAngka(5, 7);
console.log("Hasil penjumlahan:", total); // Output: Hasil penjumlahan: 12

// Bisa langsung dicetak juga
console.log("Hasil penjumlahan lain:", tambahDuaAngka(10, 20)); // Output: Hasil penjumlahan lain: 30

console.log('========================================');

function imt(berat, tinggi) {
    let hasil = berat / (tinggi * tinggi);
    return hasil;
}

console.log('IMT dari 70 kg dan 1.75 M adalah ' + imt(70, 1.75));