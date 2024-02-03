<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return 'home-page';
    }

    public function store(Request $request)
    {
        $data = request->all();

        User::create($data);

        return [
            'response' => Reponse::HTTP_OK
        ]
    }

    public function update(Request $request)
    {
      $dataUpdate = $request->all()->validated();

      User::update($dataUpdate);

      return Response::HTTP_OK;
    }

    public function show(Request $request, $id)
    {
        $data = User::find($id);

        return $data->toArray();
    }

    public function destroy(Request $request)
    {
        return User::find($request->id)->delete();
    }

    public function checkExists(Builder $query)
    {
        return $query->exists();
    }
}
