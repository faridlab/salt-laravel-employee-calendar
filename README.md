# Salt Laravel Employee Calendar

General information about this package.

## Installation

To install this package, please run this command below:
```$ composer require faridlab/salt-laravel-employee-calendar```

## Using this package

Information about using this package

### Publishing Configurations

To publish the config file of our package, run the following command:

```$ php artisan vendor:publish --tag=employee-calendar-config```

This will add a new ```employee-calendar.php``` file in the config directory.

### Publishing Migrations and Seeds

To publish the migration file, run the following command:

```$ php artisan vendor:publish --tag=employee-calendar-migrations```

To publish the seeder file, run the following command:

```$ php artisan vendor:publish --tag=employee-calendar-seeds```

Next, edit the .env file with your database credentials and run the following command to execute the migrations:

```$ php artisan migrate```

Run the command to seed the database with some random data:

```$ php artisan db:seed --class=employeecalendarSeeder```

## Contributing

Information about contributing to this package.
