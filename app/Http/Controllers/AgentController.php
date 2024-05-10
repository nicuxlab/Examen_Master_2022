<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{

    public function index()
    {
        // $agents = Agent::all();
        $agents = Agent::select('identity', 'trimestre', 'absence', 'nb_jour_travail', 'note1', 'note2', 'note3', 'note4')->get();

        return view('welcome', compact('agents'));
    }


    public function listing()
    {
   
        $agents = Agent::orderBy('id', 'desc')->paginate(20);

        return view('listing', compact('agents'));
    }


    public function store(Request $request)
    {

        
         // $request->validate([
        //     'pdf' => 'required|mimes:pdf|max:2048',
        // ]);
    
        // if ($request->file('pdf')) {
        //     $pdfPath = $request->file('pdf')->store('pdfs');
        //     $agent = Agent::create(array_merge($request->all(), ['pdf' => $pdfPath]));
        // } else {
        //     $agent = Agent::create($request->all());
        // }

        $agent = Agent::create($request->all());

        return redirect('/listing')->with('success', 'Agent crée avec succès.');

    
    }

    
    public function show($id)
    {
        $agent = Agent::find($id);
        return view('show', ['agent' => $agent]);
    }
    
   
    public function edit(Agent $agent)
    {
        $agents = Agent::all();
        return view('edit', compact('agent', 'agents'));
    }

    public function update(Request $request, Agent $agent)
    {
        $validatedData = $request->validate([
            'identity' => 'required|max:255',
            'trimestre' => 'required|integer',
            'absence' => 'required|integer',
            'nb_jour_travail' => 'required|integer',
            
        ]);

        $agent->update($validatedData);

        return redirect('/listing')->with('success', 'Agent mise à jours avec succès');
    }

   
}
