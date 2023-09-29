<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guru.index', [
            'guru' => User::where('role', 'guru')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create', [
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:25',
            'password' => 'required',
            'kelas_id' => 'required',
            'mapel_id' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $guru = Guru::create([
            'kelas_id' => $validatedData['kelas_id'],
            'mapel_id' => $validatedData['mapel_id'],
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'role' => 'guru',
            'guru_id' => $guru->id
        ]);

        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $guru)
    {
        return view('guru.edit', [
            'guru' => $guru,
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $guru)
    {
        $rules = [
            'name' => 'required',
            'kelas_id' => 'required',
            'mapel_id' => 'required',
        ];

        if($request->email !== $guru->email) {
            $rules['email'] = 'required|unique:users|max:25|regex:/^\S*$/';
        }

        $validatedData = $request->validate($rules);

        Guru::find($guru->guru_id)->update([
            'kelas_id' => $validatedData['kelas_id'],
            'mapel_id' => $validatedData['mapel_id'],
        ]);

        if($request->email !== $guru->email) {
            User::find($guru->id)->update([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
            ]);
        }

        User::find($guru->id)->update([
            'name' => $validatedData['name'],
        ]);
        

        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $guru)
    {
        User::destroy($guru->id);
        Guru::destroy($guru->guru_id);
        return redirect('/guru');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $guru = Guru::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('guru.index', compact('guru'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
