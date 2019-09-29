<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<h1>About</h1>
<p>Project pembuatan API untuk Auth di Laravel dengan menggunakan JWT.</p>

<h2>Setup</h2>
<p>1. <i>Git Clone git@github.com:mahdi2290/testProgrammerMahdi.git</i></p>

<p>2. <i>cd project_name</i></p>

<p>3. <i>cp .env.example .env / copy .env.example .env</i></p>

<p>4. <i>Buat database mysql, kemudian atur .env sesuai dengan database yang dibuat. Pastikan username dan password sesuai.</i></p>

<p>5. <i>Composer Install</i></p>

<p>6. <i>php artisan key:generate</i></p>

<p>7. <i>php artisan jwt:secret</i></p>

<p>8. <i>php artisan migrate</i></p>

<p>9. <i>php artisan serve</i></p>

<p>10. <i>Jalankan Postman</i></p>

<p>11. <i>Masukan url http://127.0.0.1:8000/api/register, kemudian isi parameter name, email, password dan password_confirmation</i></p>

<p>12. <i>Lalu login menggunakan url http://127.0.0.1:8000/api/login, masukan email dan password. Jika sesuai maka proses akan berhasil dan kamu akan login.</i></p>

<p>13. <i>Untuk melihat info user, ketik http://127.0.0.1:8000/api/user, maka akan muncul info user yang sudah teregister.</i></p>

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
