<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class KanbanController extends Controller
{
    public function index(Request $request)
    {
        return 'home-page';
    }

    public function store(Request $request)
    {
        $data = request->all();

        Kanban::create($data);

        return [
            'response' => Reponse::HTTP_OK
        ]
    }

    public function update(Request $request)
    {
      
    }

    public function show(Request $request)
    {
      
    }

    public function destroy(Request $request)
    {
      
    }
}
