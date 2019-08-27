<?php

namespace App\Controller\Rest;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Famille;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


    class FamilyRestController extends FOSRestController
{
     /**
		* Retrieves an Article resource
 		* @Rest\Get("/family/byid/{familyId}")
 		* @return View
 		*/
		public function getFamilyById(int $familyId): View {
			
			$family = $this->getDoctrine()->getRepository(Famille::class)->find($familyId);
			return View::create($family, Response::HTTP_OK);
		}

		/**
		* Retrieves all Family
 		* @Rest\Get("/family/allfamily")
 		* @return View
 		*/
		public function getAllFamily(){
			$allFamily = $this->getDoctrine()->getRepository(Famille::class)->findAll();
			return View::create($allFamily, Response::HTTP_OK);
			}
			
}