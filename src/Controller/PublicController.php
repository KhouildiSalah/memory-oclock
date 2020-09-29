<?php

// src/Controller/PublicController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Score;


class PublicController extends AbstractController
{
  /**
   * @Route("/memory/home/", name="app_home")
   */
    public function home()
    {

      $em = $this->getDoctrine()->getRepository(Score::class);

      // Save score in database
      if(isset($_REQUEST['totalTime']) && !empty(_REQUEST['totalTime']))){
        $score = new Score();
        $score->setScore($_REQUEST['totalTime']));
      }

      // Get all scores
      $scores = array();
      //$scores = $em->findAll();

      return $this->render('public/home.html.twig', [
            'scores' => $scores,
        ]);
    }

  /**
   * @Route("/memory/play/", name="app_play")
   */
    public function play()
    {
      return $this->render('public/play.html.twig');
    }
}
