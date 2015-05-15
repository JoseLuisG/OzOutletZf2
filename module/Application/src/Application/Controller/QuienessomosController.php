<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
include "FunctionsQuienessomosController/FunctionsQuienessomosController.php";
// controlador
class QuienessomosController extends AbstractActionController
{
    public function indexAction()
    {
        $parametro = interactua_php("index");
        return new ViewModel(array("interactua_php" => $parametro));
    }
    
    public function fotosAction()
    {
        $parametro = interactua_php("fotos");
 
        $id = (int)$this->params()->fromRoute("id", 1);
        $imagenes = imagenes($id);
        $count_imagenes = count_imagenes(2);
 
        return new ViewModel(array(
            "interactua_php" => $parametro, 
    
            "id" => $id, 
            "imagenes" => $imagenes,
            "count_imagenes" => $count_imagenes ));
    }
    
    public function musicaAction()
    {
        $parametro = interactua_php("musica");
        return new ViewModel(array("interactua_php" => $parametro));
    }
}