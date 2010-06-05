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
  public function executePsubmit(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
   
    $params = array(
      'zone'    => $request->getParameter('zone'),
    );
   
    $this->redirect('match/result?'.http_build_query($params));
  }

  public function executeResult()
  {
  }

}
