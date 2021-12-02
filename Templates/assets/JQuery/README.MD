# Apa itu jQuery Versi 1
jQuery Versi 1 sejati-nya adalah Framework untuk menyederhanakan penggunaan Javascript.
Yang terpenting dari jQuery Versi 1 adalah mendukung semua generasi Browser, Mulai dari Classic Browser hingga ke Modern Browser.
Disamping menyederhanakan penggunaan javascript, jQuery juga meningkatkan fungsional dari javascript itu sendiri.

Maksud dari peningkatan fungsional disini adalah, ketika logika yang sama kita tulis menggunakan javascript native output yang dihasilkan bisa tidak sebaik ketika menulis-nya dengan jQuery. hal ini dikarenakan jQuery secara otomatis melakukan yang namanya Try and Error, jika kita menulis aplikasi kode javascript native secara manual, maka untuk mengahsilkan kinerja yang setara dengan ketika kita menuliskannya dengan jQuery maka bisa saja kode program 4 baris dari jQuery akan setara puluhan bahkan ratusan baris kode program. Dalam kondisi ini, menggunakan jQuery jauh lebih lebih baik dan sangat direkomendasikan daripada menggunakan javascript native.

# Mindset Programming
Mindset Programing anda-lah hal pertama yang harus bejalan lurus ketika kita mulai menerima pemrograman sebagai sebuah Profesi. Mindset yang belum lurus akan membuat kita berjalan memutar jauh untuk mencapai tujuan dari pemrogramman.

Apapun bahasa pemrograman yang kita pilih, hal pertama yang harus kita kuasai dan maksimalkan adalah skill dalam menguasai SQL, dari SQL kita akan mempelajari konsep dan manajemen relasi. Menguasai SQL dengan baik saja sudah cukup untuk menghasilkan berbagai aplikasi, tapi hanya dengan menguasai SQL kita masih butuh bantuan dari tool database khusus semisal Microsoft Access jika di window, OpenOffice Base jika itu di Linux Sedang untuk aplikasi Berbasis web kita bisa menggunakan Aplikasi yang berfungsi sebagai Kode Generator dan ada banyak sekali alternative yang tersedia untuk itu.

Setelah menguasai SQL dengan baik barulah kita memiliki modal yang cukup untuk mulai mempelajari cara membuat aplikasi yang berfitur lebih canggih, karena tool database sebagaimana disebutkan diatas miliki keterbatasan dalam hal kostumasi, karena memang hanya dibuat secara khusus untuk pengguna awam yang menginginkan penggunaan aplikasi ber-database untuk penggunaan sehari-hari.

Ketika sudah mulai memasuki dunia pemrogamman, barulah hanya menguasai SQL menjadi tidak lagi cukup, karena kita minimal harus menguasai format data populer lain-nya, terutama DOM, JSON dan XML. Kita tidak perlu khawatir mengalami kesulitan dalam menguasai DOM, JSON dan XML. Pertama-tama kita hanya perlu memahami bahwa DOM, JSON dan XML serta berbagai varian-nya hanya-lah sebuah format data yang berstandar lebih tinggi dan kompleks.

Untuk mengeliminasi kekhawatiran bahwa menguasai bahasa pemrogramman itu sulit, maka hal pertama yang diperlu dilakukan adalah sekali lagi meluruskan kembali Mindset kita. Untuk memahami pemrograman yang pelu kita kuasai hanyalah struktur data, dari SQL kita sudah belajar dasar Relasi, Struktur Data, Procedural dalam bahasa pemrogramman kita akan mendapatkan beberapa istilah tambahan seperti Function, Array dan Object.

Disetiap bahasa pemrograman sudah tersedia libarary untuk mem-parsing File HTML, JSON dan XML kedalam Varibel baik sebagai Arrai atau Object maupun kombinasi kedua-nya. Jika anda fokus mencari materi dan mempelajari fungsi-fungsi pengolahan array dan object didalam variabel, maka anda akan menguasai bahasa pemrograman dan framework apapun dengan sangat cepat.

setelah mulai memahami Array dan Object dan tau cara menggunakan berbagai fungsi dengan benar, disitu anda sudah menjadi seorang programmer, selanjut-nya hanya dibutuhkan jam terbang untuk meningkatkan pengalaman dan kecepatan dalam membangun Aplikasi.

Apakah memang sesederhana itu, benar memang hanya sesederhana itu, yang tidak sederhana dari pemrograman adalah sesuatu yang disebut dengan "tehnik" ada banyak sekali tehnik pemrogramman setiap orang akan memiliki pola pikir dan cara yang berbeda tentang bagaimana mereka menulis kode program.

Perbedaan programmer pemula dengan programmer senior terletak terletak pada kemampuan aplikasi yang dia tulis dalam pengolahan data. Aplikasi yang ditulis oleh seorang pemula akan memiliki kode program yang lebih boros dari pada kode program yang ditulis oleh programmer senior.

Perbedaan paling mendasar antara programmer pemula dengan programmer senior adalah pada penerapan tehnik magic atau tidak pada aplikasi yang ditulis-nya. Programmer pemula cenderung menulis kode program untuk meningkatkan kemampuan dirinya sendiri, sedangkan programmer senior cendrung menulis kode program untuk meningkatkan kemampuan dari aplikasi yang ditulis-nya.

Untuk naik kelas dari Junior Programmer menjadi Senior Programmer, Seseorang harus sudah familiar dengan implementasi tehnik recursive dan manipulasi hierarki data. untuk tehnik recursive sudah sudah dipelajari saat menempuh pendidikan formal setiap programmer pastinya sudah familiar dengan istilah ini, namun membuat praktek dalam fungsi recursive dalam masalah sesungguh-nya akan sangat terlambat untuk diterapkan.

Untuk tehnik manipulasi hierarki data, mungkin tidak didapat didunia pendidikan, hierari data akan kita ilustrasikan seperti hubungan kekerabatan dimana ada data yang diposisikan sebagai anak, ada data yang diposisikan sebagai parent, ada data yang diposisikan sebagai sepupu, ada data yang diposisikan sebagai leluhur dan seterus-nya.

# jQuery Magic (Self Evaluation)
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

# jQuery Magic (Parent Evaluation)
Kita juga bisa menerapkan Tehnik Magic dengan level yang lebih tinggi, dimana kita melakukan-nya dengan memaksimalkan serta sekaligus meningkatkan kemampuan dasar pemroses javascript, dengan memanfaatkan fungsi Evaluasi yang telah dimiliki oleh Javascript, perhatikan contoh berikut.
```Javascript
$(document).ready(function() {
 $("[watch]").each(function() { $this = $(this);
  $( eval('$(this).attr( "watch" )') ).on({
    change: function() { 
      $.get( $this.attr('watch-innerhtml-reload-string-from-url') + $(this).val(), function(data){ $this.html( data );  });  
    }  
  }); /* end $( eval('$(this).attr( "watch" )') ).on({ */
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
