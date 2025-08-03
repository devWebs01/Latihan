// Operator Perbandingan
let angka1 = 10;
let angka2 = "10"; // Ini string, bukan number!

console.log('angka 1 apakah sama dengan angka 2:', angka1 == angka2);  // true (karena nilainya sama, tipe data diabaikan)
console.log('angka 1 apakah sama dengan string 2:', angka1 === angka2); // false (karena tipenya berbeda: number vs string)

console.log('benarkan 5 lebih benar dari 3? ', 5 > 3);    // true
console.log('benarkah 7 lebih kecil dari sama dengan 7? ', 7 <= 7);   // true
console.log('apakah angka 1 tidak sama dengan sering 10', 10 !== "10"); // true (karena tipenya berbeda)

// Operator Logika 
let punyaSIM = true;
let punyaKTP = false;

console.log('kamu punya SIM?', punyaSIM && punyaKTP); // false (karena punyaKTP false)
console.log('kamu punya SIM atau KTP?', punyaSIM || punyaKTP); // true (karena punyaSIM true)
console.log('idak kah kamu punya SIM?', !punyaSIM);           // false (membalik nilai punyaSIM)

console.log('==================================');

console.log('QUIZ');

let a = 5;
let b = 2;

console.log((a * b) + (10 % 3) === 11); // hasilnya true karena 11 === 11;

console.log('============================================================');

let tiketDewasa = 50000;
let tiketAnak = 25000;
const pembeli = (tiketDewasa * 3) + (tiketAnak * 2);

console.log(pembeli);