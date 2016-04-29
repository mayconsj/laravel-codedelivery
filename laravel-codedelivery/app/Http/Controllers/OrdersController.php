<?php
/**
 * Created by PhpStorm.
 * User: Maycon
 * Date: 29/04/2016
 * Time: 04:16
 */

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\OrderRepository;

class OrdersController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate();
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = $this->repository->find($id);
        return view('admin.orders.edit', compact('order'));
    }
}