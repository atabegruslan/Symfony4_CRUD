<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Article;

class ArticleController extends AbstractController
{
  /**
   * @Route("/", name="article_list")
   * @Method({"GET"})
   */
  public function index() 
  {
    //return new Response('<p>Hello</p>');

    $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

    return $this->render('articles/index.html.twig', ['articles' => $articles]);
  }

  /**
   * @Route("/article/save")
   */
  public function save() 
  {
    $entityManager = $this->getDoctrine()->getManager();

    $article = new Article();
    $article->setTitle('Aaa');
    $article->setBody('Bbb');

    $entityManager->persist($article);
    $entityManager->flush();

    return new Response('Article created with id: ' . $article->getId());
  }
}
