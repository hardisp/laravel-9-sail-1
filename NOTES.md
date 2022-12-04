# What I did

Write down what I did with this project, so I can remember in next time.

## Put API Controller

I put controller for all API into subfolder under `app/Http/Controller/Api/v1`. This will problem in laravel 9 since they remove the protected varibale call it `namespace`.
Step by step to foix this:

- Add the namespace to the the `/app/Providers/RouteServiceProvider.php` 

```php

protected $namespaceApi = 'App\Http\Controllers\Api';

...
$this->routes(function () {
            Route::middleware('api')
                ->namespace($this->namespaceApi) // Insert this to the routes
                ->prefix('api')
                ->group(base_path('routes/api.php'));
 ....

```
