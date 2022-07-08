<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectsModel;
use App\Helpers\Paths;
use Illuminate\Support\Facades\Storage;
use Exception;


class ProjectsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function projects(){
        $projects = ProjectsModel::all();
        $data = [
            "page" => "project", 
            "projects" => $projects
        ];
        return view('App.Projects.project', $data);
    }


    public function saveProject(Request $request){
        try {
            if(!$request->title || !$request->file('product_image')){
                $message = "Add an image and project title";
                return response()->json(['message' => $message], 400);

            }
            if($request->hasFile('product_image')){
                $imagePath = storage_path('app/' . Paths::PROJECTS);
                $extension = $request->file('product_image')->getClientOriginalExtension();
                if (in_array(strtolower($extension), ["jpg", "png", "jpeg"])) {
                    $fileName = time() . '.' . $extension;
                    $request->file('product_image')->move($imagePath, $fileName);
                    $project = new ProjectsModel();
                    $project->title = $request->title;
                    $project->name = $request->title;
                    $project->description = $request->description; 
                    $project->product_image = $fileName; 
                    $project->save();
                    $message = "Project Added";
                    return response()->json(["project" => $project, "message" => $message], 200);

                } else {
                    $message = "Invalid file format!";
                    return response()->json(['message' => $message], 400);
                }
            }

        } catch (Exception $error) {
            Log::info("errorMessage". $error->getMessage());
        }
    }

    public function createProject(){
        $data = ["page" => "project"];
        return view('App.Projects.create-project', $data);
    }


    public function deleteProject(Request $request){
        try {
            $project = ProjectsModel::where('id', $request->id)->first();
            if (!$project) {
                $message = "Unknown Project!";
                return response()->json(['message' => $message], 404);
            }

            $imageUrl = Paths::PROJECTS . $project->project_image;
            if (Storage::has($imageUrl)) {
                Storage::delete($imageUrl);
            }
            $project->delete();
            return response()->json(["message" => "Project Deleted"], 200);

        } catch (Exception $error) {
            Log::info("errorMessage". $error->getMessage());
        }
    }
}
