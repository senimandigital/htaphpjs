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

Untuk mengeliminasi kekhawatiran bahwa menguasai bahasa pemrogramman itu sulit, maka hal pertama yang diperlu dilakukan adalah sekali lagi meluruskan kembali Mindset kita. Untuk memahami pemrograman yang perlu kita kuasai hanyalah struktur data, dari SQL kita sudah belajar dasar Relasi, Struktur Data, Procedural, Trigger dalam bahasa pemrogramman kita akan mendapatkan beberapa istilah tambahan seperti Function, Array dan Object.

Disetiap bahasa pemrograman sudah tersedia libarary untuk mem-parsing File HTML, JSON dan XML kedalam Variabel, baik sebagai Array atau Object maupun kombinasi kedua-nya. Jika anda fokus mencari materi dan mempelajari fungsi-fungsi pengolahan Array dan Object didalam variabel, maka anda akan menguasai bahasa pemrograman dan framework apapun dengan sangat cepat.

Setelah mulai memahami Array dan Object dan tau cara menggunakan berbagai fungsi dengan benar, disitu anda sudah menjadi seorang programmer, selanjut-nya hanya dibutuhkan jam terbang untuk meningkatkan pengalaman dan "kecepatan dalam membangun Aplikasi".

Apakah memang sesederhana itu, benar memang hanya sesederhana itu, yang tidak sederhana dari pemrograman adalah sesuatu yang disebut dengan "tehnik" ada banyak sekali tehnik pemrogramman setiap orang akan memiliki pola pikir dan cara yang berbeda tentang bagaimana mereka menulis kode program. Tapi pada akhir-nya, "solusi tehnikal" harus sejalan dan mendukung pengembangan "solusi fundamental". Jika tidak direlevansi, solusi tehnikal itu seiring waktu akan ditinggalkan dan gugur begitu saja dalam seleksi alam.

Perbedaan programmer pemula dengan programmer senior terletak pada kemampuan aplikasi yang dia tulis dalam pengolahan data. Aplikasi yang ditulis oleh seorang pemula akan memiliki kode program yang lebih boros dari pada kode program yang ditulis oleh programmer senior.

Perbedaan paling mendasar antara programmer pemula dengan programmer senior adalah pada penerapan tehnik magic atau tidak pada aplikasi yang ditulis-nya. Programmer pemula cenderung menulis kode program untuk meningkatkan kemampuan dirinya sendiri, sedangkan programmer senior cendrung menulis kode program untuk meningkatkan kemampuan dari aplikasi yang ditulis-nya.

Untuk naik kelas dari Junior Programmer menjadi Senior Programmer, Seseorang harus sudah familiar dengan implementasi tehnik recursive dan manipulasi hierarki data. untuk tehnik recursive sudah dipelajari saat menempuh pendidikan formal setiap programmer pastinya sudah familiar dengan istilah ini, namun praktek dalam membuat fungsi recursive dalam masalah sesungguh-nya akan sangat terlambat untuk dipraktekan.

Untuk tehnik manipulasi hierarki data, mungkin tidak didapat didunia pendidikan, hierarki data akan kita ilustrasikan seperti hubungan kekerabatan dimana ada data yang diposisikan sebagai anak, ada data yang diposisikan sebagai parent, ada data yang diposisikan sebagai sepupu, ada data yang diposisikan sebagai leluhur, ada data yang dipisisikan sebagai orang tua angkat, dan seterus-nya.

Untuk lebih memahami tentang mabagimana memanipulasi data berorientasi hieraki/kekerabatan ini maka sangat cocok untuk menggunakan framework yang memang dibuat untuk menyederhanakan bahasa pemrograman, dan framework tersebut tidak lain dan tidak bukan adalah jQuery.

# jQuery Magic (Self Evaluation)
Praktek terbaik menggunakan jQuery maupun javascript adalah dengan menerapkan tehnik magic, apa yang kami sebut dengan tehnik magic adalah sebuah mode pemrograman berbasis behavior. sebagai contoh coba anda perhatikan script berikut:

```Javascript
$(document).ready(function() {
 $('[name]').each(function(){
  $(this).attr('id', $(this).attr('name'));
 });
});
```

Kode diatas terlihat sederhana, tapi powernya bukan pada kesederhaan kode programnya, melainkan lebih kepada menfaat script tersebut. Sedang penjelasan untuk kode program diatas adalah: periksa semua element yang memiliki attribute name, apabila ditemukan maka tambahkan attribute id dengan value sama dengan value pada attribute name.

Dimana letak magic-nya dari script yang terlihat biasa ini... ? Letak magic-nya akan dapat dirasakan setelah kita menulis dan menyimpan scipt magic diatas agar bisa berjalan secara global, maka kemudian programmer tidak lagi perlu menulis:
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
Dengan Tehnik Magic ini kita bertujuan membuat aplikasi yang merubah perilaku parent atau lebih tepat-nya perilaku element referensi berdasarkan kebutuhan element children.
```Html
<select id="database"></select>

<select watch="#database" 
        watch-innerhtml-reload-string-from-url="http://api.senimandigital.com/database_table_to_dom_select_option.php?database=" />
</select>
```
Dalam code diatas element select dengan id database dijadikan sebagai "parent/reverensi/orang tua angkat" secara otomatis oleh element select yang memiliki attribute watch. Dalam contoh ini ilustrasinya adalah "anak angkat yang meminta kepada ibu" angkat-nya apabila element parent mengalami perubahan maka perintahkan element children mereload daftar nama table yang baru.
# jQuery Magic (Ancestor Manipulation)
Dalam dunia nyata, terkadang kita hanya tau siapa nama ayah, ibu serta nama-nama dari kakek dan nenek kita sedangkan untuk nama kakek dari kakek kita, kita belum tentu tahu, ketika mencoba bertanya ke orang tua kita, mungkin jawaban mereka adalah "pamali" nyebut nama orang tua. Padahal jelas, jawaban seperti itu hanya untuk menutupi ketidak tahuan mereka.

