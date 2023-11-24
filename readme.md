# Laravel Support Ticket System

[![Total Downloads](http://poser.pugx.org/shaz3e/support-ticket/downloads)](https://packagist.org/packages/shaz3e/support-ticket)
[![Latest Stable Version](http://poser.pugx.org/shaz3e/support-ticket/v)](https://packagist.org/packages/shaz3e/support-ticket)
[![License](http://poser.pugx.org/shaz3e/support-ticket/license)](https://packagist.org/packages/shaz3e/support-ticket)

### Install Support Ticket
```bash
composer require shaz3e/support-ticket
```

### Add service provider
```bash
'providers' => [
    Shaz3e\SupportTicket\Providers\SupportTicketServiceProvider::class,
]
```

### Publish the config file
```bash
php artisan vendor:publish --tag=support-ticket-config
```

### Publish Migration
```bash
php artisan vendor:publish --tag=support-ticket-migrations
```

### Migration
```bash
php artisan migrate
```

### Database Seed
```bash
php artisan support-ticket:seed
```

## Optional

### Publish Assets
```bash
php artisan vendor:publish --tag=support-ticket-assets
```

### Publish Views
```bash
php artisan vendor:publish --tag=support-ticket-views
```

#### Contributing

* If you have any suggestions please let me know : https://github.com/Shaz3e/support-ticket/pulls.
* Please help me improve code https://github.com/Shaz3e/support-ticket/pulls

#### License
Support Ticket is licensed under the MIT license. Enjoy!

## Credit
* [Shaz3e](https://www.shaz3e.com) | [YouTube](https://www.youtube.com/@shaz3e) | [Facebook](https://www.facebook.com/shaz3e) | [Twitter](https://twitter.com/shaz3e) | [Instagram](https://www.instagram.com/shaz3e) | [LinkedIn](https://www.linkedin.com/in/shaz3e/)
* [Diligent Creators](https://www.diligentcreators.com) | [Facebook](https://www.facebook.com/diligentcreators) | [Instagram](https://www.instagram.com/diligentcreators/) | [Twitter](https://twitter.com/diligentcreator) | [LinkedIn](https://www.linkedin.com/company/diligentcreators/) | [Pinterest](https://www.pinterest.com/DiligentCreators/) | [YouTube](https://www.youtube.com/@diligentcreator) [TikTok](https://www.tiktok.com/@diligentcreators) | [Google Map](https://g.page/diligentcreators)