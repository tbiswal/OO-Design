<?php

// interface segregation principle - good example
interface IWorkable {
    public function work();
}

interface IFeedable {
    public function eat();
}


class Worker implements IWorkable, IFeedable{
    public function work() {
        // working
    }
    public function eat() {
        // eating in launch break
        //
    }
}

class SuperWorker implements IWorkable, IFeedable{
    public function work() {
    // working much more
    }

    public function eat() {
    // eating in launch break
    }
}

class RobotWorker implements IWorkable {
    public function work() {
    // working
    }
}

class Manager {

    private $worker;

    public function setWorker(IWorkable $w) {
        $this->worker = $w;
    }

    public function manage() {
        $this->worker.work();
    }
}
