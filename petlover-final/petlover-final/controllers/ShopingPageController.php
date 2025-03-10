<?php
require_once 'models/productt.php';
require_once 'controllers/Controller.php';
require_once 'config/Database.php';
class ShopingPageController extends Controller
{
    public function index()
    {
        $product = $this->model('product');
        $products = $product->all();
        $this->render('public.products.shoping', [
            'pageTitle' => 'All products',
            'products' => $products
        ]);
    }

    public function getByCategory($categoryId)
    {
        $product = $this->model('product');
        $products = $product->where('category_id', $categoryId);
        $this->render('public.products.categoryFood', [
            'pageTitle' => 'Category products',
            'products' => $products
        ]);
    }
    
}