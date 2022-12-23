<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return response()->json($movie);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'year' => 'required|numeric|digits:4',
            'duration' => 'required',
            'genre' => 'required',
            'director' => 'required',
        ];
        $messages = [
            'title.required' => 'El título es obligatorio',
            'description.required' => 'La descripción es obligatoria',
            'image.required' => 'La imagen es obligatoria',
            'year.required' => 'El año es obligatorio',
            'year.numeric' => 'El año debe ser numérico',
            'year.digits' => 'El año debe tener 4 dígitos',
            'duration.required' => 'La duración es obligatoria',
            'genre.required' => 'El género es obligatorio',
            'director.required' => 'El director es obligatorio',
        ];
        try {
            $request->validate($rules, $messages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json($e->errors(), 422);
        }
        $movie = Movie::create($request->all());
        return response()->json($movie);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'year' => 'required|numeric|digits:4',
            'duration' => 'required',
            'genre' => 'required',
            'director' => 'required',
        ];
        $messages = [
            'title.required' => 'El título es obligatorio',
            'description.required' => 'La descripción es obligatoria',
            'image.required' => 'La imagen es obligatoria',
            'year.required' => 'El año es obligatorio',
            'year.numeric' => 'El año debe ser numérico',
            'year.digits' => 'El año debe tener 4 dígitos',
            'duration.required' => 'La duración es obligatoria',
            'genre.required' => 'El género es obligatorio',
            'director.required' => 'El director es obligatorio',
        ];
        try {
            $request->validate($rules, $messages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json($e->errors(), 422);
        }
        $movie = Movie::find($id);
        $movie->update($request->all());
        return response()->json($movie);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return response()->json($movie);
    }

}
