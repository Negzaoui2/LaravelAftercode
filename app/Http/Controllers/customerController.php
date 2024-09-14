<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class customerController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'group_Client' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'type_Client' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'Num_Téléphone' => 'required|string|max:20',
            'Devise' => 'required|string|max:3',
            'Pays' => 'required|string|max:255',
            'Région' => 'required|string|max:255',
            'Etat' => 'nullable|string|max:255',
            'Ville' => 'nullable|string|max:255',
            'Code_Postal' => 'nullable|string|max:10',
            'Adresse' => 'nullable|string|max:255',
            'Données_valides_jusquà' => 'nullable|date',
        ]);
        // Cryptage du mot de passe
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Création d'un nouveau client

        $customer = User::create($validatedData);

        return response()->json(['message' => 'Client enregistré avec succès!', 'user' => $customer], 201);
    }


    public function getAll()
    {
        $customers = User::all();
        return response()->json($customers);
    }
    public function get($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update(Request $request, $id)
    {
        $customer = User::find($id);
        if ($customer) {
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->Num_Téléphone = $request->input('Num_Téléphone');
            $customer->Etat = $request->input('Etat');
            $customer->save();

            return response()->json(['message' => 'Client mis à jour avec succès.']);
        } else {
            return response()->json(['message' => 'Client non trouvé.'], 404);
        }
    }
    public function destroy($id)
    {
        $customer = User::find($id);
        if ($customer) {
            $customer->delete();
            return response()->json(['message' => 'Client supprimé avec succès.']);
        } else {
            return response()->json(['message' => 'Client non trouvé.'], 404);
        }
    }
}