# Database, Seeder and Factory

## Theory

- https://laravel.com/docs/11.x/database-testing
- https://www.nicesnippets.com/blog/laravel-8-factory-example-tutorial
- https://www.youtube.com/watch?v=MHBDUJ51Pqs

Create seeder: `php artisan make:seeder VerbXxxsSeeder`

Run seeder:
- All Seeders: `php artisan db:seed`
- One Seeder: `php artisan db:seed --class=VerbXxxsSeeder`
- Migrate and seed from fresh: `php artisan migrate:fresh --seed`

Create factory: `php artisan make:factory XxxFactory --model=Xxx`

Run factory: By code either from seeder or test files

### Seed

In the seeder file, you can seed the DB with dummy data via 2 ways

`User::factory(10)->create();`

or

```
for ($i = 0; $i < 10; $i++)
{
    User::create([
        'name' => fake()->name(),
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => bcrypt('secret'),
        'remember_token' => Str::random(10),
    ]);
}
```

Using the for loop is slower though. So it's better to use the factory method.

Inside the factory class is like this:

```
public function definition()
{
    return [
        'name' => fake()->name(),
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => bcrypt('secret'), // bcrypt or Hash::make()
        'remember_token' => Str::random(10),
    ];
}
```

### More about Factory

#### State

- States (eg: for generating only users of admin type) https://stackoverflow.com/a/57502690

![](/Illustrations/state.png)

#### Make and create "hooks"

- `create` persists to DB. `make` creates 1 instance of model https://stackoverflow.com/a/44119474
- A model instance is made first, then `afterMaking` closure is called, then the Object is writen into the DB and finally `afterCreating` is called https://stackoverflow.com/q/58953181

![](/Illustrations/create.png)

## To Seperate Testing Databases

`.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

TEST_DB_DATABASE=laravel-test
TEST_DB_USERNAME=root
TEST_DB_PASSWORD=
```

`config\database.php`
```
'connections' => [
	...

    'testing' => [
        'driver' => 'mysql',
        'url' => env('DATABASE_URL'),
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('TEST_DB_DATABASE', 'forge'),
        'username' => env('TEST_DB_USERNAME', 'forge'),
        'password' => env('TEST_DB_PASSWORD', ''),
    ],
]
```

`phpunit.xml`
```
<php>
	...
    <env name="DB_CONNECTION" value="testing"/>
```

Then if you call factory methods from the test classes, dummy data will be written to the test database instead.

### Example

Go into out-of-the-box `tests/Feature/ExampleTest.php`

Start by without using the `Illuminate\Foundation\Testing\RefreshDatabase` trait

Add this line `\App\Models\User::factory(10)->create();`

Then check the database, you will see that the dummy data will be written into the test database.

PS: If you use `RefreshDatabase`, then the database will be cleared or restored after each test.

## More on `RefreshDatabase`

https://www.youtube.com/watch?v=vAx0u26eSgM
