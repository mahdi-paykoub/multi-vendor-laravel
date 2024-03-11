<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('main', function (BreadcrumbTrail $trail) {
    $trail->push('خانه', route('main'));
});

//Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('main');
    $trail->push('وبلاگ', route('blog'));
});
//Home > Blog > category name
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail, \App\Models\Article $article) {
    $trail->parent('blog');
    $category_name = $article->articleCategories()->first()->title;
    $trail->push($category_name , 'saxasxasx');
});

//Home > Blog > article name
Breadcrumbs::for('singleBlog', function (BreadcrumbTrail $trail, \App\Models\Article $article) {
    $trail->parent('categories', $article);
    $trail->push($article->title, route('single.blog', $article->slug));
});
