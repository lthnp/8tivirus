<?php

namespace App\Http\Controllers;

use App\Imports\FreeResourceImport;
use App\Imports\PersonaImport;
use App\Imports\ProjectDetailImport;
use App\Imports\ProjectImport;
use App\Imports\ProjectTechImport;
use App\Imports\ScreenshotImport;
use App\Imports\StudentImport;
use App\Models\FreeResource;
use App\Models\Persona;
use App\Models\Project;
use App\Models\ProjectDetail;
use App\Models\ProjectTech;
use App\Models\Screenshot;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index(Request $request)
    {
        $lists = [];
        return view('cms.import', compact('lists'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'file' => 'required'
        ]);

        $type = $request->input('type');
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        if (!empty($file)) {
            if($type == 'project') {
                $listsImport = Excel::toArray(new ProjectImport, $file);
            }
            if($type == 'project detail'){
                $listsImport = Excel::toArray(new ProjectDetailImport, request()->file('file'));
            }
            if($type == 'project tech'){
                $listsImport = Excel::toArray(new ProjectTechImport, request()->file('file'));
            }
            if($type == 'persona'){
                $listsImport = Excel::toArray(new PersonaImport, request()->file('file'));
            }
            if($type == 'screenshot'){
                $listsImport = Excel::toArray(new ScreenshotImport, request()->file('file'));
            }
            if($type == 'student'){
                $listsImport = Excel::toArray(new StudentImport, request()->file('file'));
            }
            if($type == 'free resource'){
                $listsImport = Excel::toArray(new FreeResourceImport, request()->file('file'));
            }

            $lists = $listsImport[0];

            return view('cms.import', compact('lists', 'filename', 'type'));
        }

        return redirect()->route('import');
    }

    public function importSubmit(Request $request){
        $this->validate($request, [
            'lists' => 'required'
        ]);
        $type = $request->input('type');
        $lists = json_decode($request->lists, true);

        $model = '';
        $element = '';
        $success = [];
        $fail = [];

        if($type == 'project') {
            $model = new Project();
        }
        if($type == 'project detail'){
            $model = new ProjectDetail();
        }
        if($type == 'project tech'){
            $model = new ProjectTech();
        }
        if($type == 'persona'){
            $model = new Persona();
        }
        if($type == 'screenshot'){
            $model = new Screenshot();
        }
        if($type == 'student'){
            $model = new Student();
        }
        if($type == 'free resource') {
            $model = new FreeResource();
        }

        foreach ($lists as $list){
            if($type == 'free resource'){
                $student = Student::where('sid', $list['sid'])->first(['id']);
                if(!empty($student)){
                    $input = $list;
                    $input['student_id'] = $student->id;
                    $model::create($input);
                    array_push($success, $list);
                } else {
                    array_push($fail, $list);
                }
            } else {
                $element = Project::where('code', $list['code'])->first(['id']);
            }

            if (!empty($element)){
                $input = $list;
                if($type != 'project') {
                    $input['project_id'] = $element->id;
                    $model::create($input);
                    array_push($success, $list);
                } else {
                    array_push($fail, $list);
                }
            } else {
                if($type == 'project') {
                    $input = $list;
                    $model::create($input);
                    array_push($success, $list);
                } else {
                    if($type != 'free resource'){
                        array_push($fail, $list);
                    }
                }
            }
        }

        return redirect()->route('import')->with('success', $success)->with('fail', $fail);
    }
}
