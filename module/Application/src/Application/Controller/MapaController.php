<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MapaController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function filtrarAction($filtro)
    {
    	return new ViewModel();
    }
}

