<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $slug;

    public function __construct(
        public $title,
        public $excerpt,
        public $date,
        public $body,

    ) {
        $this->slug = $this->slugify($this->title);
    }

    public static function all()
    {
        return cache()->remember('posts.all', 60 * 60, fn () => collect(File::files(resource_path("posts")))
            ->map(fn ($file) => YamlFrontMatter::parseFile($file))
            ->map(fn ($document) => new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
            ))->sortByDesc('date'));
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function slugify($titel)
    {
        return str_replace(' ', '-', strtolower(trim($titel)));
    }
}
