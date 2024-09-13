<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to the employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //Act and Assert
    expect($job->employer->is($employer))->toBeTrue();

});

it('can have tags', function () {
    //Arrange
    $job = Job::factory()->create();
    $tags = ['PHP', 'Laravel', 'Vue.js'];

    //Act
    $job->tags()->attach($tags);

    //Assert
    expect($job->tags->pluck('name'))->toEqual($tags);
});
