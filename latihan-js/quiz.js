console.log('Soal 1');
// Jawaban:
let namaProduk = "Laptop Gaming X";
console.log('string: ' + namaProduk);
const harga = 15000000;
console.log('integer: ' + harga);
let stokTersedia = true;
console.log('boolean: ' + stokTersedia);
var berat = 2.5;
console.log('integer: ' + berat);

console.log('');
console.log('Soal 2');

let gajiPokok = 5000000;
let tunjanganTransportasi = 500000; // Sesuai soal
let tunjanganMakan = 300000;       // Sesuai soal
let persentasePajak = 0.05;  

let totalGajiBruto = gajiPokok + tunjanganTransportasi + tunjanganMakan;
let potonganPajak = totalGajiBruto * persentasePajak;
const gajiBersih = totalGajiBruto - potonganPajak;

console.log(
    `Gaji bersih: ${gajiBersih}`
);

console.log('');
console.log('Soal 3');

let umur = 17;

if (umur < 13) {
    console.log('Anak-anak');
} else if (umur < 19) {
    console.log('Remaja');
} else {
    console.log('Dewasa');
}

console.log('');
console.log('Soal 4');

let nilai = [85, 90, 78, 92, 88];

let jumlahTotal = 0;

for (let i = 0; i < nilai.length; i++) {
    jumlahTotal += nilai[i];
}
console.log(jumlahTotal);

console.log('');
console.log('Soal 5');

function ucapkanSalam(waktu) {
    return 'Selamat ' + waktu + '!';
}

console.log(ucapkanSalam("pagi"));