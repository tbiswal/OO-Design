<?php

interface LessonRepositoryInterface {

  public function getAll(): array;

}

//@return array
class FileLessonRepository implements LessonRepositoryInterface {

  public function getAll()

  {

    // return through filesystem

    return [];

  }

}


// Using Eloquen Model

// @return  collection
class DbLessonRepository implements LessonRepositoryInterface {

  public function getAll()

  {

    return Lesson::all()->toArray();

  }

}


function foo(LessonRepositoryInterface $lesson)

{

  $lessons = $lesson->getAll();


}
