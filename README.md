### Using JMS/Serializer with Doctrine standalone

This is the sample how to install and properly configure both tools to work together without Symfony framework

1. Install required libraries via composer (see composer.json)

2. Write actual database driver configuration (see init.inc.php)

3. Enter into project directory and run command `vendor/bin/doctrine orm:schema-tool:create` to create your database schema.

4. Run `php test1.php` to deserialize JSON-formatted data and save it into the database (test without merging, see test1.php).

5. Run `php test2.php` to deserialize JSON-formatted data with database exsistent object (test with merging, see test2.php).

6. View annotations usage samples in model classes (see src directory).
