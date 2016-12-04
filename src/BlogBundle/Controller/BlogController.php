<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @return Response
     * Стартовая страница
     */
    public function indexAction()
    {
        $title = 'Welcome!';
        $page_title = 'Start page';
        return $this->render('index.html.twig', array('title' => $title, 'page_title' => $page_title));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function forifAction()
    {

        $user = 'guest';
        $arr = array('a', 'b', 'c');


        return $this->render('forif.html.twig', array('user' => $user, 'array' => $arr));
    }

    public function extendAction()

    {
        $title = 'Welcome!';
        $page_title = 'Start page';
        return $this->render('extend.html.twig', array('title' => $title, 'page_title' => $page_title));
    }

    public function includeAction()
    {
        $title = 'Welcome!';
        $page_title = 'Start page';
        return $this->render('include.html.twig', array('title' => $title, 'page_title' => $page_title));
    }


}
