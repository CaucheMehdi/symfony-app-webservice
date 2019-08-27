<?php
// src/Controller/LuckyController.php
namespace App\Controller\Rest;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Couleur;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


    class ColorRestController extends FOSRestController
{
     /**
		* Retrieves an Article resource
 		* @Rest\Get("/color/byid/{colorId}")
 		* @return View
 		*/
		public function getColorById(int $colorId): View {
			
			$color = $this->getDoctrine()->getRepository(Couleur::class)->find($colorId);
			return View::create($color, Response::HTTP_OK);
		}

		/**
		* Retrieves an Article resource
 		* @Rest\Get("/color/allcolor")
 		* @return View
 		*/
		public function getAllColor(){
			$allcolor = $this->getDoctrine()->getRepository(Couleur::class)->findAll();
			return View::create($allcolor, Response::HTTP_OK);
			}
}