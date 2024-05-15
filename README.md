# Testing

## Preliminaries

Laravel have 2 type of tests
- Feature: `php artisan make:test XxxTest --unit` , run: `php artisan test --filter XxxTest`
- Unit: `php artisan make:test XxxTest` , run: `php artisan test --filter XxxTest`

Laravel's test is based on top of PhpUnit. If you only use PhpUnit, you wont be access the DB, route, etc functionalities.

Recap PhpUnit: https://www.youtube.com/watch?v=9-X_b_fxmRM

## Full tutorials

https://www.youtube.com/watch?v=-4RRo6CTUgA

## Easy start

TDD: https://www.youtube.com/watch?v=UHnP7ThzLpE&list=PLdXLsjL7A9k0esh2qNCtUMsGPLUWdLjHp&index=22

## Test with Github Actions

- For Laravel: https://laravel-news.com/laravel-ci-with-github-action
- Easy intro to Github actions: https://www.youtube.com/watch?v=1oJQRlz1v94
- Github actions, full tutorial: https://www.youtube.com/watch?v=TLB5MY9BBa4

There are already some example tests out of the box. 

So for the simplest first step, lets just copy a template Laravel `.github/workflows/test.yml` and push to Github and see what happens. The 2 example tests should pass on Github