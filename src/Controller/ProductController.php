<?php

namespace App\Controller;

use App\Form\Type\ProductOrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product_show')]
    public function show(Request $request): Response
    {
        $form = $this->createForm(ProductOrderType::class);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $data = $form->getData();
         
            $this->addFlash('success', sprintf(
                'Produit ajouté au panier : %d x Headphones (%s)',
                $data['quantity'],
                $data['color']
            ));
            return $this->redirectToRoute('app_product_show');
        }
        
        return $this->render('product/show.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}