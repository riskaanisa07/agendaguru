<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin')->only(['index', 'print']);
        $this->middleware('role:guru')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('agenda.index', [
            'agenda' => Agenda::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agenda.create', [
            'guru' => auth()->user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'jam_pembelajaran' => 'required',
            'kegiatan' => 'required',
            'bukti' => 'required|image|file',
            'tanda_tangan' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['bukti'] = $request->file('bukti')->store('bukti');
        
        $signature = $this->formatSignature($validatedData['tanda_tangan']);
        $validatedData['tanda_tangan'] = $signature;

        Agenda::create($validatedData);

        return redirect('/agenda/create')->with('success', 'Agenda baru berhasil ditambahkan!');
    }

    private function formatSignature($tandaTangan)
    {
        $folderPath = public_path('signature/');
    
        $image_parts = explode(";base64,", $tandaTangan);
            
        $image_type_aux = explode("image/", $image_parts[0]);
        
        $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        
        $fileName = uniqid() . '.'.$image_type; // Buat nama file yang unik

        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);

        return $fileName; // Kembalikan nama file
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function print(Agenda $agenda)
    {
        // dd($agenda);
        $pdf = Pdf::loadView('agenda.pdf', [
            'agenda' => $agenda
        ]);
        return $pdf->stream();
    }
}
