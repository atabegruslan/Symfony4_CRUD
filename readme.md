## Tutorials 

- https://www.youtube.com/watch?v=sT4dMKSA1-A
- https://www.youtube.com/playlist?list=PLqhuffi3fiMONS5B7zzD2nqGxf_TmpQB1
- https://symfony.com/doc/current/setup.html#creating-symfony-applications
- https://www.tutorialspoint.com/symfony/symfony_introduction.htm (Old but good ref)
- http://www.w3programmers.com/crud-with-symfony/ (Old but good ref)
- https://www.tutorialspoint.com/symfony/symfony_installation.htm
- https://www.youtube.com/watch?v=Bo0guUbL5uo

![Without defining home path](https://raw.githubusercontent.com/atabegruslan/Tour-Hub-Symfony4/work2019/Illustrations/0b.PNG)

```
php bin/console make:controller

> WelcomeController
```

config/routes.yaml
```
index:
   path: /
   controller: App\Controller\WelcomeController::index
```

![defined home path](https://raw.githubusercontent.com/atabegruslan/Tour-Hub-Symfony4/work2019/Illustrations/0a.PNG)
