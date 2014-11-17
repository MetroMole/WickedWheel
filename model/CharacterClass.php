<?php
/**
 *
 *
 *
 */

// require_once() here

class CharacterClass {

  private $name;
  private $player_id; // multiple characters per account?
  private $guild_id; // guild to organize gangs
  private $gang_id; // groups of 5 players, sync up adventures?
  private $class_id;
  private $hp; // health points
  private $mp; // mana points (might not be mana in the future, but whatevs)
  private $stat_strength; // STR
  private $stat_mind; // MND
  private $stat_agility; // AGI
  private $stat_luck; // LUK
  private $xp; // experience points
  private $level;
  private $date_created;
  private $is_active;

  function CharacterClass($input) {
    if ($input == 'test') { // creating test character to start
      $this->name = 'Test';
      $this->player_id = 1;
      $this->guild_id = 0;
      $this->gang_id = 0;
      $this->class_id = 1; // TODO: replace with Constant
      $this->hp = 100;
      $this->mp = 100;
      $this->stat_strength = 5;
      $this->stat_mind = 5;
      $this->stat_luck = 5;
      $this->xp = 0;
      $this->level = 1;
      $this->date_created = new DateTime();
      $this->is_active = true;
    } else {
      // fill in with DB access later
    }
  }
  
  // Accessors
  public function getName() {
    return $this->name;
  }
  public function getPlayerID() {
    return $this->player_id;
  }
  public function getGuildID() {
    return $this->guild_id;
  }
  public function getGangID() {
    return $this->gang_id;
  }
  public function getClassID() {
    return $this->class_id;
  }
  public function getHP() {
    return $this->hp;
  }
  public function getMP() {
    return $this->mp;
  }
  public function getStats() {
    return array(
      'STR' => $this->stat_strength,
      'MND' => $this->stat_mind,
      'AGI' => $this->stat_agility,
      'LCK' => $this->stat_luck,
    );
  }
  public function getXP() {
    return $this->xp;
  }
  public function getLevel() {
    return $this->level;
  }
  
  public function getCharacter($format='array') {
    switch ($format) {
      case 'json':
        return '{}';
      case 'array':
      default: // array is default
        return array(
          'Name' => $this->name,
          'PlayerID' => $this->player_id,
          'GuildID' => $this->guild_id,
          'GangID' => $this->gang_id,
          'ClassID' => $this->class_id,
          'HP' => $this->hp,
          'MP' => $this->mp,
          'Stats' => array(
            'STR' => $this->stat_strength,
            'MND' => $this->stat_mind,
            'AGI' => $this->stat_agility,
            'LCK' => $this->stat_luck,
          ),
          'XP' => $this->xp,
          'Level' => $this->level,
          'Date Created' => $this->date_created,
          'Is Active' => $this->is_active,
        );
    }
  }
  // Mutators

}
