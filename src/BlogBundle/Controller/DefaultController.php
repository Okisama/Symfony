<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        echo 'index action';
        echo "<br> </br>";
        return $this->render('BlogBundle:Default:index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction($page, $article, $_format)
    {


      $url = $this->generateUrl(
          'blog_list',
          array('page' => $page, 'article' => $article, '_format' => $_format)
      );
        $response = new Response();
        $response->setContent($url);
        echo "list action";
        echo "<br> </br>";
        echo 'url is '.$url;
        echo "<br> </br>";
        return $this->render('BlogBundle:Default:index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($slug)
    {

       /* $url = $this->get('router')->generate('blog_show', array(
            'page' => $slug,
            'category' => 'new')
        );*/
        $response = new JsonResponse();
        $response->setData(array(
            'page' => $slug,
            'category' => 'new'));
        echo "show action returning JsonResponse";
        echo "<br> </br>";
        echo 'slug is '.$slug;
        echo "<br> </br>";
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
