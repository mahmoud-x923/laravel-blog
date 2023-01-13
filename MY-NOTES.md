# Laravel from scratch Notes - 13/01/2023

## 1. Nested query bug when using search

Make sure to group and seperate your queries using
`where(fn ($query) => {})`

<br>

## 2. Paginator

If you want to style the _paginator_ you need first to publish it to your local app.

    $ php artisan vendor:publish

You can keep the request query string when navigating between pages.
Example:

    Post::all()->paginate()->withQueryString()

<br>

## 3.
