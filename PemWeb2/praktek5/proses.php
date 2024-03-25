<?php 

class RankedGame {
    public $nama;
    public $rank1;
    public $rank2;
    public $rank3;
    public $rank4;
    public $rank5;

    public function __construct($nama, $rank1, $rank2, $rank3, $rank4, $rank5) {
        $this->nama = $nama;
        $this->rank1 = $rank1;
        $this->rank2 = $rank2;
        $this->rank3 = $rank3;
        $this->rank4 = $rank4;
        $this->rank5 = $rank5;
    }

    public function getAnswer1() {
        return $this->rank1 >= 'tetris' ? 20 : 0;
    }
    public function getAnswer2() {
        return $this->rank1 >= 'minecraft' ? 20 : 0;
    }
    public function getAnswer3() {
        return $this->rank1 >= 'gta5' ? 20 : 0;
    }
    public function getAnswer4() {
        return $this->rank1 >= 'wiisports' ? 20 : 0;
    }
    public function getAnswer5() {
        return $this->rank1 >= 'pubg' ? 20 : 0;
    }
  
    public function getTotalScore() {
        return $this->getAnswer1() + $this->getAnswer2() + $this->getAnswer3() + $this->getAnswer4() + $this->getAnswer5();
    }
    
    public function getAnswerFeed1() {
        return $this->rank1 >= 'tetris' ? "<span class='text-success'>correct</span>" : "<span class='text-danger'>wrong</span>";
    }
    public function getAnswerFeed2() {
        return $this->rank1 >= 'minecraft' ? "<span class='text-success'>correct</span>" : "<span class='text-danger'>wrong</span>";
    }
    public function getAnswerFeed3() {
        return $this->rank1 >= 'gta5' ? "<span class='text-success'>correct</span>" : "<span class='text-danger'>wrong</span>";
    }
    public function getAnswerFeed4() {
        return $this->rank1 >= 'wiisports' ? "<span class='text-success'>correct</span>" : "<span class='text-danger'>wrong</span>";
    }
    public function getAnswerFeed5() {
        return $this->rank1 >= 'pubg' ? "<span class='text-success'>correct</span>" : "<span class='text-danger'>wrong</span>";
    }



}

?>