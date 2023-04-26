# 🚨 **WIP** 🚨
## 🚧 **DO NOT USE RIGHT NOW** 🚧

---

# Naive-Co/Candid

> Custom Laravel starter app. GDPR Compliant. Secure. Opinionated.

---

## Frontend
- Tailwind UI
- Alpine JS

---

## Backend

### Requirements
- php ^8.1
- ext-intl *

### Packages
- laravel/framework ^10
- livewire/livewire ^2
- laravel/jetstream ^3
- laravel/horizon ^5

### Development
- laravel/telescope ^4
- laravel/pint ^1
- nunomaduro/larastan ^2
- barryvdh/laravel-ide-helper ^2
- barryvdh/laravel-debugbar ^3
- pestphp/pest ^2

---

## Opinions

### App\Models\User

The `name` property has been splitted in two separate fields : `firstname` and `lastname`.

---

## Configuration

### Localisation

Install desired language

```bash
php artisan lang:add fr
php artisan lang:update
```

Update Application Locale

```php
// config/app.php

<?php

return [
    'locale' => 'fr',
    'fallback_locale' => 'en',
    'faker_locale' => 'fr_FR',
];
```
