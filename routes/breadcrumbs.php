<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Profile
Breadcrumbs::for('profile.show', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.show', ['user_id' => Auth::user()->id,'profile_id' => Auth::user()->profile->id]));
});

// Home > Profile > Edit Profile
Breadcrumbs::for('profile.edit', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.show', ['user_id' => Auth::user()->id,'profile_id' => Auth::user()->profile->id]));
    $trail->push('Edit Profile', route('profile.edit', ['user_id' => Auth::user()->id, 'profile_id' => Auth::user()->profile->id]));
});

// Home > View Question
Breadcrumbs::for('question.show', function ($trail, $question) {
    $trail->parent('home');
    $trail->push('View Question', route('question.show', ['id' => $question]));
});

// Home > Create Question
Breadcrumbs::for('question.create', function ($trail) {
    $trail->parent('home');
    $trail->push('Create Question', route('question.create'));
});

// Home > View Question > Edit Question
Breadcrumbs::for('question.edit', function ($trail, $question) {
    $trail->parent('home');
    $trail->push('View Question', route('question.show', ['id' => $question]));
    $trail->push('Edit Question', route('question.create'));
});

// Home > View Question > View Answer
Breadcrumbs::for('answer.show', function ($trail, $question, $answer) {
    $trail->parent('home');
    $trail->push('View Question', route('question.show', ['id' => $question]));
    $trail->push('View Answer', route('answer.show', ['question_id'=> $question,'answer_id' => $answer]));
});



Breadcrumbs::for('answer.edit', function ($trail, $question, $answer) {
    $trail->parent('home');
    $trail->push('View Question', route('question.show', ['id' => $question]));
    $trail->push('View Answer', route('answer.show', ['question_id'=> $question,'answer_id' => $answer]));
    $trail->push('Edit Answer', route('answer.edit', ['question_id'=> $question, 'answer_id'=> $answer ]));
});

// Home > View Question > Create Answer
Breadcrumbs::for('answer.create', function ($trail, $question) {
    $trail->parent('home');
    $trail->push('View Question', route('question.show', ['id' => $question]));
    $trail->push('Create Answer', route('answer.create', ['question_id' => $question]));
});
