<?php

Class TodoList{
    
    protected $tasks= [];
    
    public function getTasks(){
        return $this->tasks;
    }
    
    public function addTask(Task $task) {
        $this->tasks[] = $task;
    }
    
    public function FinishedTask(){
        $this->tasks->finish();
    }
    
    public function UnFinishedTask(){
        $this->tasks->unfinish();
    }
    
    public function removeTask($index){
        array_splice($this->tasks, $index,1);
    }
    
    public function removeTaskFinished(){
        foreach($this->tasks as $index=>$task){
            if($task->getIsFinished()== true){
                $this->removeTask($index);
            }
        }
    }
    
    
    
}