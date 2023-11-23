# Laravel Support Ticket System

[![Total Downloads](http://poser.pugx.org/shaz3e/support-ticket/downloads)](https://packagist.org/packages/shaz3e/support-ticket)
[![Latest Stable Version](http://poser.pugx.org/shaz3e/support-ticket/v)](https://packagist.org/packages/shaz3e/support-ticket)
[![License](http://poser.pugx.org/shaz3e/support-ticket/license)](https://packagist.org/packages/shaz3e/support-ticket)

### Install Support Ticket
```bash
composer require shaz3e/support-ticket:dev-main
```

### Add service provider
```bash
Shaz3e\SupportTicket\Providers\SupportTicketServiceProvider::class,
```

### Publish Assets
```bash
php artisan vendor:publish --tag=support-ticket-assets
```

### Publish Config
```bash
php artisan vendor:publish --tag=support-ticket-config
```

### Publish Migration
```bash
php artisan vendor:publish --tag=support-ticket-migrations
```

### Publish Views
```bash
php artisan vendor:publish --tag=support-ticket-views
```

### Migration
```bash
php artisan migrate
```

### Database Seed
```bash
php artisan support-ticket:seed
```