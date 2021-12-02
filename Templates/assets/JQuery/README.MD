*** Praktek Terbaik Menggunakan jQuery Versi 1
jQuery Versi 1 sejati-nya adalah Framework untuk menyederhanakan penggunaan Javascript.
Disamping menyederhanakan penggunaan javascript, jQuery juga meningkatkan fungsional dari javascript itu sendiri.

Praktek terbaik menggunakan jQuery maupun javascript adalah dengan menerapkan tehnik magic, sebagai contoh coba anda perhatikan script berikut:

```Javascript
$(document).ready(function() {
 $('[name]').each(function(){
  $(this).attr('id', $(this).attr('name'))
 });
});
```

Kode diatas terlihat sederhana, tapi powernya bukan pada kesederhaan kode programnya, melainkan lebih kepada menfaat script tersebut.

Penjelasan untu kode program diatas adalah: periksa semua element yang memiliki attribute name, apabila ditemukan maka tambahkan attribute id dengan value sama dengan value pada attribute name

Dimana letak magic-nya dari script yang terlihat biasa ini:
1. Programmer tidak lagi perlu menulis
```Html
<input name="username" id="username" />
```
Tapi cukup hanya dengan menulis: 
```html
<input name="username" />
```
Selanjutnya browser yang akan menambahkan attribute id secara otomatis. Cara ini akan membuat kode program menjadi jauh lebih bersih dan mudah dipelajari.
