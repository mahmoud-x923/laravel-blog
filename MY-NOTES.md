# Laravel from scratch Notes - 13/01/2023

## 1. Laravel Installation & New Project

### Install via composer

```
$ composer create-project laravel/laravel demo-example
```

<br>

### Install via laravel installer tool
First install *laravel installer* 

```
$ composer global requier laravel/installer`
```

Then you can create new project as following:

```
$ laravel new demo-example

$ cd demo-example

$ php artisan serve
```


<br>

## 2. Nested query bug when using search

Make sure to group and seperate your queries using
`where(fn ($query) => {})`

<br>

## 3. Paginator

If you want to style the _paginator_ you need first to publish it to your local app.

    $ php artisan vendor:publish

You can keep the request query string when navigating between pages.
Example:

```php
Post::all()->paginate()->withQueryString()
```

<br>

## 4. Validation

### There is two ways to validate request data:

```php
request()->validate([
    'username' => 'required|max:255|min:3|unique:users,username',
    'email' => 'required|email|unique:users,email'
])
```

Or like this:

```php
request()->validate([
    'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
    'email' => ['required', 'max:255', Rule::unique('users', 'email')]
])
```

<br>

### Compare raw password to a hashed password

```php
$password = 'password';
$hashed = bcrybt($password);
Illuminate\Support\Facades\Hash::check($password, $hashed) // True
```

<br>

### Class setters/mutators for auto encrypting

```php
public function setPasswordAttribute($password)
{
    $this->attributes['password'] = bcrypt($password);
}
```

<br>

### Class accessors

```php
public function getUsernameAttribute($username)
{
    return ucwords($username);
}
```

<br>

### Display all errors at the bottom of the form

Go to the view then do the following

```php
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="text-red-500 text-xs">{{ $error }}</li>
        @endforeach
    </ul>
@endif
```

<br>

## 5. Log In

### session fixation

When logging a user in manually, you should regenerate the session to prevent _Session Fixation_.

```php
if (auth()->attempt($attribute)) {
    // session fixation
    session()->regenerate();

    return redirect('/')->with('success', 'Welcome Back');
}
```
