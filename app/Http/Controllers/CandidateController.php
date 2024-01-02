<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CandidateController extends Controller
{
    public function index(Request $request)
    {
        return 'home-page';
    }

    public function store(Request $request)
    {
        $data = request->all();

        Candidate::create($data);

        return [
            'response' => Reponse::HTTP_OK
        ]
    }

    public function update(Request $request)
    {
      $dataUpdate = $request->all()->validated();

      Candidate::update($dataUpdate);

      return Response::HTTP_OK;
    }

    public function show(Request $request, $id)
    {
        $data = Candidate::find($id);

        return $data->toArray();
    }

    public function destroy(Request $request)
    {
        return Candidate::find($request->id)->delete();
    }

    public function checkExists(Builder $query)
    {
        return $query->exists();
    }
}
