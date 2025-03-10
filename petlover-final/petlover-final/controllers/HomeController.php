<?php
require_once 'controllers\Controller.php';

class HomeController extends Controller{
    public function index() {
        $this->render('public.pages.home');
       // require_once __DIR__ . '/../views/page/home.view.php';
    }

    public function addToCart($productId){
        // dd($productId);
        $product = $this->model('Product')->find($productId);

        if (!isset($_SESSION['productCart'])) {
            $_SESSION['productCart'] = [];
        }

        $_SESSION['productCart'][] = $product;
        // dd($_SESSION['productCart']);

        $this->redirect('/shoping' );
    }



    public function getCarts(){
        // dd($_SESSION['productCart']);
        $sumPrice = 0;
        if (isset($_SESSION['productCart'])) {
            foreach($_SESSION['productCart'] as $productArray) {
                // $product = $productArray[0];
                $sumPrice += $productArray['price'];
            }
        }
        // dd($sumPrice);
        $finalPrice = $sumPrice - ($sumPrice * (10 / 100));
        // dd($finalPrice);
        $this->render('public.cart.cart', ['title' => 'Cart' , 'sumPrice' => $sumPrice , 'finalPrice'=> $finalPrice]);
    }



    public function removeCart($id){
        if (isset($_SESSION['productCart'])) {
            foreach ($_SESSION['productCart'] as $key => $productArray) {
                // $product = $productArray[0];
                if ($id == $key) {
                    unset($_SESSION['productCart'][$key]);
                    $_SESSION['productCart'] = array_values($_SESSION['productCart']);
                    break;
                }
            }
        }
        $this->redirect('/user/cart');
    }

    public function getCheckout(){
        $total = 0;
        if (!isset($_SESSION['user'])) {
            $this->redirect('/login');
        } else {
            if (isset($_SESSION['productCart'])) {
                foreach($_SESSION['productCart'] as $productArray) {
                    // $product = $productArray[0];
                    $total += $productArray['price'];
                }
                // dd('ss');
                $ss = $this->model('Order')->create([
                    'user_id' => $_SESSION['user']['id'],
                    'total' => $total,
                    'status' => 'completed'
                ]);
                // dd($ss);
                $order = $this->model('Order')->getlastorder();
                // dd($order);
                foreach($_SESSION['productCart'] as $productArray) {
                    // $product = $productArray[0];
                    $this->model('OrderDetails')->create([
                        'order_id' => $order['order_id'],
                        'product_id' => $productArray['id'],
                        'quantity' => 1,
                        'price' => $productArray['price']
                    ]);
                }

                unset($_SESSION['productCart']);
                $this->redirect('/');
            } else {
                $this->redirect('/user/checkout');
            }
        }
    }
}