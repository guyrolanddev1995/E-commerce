<?php

namespace App\Http\Controllers\Site;

use App\Contracts\TeamContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $teamRepository;

    public function __construct(TeamContract $teamRepository)
    {
        $this->teamRepository = $teamRepository;

    }


    public function index()
    {
        $teams = $this->teamRepository->teamList();

        return view('site.pages.about', compact('teams'));
    }
}
