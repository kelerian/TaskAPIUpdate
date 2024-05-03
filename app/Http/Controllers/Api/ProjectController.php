<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Функция контроллера возвращающая список всех проектов.
     */
    public function index()
    {
        $projects = Projects::paginate(1);
        return response()->json($projects,201);
    }
    /**
     * Функция контроллера создающая новый проект.
     */
    public function store(ProjectStoreRequest $request)
    {
        $project = Projects::create($request->validated());
        return response()->json($project, 201);
    }
}
