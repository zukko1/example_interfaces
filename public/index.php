<?php

interface CanFly {
  public function fly();
}

interface CanSwim {
  public function swim();
}

class Bird {
  public function info() {
    echo "I am a {$this->name}\n";
    echo "I am an bird\n";
  }
}

class Dove {

}

class Penguin {

}

class Duck {

}

function describe($bird) {
  if ($bird instanceof Bird) {
    $bird->info();
    if ($bird instanceof CanFly) {
      $bird->fly();
    }
    if ($bird instanceof CanSwim) {
      $bird->swim();
    }
  } else {
    echo "This is not a bird. I cannot describe it.";
  }
}





describe(new Penguin);
echo "---\n";

describe(new Dove);
echo "---\n";

describe(new Duck);