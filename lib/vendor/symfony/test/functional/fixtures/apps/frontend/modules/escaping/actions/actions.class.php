<?php

/**
 * escaping actions.
 *
 * @package    project
 * @subpackage escaping
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 20546 2009-07-28 07:13:31Z fabien $
 */
class escapingActions extends sfActions
{
  public function preExecute()
  {
    $this->var = 'Lorem <strong>ipsum</strong> dolor sit amet.';
    $this->setLayout(false);
    $this->setTemplate('index');
  }

  public function executeOn()
  {
    sfConfig::set('sf_escaping_strategy', 'on');
  }

  public function executeOff()
  {
    sfConfig::set('sf_escaping_strategy', 'off');
  }
}
