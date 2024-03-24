<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### APA ITU LOGGING?
> - Logging merupakan standar industri untuk memantau informasi yang terjadi di aplikasi.
> - Logging melibatkan pengiriman informasi kejadian ke berkas log, database, atau tempat penyimpanan lainnya.
>
> #### MONOLOG
> - Monolog adalah library logging yang populer di PHP, sering digunakan di Laravel.
> - Proyek PHP dapat menggunakan Monolog untuk melakukan logging dengan mudah dan fleksibel.
>
> #### HANDLER
> - Handler dalam logging PHP bertugas mengirim aktivitas log ke target yang ditentukan, seperti file, konsol, database, atau email.
> - Monolog menyediakan banyak handler yang sudah disiapkan, seperti stream handler yang dapat mengirim log ke berbagai target, seperti konsol atau file.
> - Handler dalam logging PHP bertugas mengirim aktivitas log ke target yang ditentukan, seperti file, konsol, database, atau email.
> - Dengan menggunakan metode pushHandler, kita dapat menambahkan handler ke logger untuk mengirim log ke berbagai target sekaligus.
>
> Berikut kode menambah handler :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/749a9eca-2dcb-4bc3-92e9-c448506e257b)

---
> #### LOGGER
> - Logger merupakan class yang digunakan untuk melakukan logging
> - Untuk membuat object logger sangat mudah, kita cukup gunakan nama logger yang kita inginkan di parameter constructor nya
>
> Berikut kode membuat logger :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/f9dfb66d-7d0c-4ed5-ab11-5604ebbaee65)
>
> Berikut kode membuat logger dengan nama :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/744b5984-b72a-4f79-a337-4f471e43887b)
>
> #### LOGGING
> - Metode ```info``` digunakan untuk melakukan logging dalam PHP dengan Monolog, memungkinkan pengiriman log event ke berbagai handler yang telah ditentukan.
>
> Berikut kode melakukan logging :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/48008b10-d0c7-4d2f-acd6-1cea70b443fc)
---
> #### LEVEL
> - Monolog mendukung banyak level log, dimana setiap level memiliki tingkat kepentingan yang berbeda-beda, seperti debug, info, error, dll.
> - Saat menggunakan stream handler, secara default semua log akan dikirimkan ke targetnya, namun kita dapat menentukan level mana yang ingin ditampilkan.
>
> Berikut kode level :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/57aae466-279e-4d82-8dae-4ccf834b001f)
>
> Berikut kode streamhandler level :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/01531f74-a332-480a-8934-e2eb53710291)
---
> #### CONTEXT
> - Context dalam logging memungkinkan penambahan informasi tambahan, seperti data pengguna, secara otomatis tanpa perlu membuat format pesan manual.
>
> Berikut kode context :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/ecd9dfa8-9936-4f92-9aa9-c7a9574fe031)
---
> #### PROCESSOR
> - Processor adalah cara lain untuk menambahkan informasi ke log event secara otomatis tanpa perlu melakukan manual, yang dapat disesuaikan dengan kebutuhan pengguna.
>
> Berikut kode processor :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/08a7f912-a4d7-4393-9578-c67ffd6e66f5)
---
> #### MONOLOG PROCESSOR
> - Monolog menyediakan berbagai implementasi dari prosesor interface yang dapat digunakan untuk menambahkan informasi tambahan secara umum ke semua log event.
>
> Berikut kode monolog processor :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/ec5a18f3-28eb-44b8-a09d-23fe437376ce)
---
> ### RESET HANDLER DAN PROCESSOR
>
> #### RESSETABLE LOGGER
> - Metode reset() dapat digunakan pada Logger untuk melakukan reset terhadap semua handler dan processor yang digunakan.
>
> Berikut kode reset method di logger :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/5a57be25-4a00-4273-b133-2b44ac1907cb)
>
> Berikut kode reset logger :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/d819e310-f302-4959-bf79-3c751e4914ce)
---
> #### FORMATTER
> - Dengan menggunakan formator, kita dapat mengatur format dari log event sebelum dikirim ke destinasi, seperti konsol atau file.
> - Monolog menyediakan berbagai jenis formator yang dapat digunakan tanpa perlu membuat sendiri, kecuali jika format khusus diperlukan.
>
> Berikut kode monolog formatter :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/3ea2d3d0-4fb7-4abc-9f61-91d20e5062b1)
---
> #### ROTATING FILE HANDLER
> - Rotating file handler berguna untuk menghindari masalah ukuran file log yang terlalu besar dengan secara otomatis membuat file log baru setiap harinya dan dapat menghapus file log yang lama sesuai konfigurasi.
> - Pembuatan file log baru oleh rotating file handler dapat disesuaikan dengan berbagai parameter seperti jumlah file yang ingin disimpan dan level logging yang diinginkan.
>
> Berikut kode rotating file handler :
>
> ![image](https://github.com/mTakku/php-logging/assets/145539342/5848110a-5541-415e-9b3f-a07e69b48b74)


<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - Apakah lbh baik menggunakan phpstorm untuk memakai code yang berhubungan dengan php

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - Logging penting dalam pengembangan aplikasi untuk mencatat informasi kejadian.


















