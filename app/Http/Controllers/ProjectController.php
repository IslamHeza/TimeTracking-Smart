<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Acaronlex\LaravelCalendar\Facades\Calendar;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = [];
        $data = Project::all();
        if ($data->count()) {
            foreach ($data as $project) {
                $projects[] = Calendar::event(
                    $project->title,
                    false,
                    new \DateTime($project->start_date),
                    new \DateTime($project->end_date), 
                    $project->id,
                    // Add color and link on event
                    [
                        'color' => $project->color,
                        'url' => '/projects/' . $project->id,
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($projects);
        return view('calender', compact('calendar'));
    }

   

    //Display add project form
    public function showForm()
    {
        return view('addProject');
    }

    //list all projects
    public function list()
    {
        $projects = Project::all();
        return view('allprojects')->with('projects', $projects);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return Redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        $start = strtotime($project->start_date);
        $end = strtotime($project->end_date);

        $difference = [
            'hours' => date('H', abs($start - $end)),
            'minutes' => date('i', abs($start - $end)),
            'seconds' => date('s', abs($start - $end))
        ];

        return view('showproject', ['project' => $project, 'difference' => $difference]);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();

        return redirect()->route('projects.list');
    }
}
