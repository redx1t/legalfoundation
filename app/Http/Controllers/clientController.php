<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListCaseRequest;
use App\Models\ListCase;
use Illuminate\Http\Request;

class clientController extends Controller
{
    //
    public function __construct()
    {
        ini_set('memory_limit', '5120M');
    }
    public function index()
    {
        return view('client.cases.index')->with('cases', ListCase::latest()->paginate(15));
    }
    public function create()
    {
        return view('client.cases.create');
    }
    public function store(ListCaseRequest $request)
    {
        $listcase = ListCase::create($request->all());
        return redirect(route('client.casefiles.list', $listcase->id))->with('success', 'please share with us the case files you have access to');
    }
    public function casefiles($id)
    {
        $case = ListCase::find($id);
        return view('client.casefiles')->with('case', $case);
    }
}