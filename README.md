manok
===

Add fancy security headers to your Laravel application

- **X-Frame-Options** - Provides Clickjacking protection
- **Access-Control-Allow-Origin** - tells the browser that the content of this page is accessible to certain domains

Install
---

```
"require": {
  "vohof/manok": "~0.1.0"
}
```

Config
---

Edit `app/config/packages/vohof/manok/security.php` to suit your needs.

```
$ php artisan config:publish vohof:manok
```
