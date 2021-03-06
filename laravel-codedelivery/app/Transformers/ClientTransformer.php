<?php

namespace CodeDelivery\Transformers;

use CodeDelivery\Models\Client;
use League\Fractal\TransformerAbstract;

/**
 * Class ClientTransformer
 * @package namespace CodeDelivery\Transformers;
 */
class ClientTransformer extends TransformerAbstract
{

    /**
     * Transform the \Client entity
     * @param \Client $model
     *
     * @return array
     */
    public function transform(Client $model)
    {
        return [
            'id'        => (int) $model->id,
            'phone'     => $model->phone,
            'address'   => $model->address,
            'city'      => $model->city,
            'state'     => $model->state,
            'zipcode'   => $model->zipcode,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
