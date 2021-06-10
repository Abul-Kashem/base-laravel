<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;
    protected $column_order;

    protected $order_value;
    protected $dir_value;
    protected $start_value;
    protected $length_value;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * 
     * @return [type] mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * 
     * @return [type] mixed
     */
    public function insert(array $attributes)
    {
        return $this->model->insert($attributes);
    }

    /**
     * @param array $attributes
     * @param int $id
     * 
     * @return bool
     */
    public function update(array $attributes, int $id):bool
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * @param array $search_data
     * @param array $attributes
     * 
     * @return mixed
     */
    public function updateOrCreate(array $search_data, array $attributes)
    {
        return $this->model->updateOrCreate($search_data, $attributes);
    }

    /**
     * @param array $search_data
     * @param array $attributes
     * 
     * @return mixed
     */
    public function updateOrInsert(array $search_data, array $attributes)
    {
        return $this->model->updateOrInsert($search_data, $attributes);
    }

    /**
     * @param mixed $columns=array('*')
     * @param string $order_by='id'
     * @param string $sort_by='desc'
     * 
     * @return mixed
     */
    public function all($columns=array('*'), string $order_by='id', string $sort_by='desc')
    {
        return $this->model->order_by($order_by,$sort_by)->get($columns);
    }

    /**
     * @param int $id
     * 
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * @param int $id
     * 
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param array $data
     * 
     * @return mixed
     */
    public function findBy(array $data)
    {
        return $this->model->where($data)->get();
    }

    /**
     * @param array $data
     * 
     * @return mixed
     */
    public function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }

    /**
     * @param array $data
     * 
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneByFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    /**
     * @param int $id
     * 
     * @return bool
     */
    public function delete(int $id):bool
    {
        return $this->model->find($id)->delete();
    }

    /**
     * @param array $data
     * 
     * @return bool
     */
    public function destroy(array $data):bool
    {
        return $this->model->destroy($data);
    }

    /**
     * DataTable Default Value Set Method
     */

    public function setOrderValue($order_value)
    {
        $this->order_value=$order_value;
    }
    public function setDirValue($dir_value)
    {
        $this->dir_value=$dir_value;
    }
    public function setSartValue($sart_value)
    {
        $this->sart_value=$sart_value;
    }
    public function setLengthValue($length_value)
    {
        $this->length_value=$length_value;
    }

}