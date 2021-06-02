<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\TeamContract;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class TeamController extends BaseController
{
    protected $teamRepository;

    public function __construct(TeamContract $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }
    

    public function index()
    {
        $teams = $this->teamRepository->teamList();

        $this->setPageTitle('Equipe', 'Liste des membres');
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        $this->setPageTitle('Equipe', 'Ajouter un membre');
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'post' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:1000'
        ]);

        $data = $request->except('_token');

        $team = $this->teamRepository->createTeam($data);

        if(!$team){
            return $this->responseRedirectBack('Une erreur est survenue lors de la création du membre', 'error', true, true);
        }

        return $this->responseRedirect('admin.team.create', 'Membre ajouté avec succèss', 'success', false, false);

    }

    public function edit($id)
    {
        $team = $this->teamRepository->findTeamById($id);

        $this->setPageTitle('Équipe', 'Editer #' . $team->name);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $params = $request->except('_token');

        $team = $this->teamRepository->updateTeam($params, $id);

        if (!$team) {
            return $this->responseRedirectBack('Une erreur est survenue lors de la mise à jour du membre.', 'error', true, true);
        }
        return $this->responseRedirect('admin.team.index', 'Membre mise à jour avec succèss' ,'success',false, false);
    }

    public function delete($id)
    {
        $team = $this->teamRepository->deleteTeam($id);

        if (!$team) {
            return $this->responseRedirectBack('Une erreur est survenue lors de la suppression du membre', 'error', true, true);
        }
        return $this->responseRedirect('admin.team.index', 'membre supprimé avec succèss' ,'success',false, false);
    }
}
