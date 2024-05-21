<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Document;
use App\Models\User;
use App\Models\Prioritization;
use App\Models\Classification;
use App\Models\SubClassification;
use App\Models\Action;

class DocumentsController extends Controller
{
    public function create()
    {
        return redirect("admin.compose");
    }

    public function store(Request $request)
    {

        // Log::info('Store method called with data: ', $request->all());
        $request->validate([
            'sender_user_id' => 'required|exists:users,id',
            'receiver_user_id' => 'required|exists:users,id',
            'subject' => 'required',
            'description' => 'required',
            'prioritization' => 'required',
            'classification' => 'required',
            'subclassification' => 'required',
            'action' => 'required',
            'file' => 'required',
            'deadline' => 'required',
        ]);

        $document = new Document; 
        $document->document_id = $this->random();
        $document->status = $request->status ?? 'outgoing';
        $document->sender_user_id = $request->input('sender_user_id');
        $document->receiver_user_id = $request->input('receiver_user_id');
        $document->subject = $request->subject;
        $document->description = $request->description;
        $document->prioritization = $request->prioritization;
        $document->classification = $request->classification;
        $document->subclassification = $request->subclassification;
        $document->action = $request->action;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('document'), $filename);
            $document->file = $filename;
        }

        $document->deadline = $request->deadline;
        $document->save();

        return redirect()->back();
    }
    public function random()
    {

        $random_id = rand(10000, 99999);
        return $random_id;
    }
    public function index()
    {
        $document = Document::all();
        return view('document.index', compact('document'))->with('success', 'Document created successfully.');
    }
    public function incoming()
    {
        $user = Auth::user();
        $document = Document::where('to', $user->email)->where('status', '!=', 'outgoing')->get();
        return view('document.incoming', compact('document'));
    }

    public function outgoing()
    {
        $user = Auth::user();
        $document = Document::where('from', $user->email)->where('status', 'outgoing')->get();
        return view('document.outgoing', compact('document'));
    }
   

    public function moveToPending($document_id)
    {
        $document = Document::findOrFail($document_id);
        $document->status = 'pending';
        $document->save();
        return redirect()->back()->with('success', 'Document moved to pending.');
    }

    public function moveToArchive($document_id)
    {
        $document = Document::findOrFail($document_id);
        $document ->status = 'archive';
        $document ->save();
        return redirect()->back()->with('success', 'Document moved to archive.');
    }

}


