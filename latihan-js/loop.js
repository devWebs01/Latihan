// Menampilkan angka 1 sampai 5
for (let i = 1; i <= 10; i++) {
    console.log("Angka ke-" + i);
}
/*
Output:
Angka ke-1
Angka ke-2
Angka ke-3
Angka ke-4
Angka ke-5
*/

// Menampilkan angka 1 sampai 3
let counter = 1;
while (counter <= 5) {
    console.log("Hitungan ke-" + counter);
    counter++; // Ini penting agar loop tidak tak terbatas
}
/*
Output:
Hitungan ke-1
Hitungan ke-2
Hitungan ke-3
*/

let peserta = [
    "Andi",
    "Budi",
    "Cici",
    "Dodi",
    "Eka",
];

let count = peserta.length;

for (let i = 0; i <= count; i++) {
    console.log('Peserta ke-' + (i + 1) + ' adalah ' + peserta[i]);
}

let produk = 1;
while (produk <= 7) {
    console.log("Produk ke-" + produk++ + ' terjual');
}

const penjualan = [
    '100',
    '50',
    '120',
    '70',
    '90',
    '60',
    '150',
];

totalPenjualan = 0;

for (let i = 0; i < penjualan.length; i++) {

    let nomorHari = i + 1;

    if (nomorHari % 2 === 1) {
        totalPenjualan += penjualan[i];

        console.log(`Penjualan Hari ke-${nomorHari} (${penjualan[i]}) adalah hari ganjil.`);
    }
}

let murid = [1,2,3,4,5,6,7,8,9,10];

for (let i = 0; i < murid.length; i++) {

    let nomorUrut = i + 1;

    if (nomorUrut % 2 === 1) {

        console.log(`Selamat, Murid ke-${nomorUrut}! Kerja Bagus!`);
    } else {
        console.log(`Luar biasa, Murid ke-${nomorUrut}! Kamu Hebat!`);

    }

}

