# week-06 - Validation และ Database Configuration

นักศึกษา: นางสาวณัชชารีย์ อุทัยวัฒน์  
รหัส: 68152310176-0  
Database prefix: natcharee_

## งานที่ทำ

สร้างฟอร์มแจ้งเคลม ตรวจสอบข้อมูล แสดง validation errors และตั้ง MySQL prefix แยกนักศึกษา

งานของสัปดาห์นี้ต่อยอดจากสัปดาห์ก่อนหน้า จึงมี source code เดิมรวมอยู่ด้วยและโฟลเดอร์นี้รันได้เป็น project แยก

## ไฟล์สำคัญที่เพิ่มหรือแก้

app/Http/Controllers/ClaimController.php, resources/views/claims/create.blade.php, config/database.php, .env.example

## Setup บนเครื่องใหม่

ต้องมี PHP 8.2+, Composer และ MySQL/XAMPP แล้วรันจากภายในโฟลเดอร์นี้:

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

เปิด `http://127.0.0.1:8000` ถ้า port ถูกใช้ ให้รัน `php artisan serve --port=8001`

ฐานข้อมูลเป็นแบบใช้ร่วมกัน จึงห้ามใช้ `migrate:fresh` และ `db:wipe`

## Test ก่อนส่ง

```powershell
php artisan optimize:clear
php artisan test
```

## ส่งงานผ่านหน้าเว็บ GitHub

อัปโหลดไฟล์ทั้งหมดในโฟลเดอร์ `week-06` ยกเว้น `.env`, `vendor/`, `node_modules/`, `storage/logs/` และ cache ห้ามอัปโหลดเฉพาะไฟล์ที่แก้ เพราะโปรเจกต์ต้องติดตั้งและรันได้เอง

## Checklist

- [x] มี Laravel source code ครบ
- [x] มี `.env.example` แต่ไม่มีความลับ
- [x] แยก table ด้วย prefix natcharee_
- [x] มี test สำหรับฟีเจอร์หลักหรือแบบฝึกทบทวนตามสัปดาห์
- [x] พร้อมติดตั้งด้วย `composer install`

## Template ประจำตัว

โปรเจกต์นี้ใช้ธีม **Ocean Glass** (natcharee-ocean-glass) ซึ่งออกแบบเฉพาะสำหรับ Natcharee Uthaiwat และโหลดจาก `public/css/student-theme.css`
