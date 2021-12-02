# Apa itu jQuery Versi 1
jQuery Versi 1 sejati-nya adalah Framework untuk menyederhanakan penggunaan Javascript.
Yang terpenting dari jQuery Versi 1 adalah mendukung semua generasi Browser, Mulai dari Classic Browser hingga ke Modern Browser.
Disamping menyederhanakan penggunaan javascript, jQuery juga meningkatkan fungsional dari javascript itu sendiri.

Maksud dari peningkatan fungsional disini adalah, ketika logika yang sama kita tulis menggunakan javascript native output yang dihasilkan bisa tidak sebaik ketika menulis-nya dengan jQuery. hal ini dikarenakan jQuery secara otomatis melakukan yang namanya Try and Error, jika kita menulis aplikasi kode javascript native secara manual, maka untuk mengahsilkan kinerja yang setara dengan ketika kita menuliskannya dengan jQuery maka bisa saja kode program 4 baris dari jQuery akan setara puluhan bahkan ratusan baris kode program. Dalam kondisi ini, menggunakan jQuery jauh lebih lebih baik dan sangat direkomendasikan daripada menggunakan javascript native.

# jQuery Magic (Basic)
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

# jQuery Magic Evaluation
Kita juga bisa menerapkan Tehnik Magic dengan level yang lebih tinggi, dimana kita melakukan-nya dengan memaksimalkan serta sekaligus meningkatkan kemampuan dasar pemroses javascript, dengan memanfaatkan fungsi Evaluasi yang telah dimiliki oleh Javascript, perhatikan contoh berikut.
```Javascript
$(document).ready(function() {
 $("[watch]").each(function() {
  $this = $(this);
  $( eval('$(this).attr( "watch" )') ).on({
    change: function() { 
      $.get( $this.attr('watch-innerhtml-reload-string-from-url') + $(this).val(), function(data){ $this.html( data );  });  
    }  
  }); /* $( eval('$(this).attr( "watch" )') ).on({ */
 }); /* end $("[watch]").each(function() { */
}); /* end $(document).ready(function() { */
```
Dengan Tehnik Magic ini kita bertujuan membuat aplikasi yang merubah perilaku parent atau lebih tepat-nya perilaku element refereni berdasarkan kebutuhan element children.
```Html
<select id="database"></select>

<select watch="#database" 
        watch-innerhtml-reload-string-from-url="http://api.senimandigital.com/database_table_to_dom_select_option.php?database=" />
</select>
```
Dalam code diatas element select dengan id database dijadikan sebagai "parent/reverensi/orang tua angkat" secsara otomatis oleh element select yang memiliki attribute watch. Dalam contoh ini anak angkat meminta kepada ibunya angkat-nya apabila element parent mengalami perubahan maka perintahkan element children merload daftar nama table yang baru.
