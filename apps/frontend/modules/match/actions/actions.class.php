<?php
/**
 * matchActions
 *
 * @uses sfActions
 */
class matchActions extends sfActions
{
  /**
   * executeIndex
   *
   * @param sfWebRequest $request
   * @return string
   */
  public function executeIndex(sfWebRequest $request)
  {
  }

  /**
   * executePitching
   *
   * @param sfWebRequest $request
   * @return string
   */
  public function executePitching(sfWebRequest $request)
  {
    $this->form = new PitchingForm();
  }

  /**
   * executePsubmit
   *
   * @param sfWebRequest $request
   * @return void
   */
  public function executePsubmit(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
   
    $zoneList = array('strike', 'ball');
    $pitching = $request->getParameter('pitching');
    $zone = $zoneList[$pitching['zone']];
    $pitcher = new Pitcher();
    $pitcher->setAction($zone);
    $batter = new Batter();
    $batter->setAction('swing');
    $game = new Game();
    $game->setPlayer($pitcher, $batter);
    $game->judgement();
    $pitcher = $game->getPitcher();
    $params = array(
      'result' => $pitcher->getResult(),
    );
 
    $this->redirect('match/result?'.http_build_query($params));
  }

  /**
   * executeResult
   *
   * @return string
   */
  public function executeResult()
  {
  }

}
