<?php
// src/Controller/LuckyController.php
namespace App\Controller\Rest;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Fabricant;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


    class FabricantRestController extends FOSRestController
{
     /**
		* Retrieves an Article resource
 		* @Rest\Get("/fabricant/byid/{fabricantId}")
 		* @return View
 		*/
		public function getFabricantById(int $fabricantId): View {
			
			$fabricant = $this->getDoctrine()->getRepository(Fabricant::class)->find($fabricantId);
			return View::create($fabricant, Response::HTTP_OK);
		}

		/**
		* Retrieves an Article resource
 		* @Rest\Get("/fabricant/allfabricant")
 		* @return View
 		*/
		public function getAllFabricant(){
			$allfabricant = $this->getDoctrine()->getRepository(Fabricant::class)->findAll();
			return View::create($allfabricant, Response::HTTP_OK);
			}
}