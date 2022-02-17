# Section 8 Notes

<hr>

**Migrations**

- Migrations are like version control for your database, allowing your team to define and share the application's database schema definition.

**sqlite**

- is a file based database; data saved in files

### Commands

- $ php artisan make:migration "name_of_the_migration" --create="name_of_table" :: this creates boilerplate for the migration.

- $ php artisan migrate :: this handles migration on database from the migrations folder. this automatically creates your table on the database.

- $ php artisan migrate:rollback :: this rolls back the last migration you did / deletes the latest migration.

- $ php artisan make:migration 'make a descriptive name for migration' --table='name of the table' :: this will make a new migration to add a column on an existing table.

- $ php artisan migrate:refresh :: reset and re-run all migrations.

- $ php artisan migrate:status :: Checks all the migrations and give you a status if that migration already ran or not.

[Refer to this database documentation if ever get lost/stuck with database](https://laravel.com/docs/9.x/database)
