# Sistem Presensi Sederhana

Repository ini berisi sebuah sistem presensi yang sangat **sederhana**.

Sistem dibuat dengan menggunakan Laravel 5.5 dengan UI menggunakan AdminBSBMaterialDesign.

## Installation

- **Clone** repository ini `git clone https://github.com/marufdwinov/presensi.git`
- Update composer `composer update`
- **Konfigurasi** file .env (sesuaikan dengan server anda)
- `php artisan migrate` untuk mengkonfigurasi Database
- `php artisan db:seed` untuk menambahkan admin baru (email: **admin@admin.com** password: **admin12345678**)
- Buka `http://(serveranda)/login` dan login menggunakan data login diatas

## Screenshoot

![admin_panel_2](https://user-images.githubusercontent.com/9781026/31259658-aa1693be-aa72-11e7-9703-af51c332cc67.png)
![admin_panel_3](https://user-images.githubusercontent.com/9781026/31259659-aa592652-aa72-11e7-974d-c4c4e169b9f3.png)
![public_panel_1](https://user-images.githubusercontent.com/9781026/31259661-aa76d8b4-aa72-11e7-9c42-03c07eef6bda.png)
![admin_login](https://user-images.githubusercontent.com/9781026/31259662-aa76d918-aa72-11e7-91e8-1a41dc146589.png)
![admin_panel_1](https://user-images.githubusercontent.com/9781026/31259660-aa74bb4c-aa72-11e7-85e3-1890236f2e02.png)

### Author
- Ma'ruf Shidiq [@marufdwinov](https://github.com/marufdwinov)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
