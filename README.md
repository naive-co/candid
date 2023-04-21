# Candid

> Custom Laravel starter app. GDPR Compliant. Secure. Opinionated.

---

## Frontend
- Tailwind UI
- Alpine JS

---

## Backend
- PHP ^8.1
- livewire/livewire
- laravel/jetstream
- pestphp/pest

---

## Opinions

### App\Models\User

The `name` property has been splitted in two separate fields : `firstname` and `lastname`.

---

## Configuration

### Languages

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
