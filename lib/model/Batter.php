<?php
class Batter
{
  private $action;
  function action($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function result($result)
  {
  }
}
