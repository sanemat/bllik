<?php
class PitchingForm extends sfForm
{
  protected static $zones = array('strike', 'ball');
  public function configure()
  {
    $this->setWidgets(array(
      'zone' => new sfWidgetFormSelect(array(
        'choices' => self::$zones
      )),
    ));

    $this->widgetSchema->setNameFormat('pitching[%s]');
  }
}
