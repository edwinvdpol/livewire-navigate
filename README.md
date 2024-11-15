## Livewire bug report

Use the steps below to reproduce the issue:

- `cp .env.example .env`
- `php artisan key:generate`
- `touch database/database.sqlite`
- `composer install`
- `php artisan migrate`
- `npm install`
- `npm run build` <-- build is important
- Visit the site in your browser and follow the pages.
