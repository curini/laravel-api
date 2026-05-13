<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormFileStoreRequest;
use Illuminate\Support\Facades\Log;

class FormFileController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.file.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormFileStoreRequest $request)
    {
        $file = $request->validated('file-upload');
        $path = $file->store('uploads');

        Log::info('Un fichier ' . $file->getClientOriginalName() . ' a été sauvegardé à l\'adresse suivante:' . $path);

        return redirect(route('form.file.create'))->with('message', 'Fichier reçu!');
    }
}
