Buzzword Job Title Provider for Faker
====================

[![Build Status](https://travis-ci.org/Brunty/faker-buzzword-job-titles.svg?branch=develop)](https://travis-ci.org/Brunty/faker-buzzword-job-titles)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/686edff0-47b0-413a-ad08-bedd66a7084e/mini.png)](https://insight.sensiolabs.com/projects/686edff0-47b0-413a-ad08-bedd66a7084e)


## Install
Install the provider by adding `brunty/faker-buzzword-jobs` to your composer.json or from the command line:

```
$ composer require brunty/faker-buzzword-jobs
```

## Usage

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \Brunty\Faker\BuzzwordJobProvider($faker));
                                 
$jobTitle = $faker->jobTitle();
```

## Examples of job titles:

* Holistic Insight Associate
* Industry Leading Release Reviewer
* Offline Module Scout
* Creative Integration Planner

## Contributing

Although this project is small and mostly a humourous poke at buzz words, openness and inclusivity are taken very seriously. To that end the following code of conduct has been adopted.

[Contributor Code of Conduct](CONTRIBUTING.md)
