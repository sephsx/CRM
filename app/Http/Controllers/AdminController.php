<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalClient = Client::count();
        $totalUser = User::count();
        $totalProject = Project::count();
        return view('admin.dashboard', compact(['totalUser', 'totalClient', 'totalProject']));
    }

    public function user()
    {
        return view('admin.user.users');
    }
    public function getUser()
    {
        $getUsers = User::paginate(10);
        return view('admin.user.users', compact('getUsers'));
    }

    public function getClient()
    {
        $getClients = Client::paginate(10);
        return view('admin.client.clients', compact('getClients'));
    }
    public function createProject()
    {
        $users = User::all();
        $clients = Client::all();
        return view('admin.project.projects', compact(['users', 'clients']));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
            'assigned_user' => 'required|exists:users,id',
            'assigned_client' => 'required|exists:clients,id',
        ]);

        Project::create($request->all());
        return redirect()->route('admin.project.projects')->with('success', 'Project created successfully');
    }


    /*
         'Title',
        'Description',
        'deadline',
        'assigned_user',
        'status',
    */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}
