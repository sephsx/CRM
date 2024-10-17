<?php

namespace App\Http\Controllers;

use App\Models\Task;
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
        $totalTask = Task::count();
        return view('admin.dashboard', compact(['totalUser', 'totalClient', 'totalProject', 'totalTask']));
    }

    public function user()
    {
        return view('admin.user.index');
    }
    public function getUser()
    {
        $getUsers = User::paginate(10);
        return view('admin.user.index', compact('getUsers'));
    }

    public function getClient()
    {
        $getClients = Client::paginate(10);
        return view('admin.client.index', compact('getClients'));
    }
    public function createProject()
    {
        $users = User::where('is_admin', '!=', 1)->get();
        $clients = Client::all();
        return view('admin.project.index', compact(['users', 'clients']));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',          // Change to lowercase
            'description' => 'required|string',             // Add 'string' to the validation
            'deadline' => 'required|date',
            'assigned_user' => 'required|exists:users,id',
            'assigned_client' => 'required|exists:clients,id',
        ]);

        Project::create($request->all());
        return redirect()->route('admin.project.projects')->with('success', 'Project created successfully!');
    }
    public function showProjects(Request $request)
    {
        $projects = Project::with(['user', 'client'])->get();
        $query = $request->input('query');

        // If a query is provided, filter projects by title
        if ($query) {
            $projects = Project::where('Title', 'LIKE', "%{$query}%")
                ->with(['user', 'client'])  // Eager load user and client relations
                ->get();
        } else {
            // If no search query, return all projects
            $projects = Project::with(['user', 'client'])->get();
        }

        return view('admin.project.showProject', compact('projects'));
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

    public function getTask()
    {
        $tasks = Task::paginate(10);
        return view('admin.task.index', compact('tasks'));
    }
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
