<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Support\Str;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $groups = Group::where('id', '!=', 1)->where('id', '!=', 2)->get();
        return view('groups.index', compact(['groups']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $group = New Group;
        $create = 1;
        return view('groups.edit', compact(['create', 'group']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GroupRequest $request, Group $Group)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $Group)
    {   

    }
}
