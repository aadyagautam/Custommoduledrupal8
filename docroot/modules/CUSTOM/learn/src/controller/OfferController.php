<?php
namespace Drupal\learn\Controller;
use Drupal\Core\Controller\ControllerBase;
class OfferController extends ControllerBase
{
	
	public function hello($count)
	{
		return ['#type' => 'markup',
       '#markup' => $this->t('You will get %count% discount!!',
       array('%count' => $count)),];
	}
}