<?php

namespace App\Controller;

use App\Form\ConfirmDeletionType;
use App\Form\ProductType;
use App\Service\Uploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Product;
use App\Entity\User;
use App\Entity\Order;
use App\Entity\Category;
use App\Entity\ProductOrder;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/product/", name="admin_product")
     */
    public function adminProduct()
    {
      $pRepo = $this -> getDoctrine() -> getRepository(Product::class);
      //1 : Récupérer des données
      $products = $pRepo -> findAll();

      //2 : Afficher la vue
      return $this->render('admin/product_list.html.twig', [
        'products' => $products,
      ]);
    }

    /**
     * @Route("/admin/product/add", name="admin_product_add")
     */
    public function adminProductAdd(Request $request, Uploader $uploader)
    {
      $manager = $this -> getDoctrine() -> getManager();

      // Création du formulaire
      $form = $this->createForm(ProductType::class);
      $form->handleRequest($request);

      // Traitement du formulaire
      if ($form->isSubmitted() && $form->isValid()) {
          $product = $form->getData();
          $image = $form['imageUpload']->getData();

          $product->setImage($uploader->savePhoto($image));
          $manager->persist($product);
          $manager->flush();

          $this->addFlash('success', 'Le produit a été enregistré');
      }

      return $this->render('admin/product_form.html.twig', [
          'form' => $form->createView(),
          'form_title' => 'Ajouter un produit',
      ]);
    }

    /**
     * @Route("/admin/product/update/{id}", name="admin_product_update")
     */
    public function adminProductUpdate(Product $product, Request $request, Uploader $uploader)
    {
      $manager = $this -> getDoctrine() -> getManager();

      // Instanciation du formulaire
      $form = $this->createForm(ProductType::class, $product);
      $form->handleRequest($request);

      // Traitement du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();
            $image = $form['imageUpload']->getData();

            if ($image !== null) {
                $product->setImage($uploader->replacePhoto($image, $product->getImage()));
            }
            $manager->persist($product);
            $manager->flush();

            $this->addFlash('success', 'Le produit a été modifié');
        }

      return $this->render('admin/product_form.html.twig', [
        'product' => $product,
        'form' => $form->createView(),
        'form_title' => 'Modifier un produit',
      ]);
    }

    /**
     * @Route("/admin/product/delete/{id}", name="admin_product_delete")
     */
    public function adminProductDelete(Product $product, Request $request, Uploader $uploader)
    {
      $manager = $this -> getDoctrine() -> getManager();

      // Instanciation du formulaire
      $form = $this->createForm(ConfirmDeletionType::class);
      $form->handleRequest($request);

      // Traitement du formulaire
      if ($form->isSubmitted() && $form->isValid()) {
          $uploader->deletePhoto($product->getImage());
          $manager->remove($product);
          $manager->flush();

          $this->addFlash('success', 'Le produit a été supprimé');
          return $this->redirectToRoute('admin_product');
      }

      return $this->render('admin/delete.html.twig', [
          'form' => $form->createView(),
          'title' => 'Supprimer un produit',
          'form_label' => 'Je confirme la suppression du produit ' . $product->getTitle(),
          'cancel_route' => 'admin_product',
      ]);
    }
}
