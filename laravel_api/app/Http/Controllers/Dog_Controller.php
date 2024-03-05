<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Dog;

class DogController extends Controller
{
    public function index()
    {
        try {
            $dogs = Dog::all();
            
            return response()->json($dogs);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'raza' => 'required|string',
                'tamaño' => 'required|string',
                'color_pelo' => 'required|string',
                'fecha_nacimiento' => 'required|date',
            ]);

            $dog = Dog::where('raza', $request->get('raza'))
                ->where('tamaño', $request->get('tamaño'))
                ->where('color_pelo', $request->get('color_pelo'))
                ->first();
                
            if ($dog) {
                return response()->json(['message' => 'Dog already exists!'], 400);
            }

            $imgPath = $request->file('foto')->store('public/images');

            $dog = new Dog([
                'foto' => str_replace('public/', '', $imgPath), // remove 'public/' from the path
                'raza' => $request->get('raza'),
                'tamaño' => $request->get('tamaño'),
                'color_pelo' => $request->get('color_pelo'),
                'fecha_nacimiento' => $request->get('fecha_nacimiento'),
            ]);

            $dog->save();

            return response()->json([
                'message' => 'Dog created!',
                'dog' => $dog
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        try {
            $dog = Dog::find($id);

            if (!$dog) {
                return response()->json(['message' => 'Dog not found!'], 404);
            }

            Storage::delete('public/' . $dog->foto);
            $dog->delete();

            return response()->json(['message' => 'Dog deleted!']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}