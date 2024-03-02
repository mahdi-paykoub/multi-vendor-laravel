<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('main', function (BreadcrumbTrail $trail) {
    $trail->push('Main', route('main'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->push('خانه', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('singleBlog', function (BreadcrumbTrail $trail, \App\Models\Article $article) {
    $trail->parent('blog');
    $trail->push($article->title, route('blog', $article));
});
