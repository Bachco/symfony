<?php
// src/AppBundle/Controller/EverlutionController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EverlutionController
{
/**
* @Route("everlution")
*/
    public function indexAction()
    {
        return new Response(
        'Naucil som sa to!'
        );
    }
}