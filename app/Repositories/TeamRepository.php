<?php
namespace App\Repositories;

use App\Contracts\TeamContract;
use App\Repositories\BaseRepository;
use App\Team;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use InvalidArgumentException;

class TeamRepository extends BaseRepository implements TeamContract
{
    use UploadAble;

    /**
     * TeamRepository constructor
     * @param Team $model
     */
    public function __construct(Team $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function teamList(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findTeamById(int $id)
    {
        try {
            return $this->findOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Team|mixed
     */
    public function createTeam(array $params)
    {
        try {
            $collection = collect($params);

            $team_image = null;

            if($collection->has('image') && ($params['image'] instanceof UploadedFile)){
                $team_image = $this->uploadOne($params['image'], 'teams');
            }
            
            $status = $collection->has('status') ? 1 : 0;

            $merge = $collection->merge(compact('status','team_image'));

            $team = new Team($merge->all());

            $team->save();

            return $team;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

     /**
     * @param array $params
     * @return mixed
     */
    public function updateTeam(array $params, $id)
    {
        $team = $this->findTeamById($id);
        
        $collection = collect($params)->except('_token');
        
        $team_image = $team->team_image;

        if($collection->has('image') && ($params['image'] instanceof UploadedFile))
        {
            if($team_image != null)
            {
                $this->deleteOne($team_image);
            }

            $team_image = $this->uploadOne($params['image'], 'teams');
        }

        $status = $collection->has('status') ? 1 : 0;

        $merge = $collection->merge(compact('status', 'team_image'));

        $team->update($merge->all());

        return $team;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteTeam($id)
    {
        $product = $this->findTeamById($id);

        $product->delete();

        return $product;
    }
}