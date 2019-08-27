<?php

namespace App\Controller\Rest;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Ssfamille;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


    class SsFamilyRestController extends FOSRestController
{
     /**
		* Retrieves an Article resource
 		* @Rest\Get("/ssfamily/byid/{ssfamilyId}")
 		* @return View
 		*/
		public function getSsFamilyById(int $ssfamilyId): View {
			
			$ssfamily = $this->getDoctrine()->getRepository(Ssfamille::class)->find($ssfamilyId);
			return View::create($ssfamily, Response::HTTP_OK);
		}

		/**
		* Retrieves all Family
 		* @Rest\Get("/ssfamily/allssfamily")
 		* @return View
 		*/
		public function getAllSsFamily(){
			$allssFamily = $this->getDoctrine()->getRepository(Ssfamille::class)->findAll();
			return View::create($allssFamily, Response::HTTP_OK);
			}
			
}