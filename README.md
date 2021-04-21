## 1. Cara install composer ##
https://www.niagahoster.co.id/blog/cara-install-composer/
jika composer sudah terinstall 
- buka cmd/gitbash
```
"cd C:\xampp\htdocs\GIT\namaprojeklaravel"
"composer update" sekitaran 5-10menit tergantung jaringan
```

## 2. Cara install node js ##
https://www.dumetschool.com/blog/cara-install-node-js-dan-npm-pada-windows
jika node js sudah terinstall
- (windows) klik logo windows lalu ketik "node.js command prompt"
- klik kanan dan run administrator
```
"cd C:\xampp\htdocs\GIT\namaprojeklaravel"
"npm install && npm run dev" 2-5menit tergantung jaringan
```
## 3. Setting Projek ##
- edit file ".env.example" menjadi ".env"
- edit data ".env" berikut : 
```
DB_DATABASE=namadatabase
DB_USERNAME=username(biasanya 'root')
DB_PASSWORD=password(biasanya '')
```
## 4. Upload database ##
- file database ada didalam folder "database/donasi.sql"

## 5. Run Laravel ##
- buka cmd/gitbash
```
"cd C:\xampp\htdocs\GIT\namaprojeklaravel"
php artisan serve
```

## 6. Edit file front end ##
- header "resource/view/layouts"
- page "resource/view/page"
