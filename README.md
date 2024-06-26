# Testing

## Preliminaries

Laravel have 2 type of tests
- Feature: `php artisan make:test XxxTest` , run: `php artisan test --filter XxxTest`
- Unit: `php artisan make:test XxxTest --unit` , run: `php artisan test --filter XxxTest` or `vendor/bin/phpunit`

Laravel's test is based on top of PhpUnit. If you only use PhpUnit, you wont be access the DB, route, etc functionalities.

Recap PhpUnit: 
- https://www.youtube.com/watch?v=9-X_b_fxmRM
- https://github.com/Ruslan-Aliyev/PHPUnit

## Tutorials

- https://www.youtube.com/watch?v=-4RRo6CTUgA
- https://laravel-news.com/how-to-start-testing
- https://christoph-rumpel.com/2023/3/everything-you-can-test-in-your-laravel-application
- https://www.youtube.com/watch?v=DRhhfy2sG1E
- https://www.youtube.com/playlist?list=PL8p2I9GklV47wJibNio45rH1qOHguwq5Z

## Easy start

TDD: https://www.youtube.com/watch?v=UHnP7ThzLpE&list=PLdXLsjL7A9k0esh2qNCtUMsGPLUWdLjHp&index=22

Recaps about Database: https://github.com/Ruslan-Aliyev/laravel-test/blob/master/db.md

## Test with Github Actions

- Easy intro to Github actions: https://www.youtube.com/watch?v=1oJQRlz1v94
- Github actions, full tutorial: https://www.youtube.com/watch?v=TLB5MY9BBa4

- For Laravel: https://laravel-news.com/laravel-ci-with-github-action
- Laravel & Github Actions: https://www.youtube.com/watch?v=xg30pxmGDMw

There are already some example tests out of the box. 

So for the simplest first step, lets just copy a template Laravel `.github/workflows/test.yml` and push to Github and see what happens. The 2 example tests should pass on Github

![](/Illustrations/First_Github_Actions_Test_Results.png)

# Todo

- https://www.reddit.com/r/laravel/comments/nhayzn/setting_up_laravel_testing_with_github_actions/
- Unit test: finish circle service test. Read: faking, mocking, and stubbing https://stackoverflow.com/questions/346372/whats-the-difference-between-faking-mocking-and-stubbing , https://laravel.com/docs/9.x/mocking , https://laravel-news.com/laravel-log-fake-2-0 , https://www.youtube.com/watch?v=OaHBgJq33Tk

---

# See also

## Pest

A layer on top of PHPUnit. It can shorten the code.

- https://www.youtube.com/watch?v=jxHVaz3iOiU
- https://laravel-news.com/testing-json-api-endpoints-with-pestphp
- https://www.youtube.com/watch?v=c7k8YBFfdLU
- https://laravel-news.com/pest-php-ray

## Others

- https://laravel-news.com/behavioral-driven-development
