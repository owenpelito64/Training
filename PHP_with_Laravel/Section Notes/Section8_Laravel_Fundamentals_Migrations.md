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

[Refer to this database documentation if ever get lost/stuck with database](https://laravel.com/docs/9.x/database)
