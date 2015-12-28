### Using JMS/Serializer with Doctrine standalone

This is the sample how to install and properly configure both tools to work together without Symfony framework

1. Install required libraries via composer (see composer.json)

2. Write actual database driver configuration (see init.inc.php)

3. Enter into project directory and run command `vendor/bin/doctrine orm:schema-tool:create` to create your database schema.

4. Run `php main.php` to deserialize JSON-formatted data and save it into the database (see main.php).

5. View annotations usage samples in model classes (see src directory).
