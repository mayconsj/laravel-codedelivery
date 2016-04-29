<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;

class CheckoutController extends Controller
{
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;

    public function __construct(
        OrderRepository $repository,
        UserRepository $userRepository,
        ProductRepository $productRepository
    )
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository;
    }

    public function create()
    {
        $products = $this->productRepository->lists('name','id');
        return view('customer.order.create', compact('products'));
    }


}
