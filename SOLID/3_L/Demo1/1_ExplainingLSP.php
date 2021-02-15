<?php

class A {

  public function fire() {}

}

class B extends A {

  public function fire(){}

}

function doSomething(A $obj)
{
  // Do something with it
}
