<?php
class Game{
  const BR = '<br />';
  var $price;
  var $name;
  var $photo;
  var $dir = 'games/';

  public function print_game(){
    echo "<div style='float: left; margin-left: 40px;  margin-right: 30px; '>";
    echo "<font size='5px'>{$this->name}</font>".self::BR;
    echo "<img src='{$this->dir}{$this->photo}' style='weight:auto; height:400px;'>".self::BR;
    echo 'Үнэ: $'.$this->price;
    echo "</div>";
  }

  public function set_game($name,$price,$photo){
    $this->name = $name;
    $this->price = $price;
    $this->photo = $photo;

  }
}

$game = new Game;
$game->name = 'Bioshock Infinite';
$game->price = 14.99;
$game->photo = 'bioshock-infinite.jpg';
$game->print_game();

$game->set_game('Counter Strike Go', 34.99, 'csgo.jpg');
$game->print_game();

$game->set_game('Warcraft', 55.09, 'Warcreaft.jpg');
$game->print_game();

$game->set_game('Witcher', 26.09, 'witcher.jpg');
$game->print_game();

$game->set_game('GTA 5', 26.09, 'GTA5.jpg');
$game->print_game();



?>
