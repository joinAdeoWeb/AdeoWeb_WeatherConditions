<?php
namespace adeoweb\weatherconditions\Controller\Types;
class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{

		$type = $this->getRequest()->getParam('type');
		$type = isset($type) ? $type : 'Sun';
		echo $type;
	}
}
