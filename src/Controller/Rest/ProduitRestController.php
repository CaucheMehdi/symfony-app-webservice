<?php
// src/Controller/LuckyController.php
namespace App\Controller\Rest;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Produit;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;


    class ProduitRestController extends FOSRestController
{
     /**
		* Retrieves an Article resource
 		* @Rest\Get("/produit/byid/{produitId}")
 		* @return View
 		*/
		public function getProduitById(int $produitId): View {
			
			$produit = $this->getDoctrine()->getRepository(Produit::class)->find($produitId);
			return View::create($produit, Response::HTTP_OK);
		}

		/**
		* Retrieves an Article resource
 		* @Rest\Get("/produit/allproduit")
 		* @return View
 		*/
		public function getAllProduit(){
			$allproduit = $this->getDoctrine()->getRepository(Produit::class)->findAll();
			return View::create($allproduit, Response::HTTP_OK);
			}
}