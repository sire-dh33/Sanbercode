
// Soal 1
var daftarBuah = ["2. Apel", "5. Jeruk", "3. Anggur", "4. Semangka", "1. Mangga"];
    document.write("<strong>Soal 1 : </strong>");
    document.write("<br/> ------ <br/>");
// Mengurutkan dengan method sort
daftarBuah.sort();
// Menampilkan tiap element array dengan looping
for(let i = 0; i < daftarBuah.length; i++){
    document.write(`${ daftarBuah[i] } <br/>`);
}
document.write("<p> </p>");
// Cara lain, dengan method for each
document.write('<sub> --- Dengan method forEach --- </sub> <br/>');
daftarBuah.forEach((data) => {
    document.write(`${data} <br>`);
});
document.write("<p> </p>");


// Soal 2
    document.write("<br/> <strong>Soal 2 : </strong>");
    document.write("<br/> ------ <br/>");
var kalimat="saya sangat senang belajar javascript";
var toarray = kalimat.split(" ");
toarray.forEach((data) => {
    document.write(`${data} | `);
});
    console.log(toarray);
    document.write('<br/> <sub> Versi (Raw) Array di "Console" </sub>');
    document.write("<p> </p>");


// Soal 3
    document.write("<br/> <strong>Soal 3 : </strong>");
    document.write("<br/> ------ <br/>");
var databuah = [
    {
        nama    : "strawberry",
        warna   : "merah",
        adaBiji : false,
        harga   : 9000 
    },
    {   
        nama    : "jeruk",
        warna   : "oranye",
        adaBiji : true,
        harga   : 8000
    },
    {
        nama    : "Semangka",
        warna   : "Hijau & Merah",
        adaBiji : true,
        harga   : 10000
    },
    {
        nama    : "Pisang",
        warna   : "Kuning",
        adaBiji : false,
        harga   : 5000
    }
];
// Display in Console
console.log(databuah[0]);

// Display in HTML Page
var txt = "";
for (x in databuah[0]) {
    txt += databuah[0][x] + " | ";
    };
document.write(txt);
