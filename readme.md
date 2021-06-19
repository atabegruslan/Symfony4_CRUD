## Tutorials 

- https://www.youtube.com/playlist?list=PLillGF-Rfqba-PQBBEf14-fi6LafvvDYS
- https://symfony.com/doc/current/doctrine.html

`composer create-project symfony/skeleton projectname`

### Doctrine

```
composer require doctrine maker
```
Do connection string in `.env`
```
php bin/console doctrine:database:create
php bin/console make:entity Article
```
Add some fields into `Entity/Article.php`
```
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate
```