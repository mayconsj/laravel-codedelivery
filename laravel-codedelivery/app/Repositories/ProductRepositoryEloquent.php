<?php

namespace CodeDelivery\Repositories;

use CodeDelivery\Models\Product;
use CodeDelivery\Validators\ProductValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ProductRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
