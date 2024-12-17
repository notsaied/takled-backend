## Installation

```bash
  1. **Clone the Project**:  
   Clone the repository using Git:
   git clone https://github.com/notsaied/haircut-backend.git
  2. composer install 
  3. php artisan key:generate
  4. php artisan migrate --seed
  5. npm install
  6. npm run dev and npm run build
  7. php artisan storage:link
  8. add TELEGRAM_BOT_TOKEN in .env file
```
## Good to know

```bash
  - You can adjust the routes a t "bootstrap/app.php"
  - admin routes is for super admin of this Project
  - in resources/pages/components there are some components you can use, please make sure the component not require to send[array of parmaters]
  - there are prefix ec-admin for super admin routes "bootstrap/app.php"
```

## Links may you need
```bash
  - Dashboard Docs
     https://bootstrapdemos.adminmart.com/modernize/dist/main/index.html
  
  - Super admin login
     /ec-admin 

  - Telegram Webhook
     /telegram/webhook

  - Postman Collection 
     https://documenter.getpostman.com/view/36197059/2sAYBaA9cj
  
        
```


