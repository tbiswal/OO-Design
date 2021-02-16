<?php

interface LessonRepositoryInterface {

  public function getAll();

}

class FileLessonRepository implements LessonRepositoryInterface {

  public function getAll()

  {

    // return through filesystem

    return [];

  }

}


// Using Eloquen Model

class DbLessonRepository implements LessonRepositoryInterface {

  public function getAll()

  {

    return Lesson::all(); // violates the LSP

  }

}
