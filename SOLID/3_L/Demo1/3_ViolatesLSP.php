<?php

interface LessonRepositoryInterface {

  public function getAll();

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

    return Lesson::all(); // violates the LSP

  }

}

// Note: The consumer of these two classes will not implement identically

function foo(LessonRepositoryInterface $lesson)

{

  $lessons = $lesson->getAll();

  //if (is_a()) Violates OCP
  //if (instanceof()) Violates OCP

}
