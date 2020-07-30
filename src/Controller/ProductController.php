<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Product;
use App\Entity\Category;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
      $pRepo = $this -> getDoctrine() -> getRepository(Product::class);
      $cRepo = $this -> getDoctrine() -> getRepository(Category::class);
      //1 : Récupérer des données
      $products = $pRepo -> findAll();
      $categories = $cRepo -> findAll();

      //2 : Afficher la vue
      return $this -> render('product/index.html.twig', [
        'products' => $products,
        'categories' => $categories,
      ]);
    }




    /**
     * @Route("/product/{slug}", name="product")
     */
    public function product(Product $product){
      return $this -> render('product/show.html.twig',[
        'product' => $product
      ]);
    }





    /**
     * @Route("/category/{slug}", name="category")
     */
    public function category(Category $category)
    {
      $cRepo = $this -> getDoctrine() -> getRepository(Category::class);
      $categories = $cRepo -> findAll();

      return $this -> render('product/index.html.twig', [
        'products' => $category -> getProducts(),
        'categories' => $categories,
      ]);
    }

    /**
     * @Route("/recherche/", name="recherche")
     */
    public function search(Request $request)
    {
      $term = $request -> query -> get('s');

      $pRepo = $this -> getDoctrine() -> getRepository(Product::class);
      $cRepo = $this -> getDoctrine() -> getRepository(Category::class);

      $products = $pRepo -> findByTerm($term);
      $categories = $cRepo -> findAll();

      return $this -> render('product/index.html.twig', [
        'products' => $products,
        'categories' => $categories
      ]);
    }




}
