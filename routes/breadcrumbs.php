<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Profile
Breadcrumbs::for('profile.show', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.show'));
});

// Home > View Question
Breadcrumbs::for('question.show', function ($trail) {
    $trail->parent('home');
    $trail->push('View Question', route('question.show'));
});

// Home > Create Question
Breadcrumbs::for('question.create', function ($trail) {
    $trail->parent('home');
    $trail->push('Create Question', route('question.create'));
});

// Home > View Question > View Answer
Breadcrumbs::for('answer.show', function ($trail) {
    $trail->parent('question.show');
    $trail->push('View Answer', route('answer.show'));
});

// Home > View Question > Create Answer
Breadcrumbs::for('answer.create', function ($trail) {
    $trail->parent('question.show');
    $trail->push('Create Answer', route('answer.create'));
});