Namun kenyataanya kita tetap bisa menyebutkan satu atau dua nama leluhur kita, yaitu minimal Adam dan Hawa, bahkan dalam beberapa kasus, misal dalam kasus saya sendiri saya masih bisa menyebutkan nama-nama leluhur saya hingga 6 generasi sebelum-nya. dalam kasus orang lain mereka bahkan bisa menemukan jalur kekerabatan hingga ke "Rasulullah Shalallahu 'Alaihi Wa Sallam".
```Javascript
$(document).ready(function(){
  $("span").closest("ul").css({"color": "red", "border": "2px solid red"});
});
```
# jQuery Magic (Cousin Evaluation)
# jQuery Magic (Family Evaluation)

# Perlukah Me-Load Library jQuery
Bisa dimengerti, kalo hari ini ada orang yang ga mau meload library jQuery dalam website-nya, karena ukuran file-nya jQuery memang terlalu besar dan kurang dari 5% source didalam library itu yang benar-benar dibutuhkan oleh sebuah website, hal ini juga sudah menjadi perdebatan sejak awal jQuery itu diperkenalkan.

Tapi yang tidak masuk akal adalah jika calon konsumen melarang kita menggunakan karakter tunggal $ untuk menampung object, method, prototype, function dan lain-lain yang berkenaan dengan javascript.

arti-nya apa... ? arti-nya adalah kita hanya perlu menyusun ulang object $ pada javascript. caranya: kita bisa mendefinisikan sendiri object apa yang mau kita masukan kedalam karakter $ ini, contoh:

https://github.com/mskims/jquery-lite/blob/master/jquery-lite.js

apabila ingin menambahkan fungsi ajax, kita bisa cari di github contoh library nya semisal:

https://github.com/jacomyal/djax/blob/master/djax.js

dengan cara ini, kita tetap bisa menggunakan skill jQuery yang sudah kita kuasai sebelum-nya. dan personal library javascript kita juga kalo dipampatkan akan berisi kurang dari 50 baris kode pemrogramman.

contoh-nya bisa lihat disini, baris 55 sampai baris 81. http://cms.senimandigital.com/index.php/php_mysql/1.0.0/source/generator_offline

Intinya, ga perlu mencari alternatif library lain untuk untuk berbagai plugins jQUery, karena pada akhirnya tetap akan meload library berukuran total lebih dari 500kb dan akhir-nya kita hanya memakai kurang dari 5% resource-nya. disamping itu anda sudah berada dijalan yang benar jika menguasai jQuery, selanjut-nya hanya perlu lebih memahami bagaimana object $ itu dibentuk oleh jQuery, dengan memahami itu anda bisa mendefinisikan ulang apapun didalam object $ ini.

untuk menyelesaikan masalah keenganan klient meload library javascript seperti jQuery etc, jauh lebih bijak menyusun ulang versi kita component didalam object $ itu sendiri, dengan mengcopy paste sample code "dari berbagai library lite" yang bisa kita dapat dengan mudah di-github. 

setelah ketemu code referensi library lite, tinggal buka notepad, find dan replace prototype name, atau function name atau class name nya, lalu inject ke Object $ tadi. kok kayanya simple banget, ya memang simple.

dengan cara ini bahkan kita juga bisa saja "mengutil" script method dari framework alternative jQuery semisal dari https://underscorejs.org/.

# Kesimpulan
DOM manipulation adalah istilah untuk mempopulerkan jQuery, sedangkan kemampuan jQuery tidak terbatas pada DOM manipulation melainkan juga pada XML atau lebih tepat-nya kemampuan manipulasi data pada Variable yang berisi Object, dengan kenyataan ini jQuery Core tidak akan pernah menjadi teknologi yang usang atau bahkan di-tinggalkan.

Dibeberapa sekolah, bahkan mengajarkan siswa dan siswi mereka untuk menulis ulang jQuery. Sehingga meskipun framework utama yang digunakan adalah React, Vue, Svelte bahkan yang lebih mutakhir, namun personal configuration dianjurkan untuk mengikuti standar penulisan jQuery sehingga lebih mudah untuk dimutakhirkan.

Karakter $ pada javascript telah di korelasikan dengan kesempurnaan, maksudnya ketika kita melihat fungsi:
```Javascript
$('selector')
```
Maka kita percaya outpunya tidak akan error, karena fungsi tersebut sudah dikostumasi untuk melakukan try dan error handling secara otomatis. bahkan meski itu bukan script resmi yang dikembangkan oleh tim develover jQuery.

jQuery sebagai sebuah Framework mungkin untuk ditinggalkan, tapi untuk arsitektur-nya tidak akan pernah ditinggalkan, oleh karena itu belajar jQuery tidak akan pernah menjadi tidak relevant dengan zaman. karena simbol $ pada javascript telah mengalami pergeseran makna mejadi simbol personalisasi. disamping jQuery tentu saja ada framework yang mirip-mirip seperi lodash dan underscore yang juga menggunakan 1 karakter sebagai master object-nya, tapi kenyamanan untuk dipandang tetap ada pada karakter $

Tulisan ini hanya memberi rangkuman untuk mengingatkan kita pada praktek terbaik dalam bekerja dengan DOM, JSON dan XML, referensi untuk anda yang ingin membuang waktu mempelajari jQuery dengan lebih dalam tentusaja tetap berada pada: https://www.w3schools.com/jquery/jquery_ref_traversing.asp
