Buzzword Job Title Provider for Faker
====================



## Install
Install the provider by adding `brunty/faker-buzzword-jobs` to your composer.json or from the command line:

```
$ composer require brunty/faker-buzzword-jobs
```

## Usage

```php
$faker = Faker\Factory::create();
$faker->addProvider(new BuzzwordJobProvider($faker));
                                 
$jobTitle = $faker->jobTitle();
```