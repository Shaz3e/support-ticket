# Laravel Support Ticket System

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