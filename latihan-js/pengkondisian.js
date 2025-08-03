let nilaiSaya = 57;

if (nilaiSaya >= 90) {
    console.log("nilaiSaya kamu A");
} else if (nilaiSaya >= 80) {
    console.log("nilaiSaya kamu B");
} else if (nilaiSaya >= 70) {
    console.log("nilaiSaya kamu C");
}

let nilai = 75;

if (nilai >= 90) {
    console.log("Nilai A, keren!");
} else if (nilai >= 80) {
    console.log("Nilai B, bagus!");
} else if (nilai >= 70) {
    console.log("Nilai C, lumayan!");
} else {
    console.log("Nilai D, perlu belajar lagi.");
}
// Output: Nilai C, lumayan!

let belanja = 120000;

if (belanja >= 100000) {
    const diskon = belanja * 0.1;

    total = belanja - diskon;

    console.log('diskon 10%, dari total belanja ' + belanja + ' dapat diskon ' + diskon);

    console.log('yang harus dibayar adalah ' + total);

} else {
    console.log('tidak ada diskon');
}