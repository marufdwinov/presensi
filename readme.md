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

![admin_login](https://user-images.githubusercontent.com/9781026/31229662-aeed33e6-aa0b-11e7-8598-b8d1bfce8bdb.png)
![admin_panel_2](https://user-images.githubusercontent.com/9781026/31229703-cc6ba894-aa0b-11e7-96f1-df4c207bff51.png)
![admin_panel_1](https://user-images.githubusercontent.com/9781026/31229707-d0d3eb3a-aa0b-11e7-82bf-edb2d67c7365.png)
![admin_panel_3](https://user-images.githubusercontent.com/9781026/31229897-673ec41e-aa0c-11e7-9ef2-385359116411.png)
![public_panel_1](https://user-images.githubusercontent.com/9781026/31229930-874d0978-aa0c-11e7-8e3b-06d93b536be9.png)

### Author
- Ma'ruf Shidiq [@marufdwinov](https://github.com/marufdwinov)M](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
