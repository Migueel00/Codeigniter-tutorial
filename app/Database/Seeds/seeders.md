In CodeIgniter 4, seeders are used to populate your database with sample data or initial data. They are especially useful when you need to fill your tables with default values for testing or development purposes.

1️⃣ What is a Seeder?
A seeder is a class that can be used to insert data into a database table. It contains the logic for creating records and can be executed through the command line or as part of your application.

7️⃣ Why Use Seeders?
Populate tables with initial data (e.g., admin users, configuration settings).
Fill the database with sample data for testing purposes.
Speed up the process of development when you need data to interact with.

to create a seeder

php spark make:seeder <Name> --> Make a seeder

php spark db:seed <Name> --> Run a seeder