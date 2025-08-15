# Installation - Authentication & Permissions Setup

This guide covers the additional setup steps required after the initial Laravel project installation to configure authentication and role-based permissions.

## Prerequisites

- Laravel 12 project already installed with composer dependencies
- Database configured and migrations run
- Node.js dependencies installed

## Steps

### 1. Install Laravel Breeze (Authentication Scaffolding)

```bash
# Install Laravel Breeze for authentication
composer require laravel/breeze --dev

# Install Breeze scaffolding
php artisan breeze:install

# Note: Choose "Blade" when prompted for the frontend stack
# This will create login/register views and authentication routes
```

### 2. Run Authentication Migrations

```bash
# Install and run Breeze migrations
php artisan migrate

# Install and build frontend assets
npm install && npm run build
```

### 3. Install Spatie Laravel Permission Package

The package is already added to composer.json, but you need to publish its configuration:

```bash
# Publish the migration and config files
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

# Run the permission migrations
php artisan migrate
```

### 4. Seed Roles and Permissions

```bash
# Run the database seeders (includes RolePermissionSeeder)
php artisan db:seed --class=RolePermissionSeeder

# Or run all seeders which includes permissions
php artisan migrate:fresh --seed
```

### 5. Configure First Admin User

After running the seeders, the first user in the database will automatically be assigned the 'admin' role. To create an admin user:

```bash
# Create a user through the registration form, or via tinker:
php artisan tinker

# In tinker:
$user = \App\Models\User::create([
    'name' => 'Admin User',
    'email' => 'admin@d-harvest.com',
    'password' => bcrypt('secure-password')
]);

$user->assignRole('admin');
exit
```

### 6. Verify Setup

1. **Test Authentication**: Visit `/login` and `/register` to ensure auth pages work
2. **Test Admin Access**: Login as admin and visit `/admin/dashboard`
3. **Test Telescope**: Visit `/telescope` (should be accessible as admin or in local environment)

## Available Permissions

The system creates the following permissions:
- `manage services`
- `manage posts`
- `manage projects`
- `manage partners`
- `manage faq`
- `manage testimonials`
- `manage users`

## Admin Role

The `admin` role is created with all permissions granted. Additional roles can be created as needed:

```php
// Create a new role
$role = Role::create(['name' => 'editor']);

// Grant specific permissions
$role->givePermissionTo(['manage posts', 'manage faq']);
```

## Protected Routes

Admin routes are protected by the `auth` and `role:admin` middleware:

```php
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin']
], function () {
    // Admin routes here
});
```

## Troubleshooting

### Permission Issues
If you encounter permission-related errors:
```bash
# Clear permission cache
php artisan permission:cache-reset
```

### Authentication Issues
If authentication isn't working:
```bash
# Clear application cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Database Issues
If you need to reset everything:
```bash
# Fresh install with all seeders
php artisan migrate:fresh --seed
```

## Security Notes

1. Change default passwords immediately in production
2. Use strong passwords for admin accounts
3. Regularly review user permissions
4. Enable 2FA if required for your application
5. Monitor access logs via Telescope

## Next Steps

After completing this setup:
1. Customize the admin dashboard views
2. Add more specific roles and permissions as needed
3. Implement additional security measures (2FA, etc.)
4. Configure email settings for password resets
5. Set up proper logging and monitoring