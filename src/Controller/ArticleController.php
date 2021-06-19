<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
  /**
   * @Route("/", name="article_list")
   * @Method({"GET"})
   */
  public function index() 
  {
    //return new Response('<p>Hello</p>');

    $articles = [
      'aaa' => 'bbb',
      'ccc' => 'ddd',
    ];

    return $this->render('articles/index.html.twig', ['articles' => $articles]);
  }
}