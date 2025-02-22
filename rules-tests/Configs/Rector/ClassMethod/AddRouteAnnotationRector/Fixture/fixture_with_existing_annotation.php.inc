<?php

namespace Rector\Symfony\Tests\Configs\Rector\ClassMethod\AddRouteAnnotationRector\Fixture;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends Controller
{
    /**
     * @\Symfony\Component\Routing\Annotation\Route(path="/all/{foo}/{page}", name="all", host="m.example.com", schemes={"http", "https"}, methods={"GET", "POST"}, condition="context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'")
     */
    public function allAction()
    {
    }

    /**
     * @Route("/short")
     */
    public function shortAction()
    {
    }

    public function minimalAction()
    {
    }
}

?>
