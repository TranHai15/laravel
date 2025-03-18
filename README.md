## B1: Clone project từ GitHub

```bash
git clone https://github.com/TranHai15/laravel.git
cd laravel
```

## B2: Cài đặt thư viện

```bash
composer update
npm i
```

## B3: Tạo file .env

```bash
cp .env.example .env
```

## B4: Cấu hình database trong .env

Cập nhật thông tin database trong file `.env`.

## B5: Tạo application key

```bash
php artisan key:generate
```

## B6: Chạy migration

```bash
php artisan migrate
```

## B7: Chạy server

```bash
php artisan serve
npm run dev
```

```bash
composer run dev
```
