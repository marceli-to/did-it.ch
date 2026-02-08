# Remove unused Composer packages without updating everything

## Problem

You want to remove unused packages but can't run a full `composer update` (e.g. licensing issues, version conflicts with other packages).

## Steps

### 1. Edit `composer.json`

Remove the packages from the `require` (or `require-dev`) section:

```json
// Remove these lines:
"jgrossi/corcel": "^7.0",
"livewire/livewire": "^3.1",
```

### 2. Delete any related config files

```bash
rm config/corcel.php
```

### 3. Run a scoped Composer update

```bash
composer update jgrossi/corcel livewire/livewire --with-all-dependencies
```

This updates **only** the specified packages (and their sub-dependencies) in `composer.lock`, leaving everything else untouched.

The `--with-all-dependencies` flag ensures transitive dependencies that are no longer needed get removed too (e.g. `bordoni/phpass`, `thunderer/shortcode`).

### 4. Verify

```bash
composer validate
php artisan --version
```

## General pattern

```bash
# 1. Remove from composer.json
# 2. Delete related config/files
# 3. Scoped update
composer update vendor/package-a vendor/package-b --with-all-dependencies
# 4. Verify
composer validate && php artisan --version
```
