- backup database
- git pull
- modificar .env
- php artisan migrate:reset
- php artisan migrate
- php artisan db:seed --class=HtmlTableSeeder
- dar permisos, carpeta exports que esta dentro de public... para que no salga fopen(exports/index.html): failed to open stream: Permission denied
- Establecer en el ExportController.php -> $public_dir = '../../www/edutools';( a esta tambien hay que darle permisos(?) )
