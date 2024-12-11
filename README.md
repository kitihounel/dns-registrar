<p align="center">
  <a href="https://dnsforum.bj/" target="_blank">
    <img src="https://dnsforum.bj/wp-content/uploads/2018/10/full_logo_benindns.png" height="173" width="399s" alt="Logo BJ DNS Forum">
  </a>
</p>


## Registrar DNSathon

Registrar DNSathon.

## Developer doc

### Laravel version

We use Laravel 10.

### PHP

We use PHP 8.2.

### Database

We use an SQLite database for the project. Given the requirements, SQLite will be more than adequate.

If you are using a Linux distro, you need install to the Sqlite package for PHP.

For example, if you are using PHP 8.2:

```sh
sudo apt install php8.2-sqlite3
```

You will need to change the package version to match your PHP version.

### Env vars

Create a `.env` file by copying the `.env.example` file.

Your will need to set the values from the following vars:

- `APP_FOLDER_PATH`: full path to your project directory.

### Initial migrations

To create the required tables and get started, run:

```
php artisan migrate
```

### Seeders

Some seeders are available to provide you with test data.

```sh
php artisan db:seed
```
