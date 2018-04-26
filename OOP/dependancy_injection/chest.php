<?php

class Chest {

  protected $lock;
 //==========================================
  public function __construct(Lock }}$lock){

    $this->lock = $lock;

  }
 //==========================================
  public function close ($lock = true){

      if ($lock ===true){

        $this->lock->lock();

      }

      $this->isClosed = true;

      echo 'Авдар хаалттай';
      }

    //=========================================
    public function open(){

      if ($this->lock->isLocked()){
         $this->lock->unlock();
      }
      $this->isClosed = false;
      echo 'Авдар нээлттэй';
    }

  public function isClosed(){
    return $this->isClosed;


  }
}

?>
