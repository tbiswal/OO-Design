<?php
// interface segregation principle - bad example
interface IWorker {
    public function work();
    public function eat();
}

class Worker implements IWorker{
    public function work() {
        // working
    }
    public function eat() {
        // eating in launch break
        //
    }
}

class SuperWorker implements IWorker{
    public function work() {
    // working much more
    }

    public function eat() {
    // eating in launch break
    }
}

// Violation
class RobotWorker implements IWorker{
    public function work() {
    // working much more
    }

    public function eat() {
    // eating in launch break
    }
}

class Manager {

    private $worker;

    public function setWorker(IWorker $w) {
        $this->worker = $w;
    }

    public function manage() {
        $this->worker.work();
    }
}
