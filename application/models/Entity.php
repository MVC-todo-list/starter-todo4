<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Entity extends CI_Model {
    
    // All properties of a task
    public $id;
    public $task;
    public $priority;
    public $size;
    public $group;
    public $deadline;
    public $status;
    public $flag;

    // If this class has a setProp method, use it, else modify the property directly
    // Magic setter
    public function __set($key, $value) {
        // if a set* method exists for this key, 
        // use that method to insert this value. 
        // For instance, setName(...) will be invoked by $object->name = ...
        // and setLastName(...) for $object->last_name = 
        $method = 'set' . str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $key)));
        if (method_exists($this, $method))
        {
                $this->$method($value);
                return $this;
        }
        
        // Otherwise, just set the property value directly.
        $this->$key = $value;
        return $this;
    }
    // Setter method for the property ID
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    // Setter method for the property task
    public function setTask($task) {
        $this->task = $task;
        return $this;
    }
    // Setter method for the property priority
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }
    // Setter method for the property size
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }
    // Setter method for the property group
    public function setGroup($group) {
        $this->group = $group;
        return $this;
    }
    // Setter method for the property deadline
    public function setDeadline($deadline) {
        $this->deadline = $deadline;
        return $this;
    }
    // Setter method for the property status
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    // Setter method for the property flag
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }
}

