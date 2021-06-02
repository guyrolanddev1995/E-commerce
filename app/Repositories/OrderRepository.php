<?php
namespace App\Repositories;

use App\Contracts\OrderContract;
use App\Order;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrderRepository extends BaseRepository implements OrderContract
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

     /**
     * @param string $order
     * @param string $sort
     * @param array  $column
     * @return mixed
     */
    public function listOrders(string $order = 'created_at', string $sort = 'desc', array $column = ['*'])
    {
        return $this->all($column, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findOrderById(int $id)
    {
        try {
            return $this->findOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneOrderBy(array $data)
    {
        return $this->findOneByOrFail($data);
    }
}