to run

composer install

npm install

npm run dev


create db "furnitura"

php artisan migrate

php artisan db:seed --class=ProductSeeder

php artisan storage:link     // para ito sa profile pic storage

php artisan serve


note

para sa admin login: CREATE REGULAR ACCOUNT FIRST, Then

before that, go to your database>users> tapos edit your column "is_admin" to "1" for admin access

then proceed to admin login: http://127.0.0.1:8000/admin/login once again.
