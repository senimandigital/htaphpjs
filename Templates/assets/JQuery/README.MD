# Apa itu jQuery Versi 1
jQuery Versi 1 sejati-nya adalah Framework untuk menyederhanakan penggunaan Javascript.
Yang terpenting dari jQuery Versi 1 adalah mendukung semua generasi Browser, Mulai dari Classic Browser hingga ke Modern Browser.
Disamping menyederhanakan penggunaan javascript, jQuery juga meningkatkan fungsional dari javascript itu sendiri.

Maksud dari peningkatan fungsional disini adalah, ketika logika yang sama kita tulis menggunakan javascript native output yang dihasilkan bisa tidak sebaik ketika menulis-nya dengan jQuery. hal ini dikarenakan jQuery secara otomatis melakukan yang namanya Try and Error, jika kita menulis aplikasi kode javascript native secara manual, maka untuk mengahsilkan kinerja yang setara dengan ketika kita menuliskannya dengan jQuery maka bisa saja kode program 4 baris dari jQuery akan setara puluhan bahkan ratusan baris kode program. Dalam kondisi ini, menggunakan jQuery jauh lebih lebih baik dan sangat direkomendasikan daripada menggunakan javascript native.

# jQuery Magic
Praktek terbaik menggunakan jQuery maupun javascript adalah dengan menerapkan tehnik magic, apa yang kami sebut dengan tehnik magic adalah sebuah mode pemrograman berbasis behavior. sebagai contoh coba anda perhatikan script berikut:

```Javascript
$(document).ready(function() {
 $('[name]').each(function(){
  $(this).attr('id', $(this).attr('name'));
 });
});
```

Kode diatas terlihat sederhana, tapi powernya bukan pada kesederhaan kode programnya, melainkan lebih kepada menfaat script tersebut.

Penjelasan untuk kode program diatas adalah: periksa semua element yang memiliki attribute name, apabila ditemukan maka tambahkan attribute id dengan value sama dengan value pada attribute name.

Dimana letak magic-nya dari script yang terlihat biasa ini:

Setelah kita menulis dan menyimpan scipt magic diatas agar bisa berjalan secara global, maka kemudia programmer tidak lagi perlu menulis
```Html
<input name="username" id="username" />
```
Tapi cukup hanya dengan menulis: 
```html
<input name="username" />
```
Selanjutnya browser yang akan menambahkan attribute id secara otomatis. Cara ini akan membuat kode program menjadi jauh lebih bersih dan mudah dipelajari.
