<?php

namespace App\Controller\Rest;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Catalogue;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


    class CatalogueRestController extends FOSRestController
{
     /**
		* Retrieves an Article resource
 		* @Rest\Get("/catalogue")
 		* @return View
 		*/
		public function getCatalogue(): View {
			
			$catalogue = $this->getDoctrine()->getRepository(Catalogue::class)->findCatalogue();
			return View::create($catalogue, Response::HTTP_OK);
		}

	
}