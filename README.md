<h1 align="center">Selamat datang di Blog SEO! 👋</h1>

## Apa itu Blog SEO?

Web Blog SEO yang dibuat oleh <a href="https://github.com/adhiariyadi"> Adhi Ariyadi </a>. **Blog SEO adalah Website untuk seseorang yang ingin membuat artikel atau blog melalui website dengan mudah.**

## Fitur apa saja yang tersedia di Blog SEO?

- Autentikasi Admin
- User & CRUD
- Category & CRUD
- Tag & CRUD
- Post & CRUD
- Dan lain-lain

## Release Date

**Release date : 6 Jun 2020**

> Blog SEO merupakan project open source yang dibuat oleh Adhi Ariyadi. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/adhiariyadi/Blog-SEO-Laravel.git
cd Blog-SEO-Laravel
composer install
copy .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

4. **Jalankan website**

```bash
php artisan serve
```

## Author

- Facebook : <a href="https://web.facebook.com/profile.php?id=100007787444809"> Adhi Ariyadi</a>
- LinkedIn : <a href="https://www.linkedin.com/in/adhi-ariyadi-62164a1a0/"> Adhi Ariyadi</a>

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

- Copyright © 2020 Adhi Ariyadi.
- **Staycation is open-sourced software licensed under the MIT license.**
