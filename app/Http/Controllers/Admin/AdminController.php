<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use App\Models\ProductModel;
use App\Models\ProjectsModel;
use Illuminate\Support\Facades\Hash;
use Exception;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function dashboard(Request $request){

        try {
            if (Auth::user()->roles === 'super_admin' || Auth::user()->roles === 'support') {
                $users = User::all();
                $projects = ProjectsModel::all();
                $totalProjects = count($projects);
                $totalUsers = count($users);
                $teams = User::where('roles', 'team')->get();
                $supports = User::where('roles', 'supports')->get();
                $super_admin = User::where('roles', 'super_admin')->get();
                $currentUser = Auth::user();
                $data = [
                    'page' => 'admin',
                    'admin' => 'admin',
                    'totalProjects' => $totalProjects,
                    'totalUsers' => $totalUsers, 
                    'users' => $users,                   
                ];
                return view('App.Admin.new-admindashboard', $data);
                
            }else {
                return redirect()->back();
            }
        } catch (Exception $error) {
            Log::info('errorMessage:' . $error->getMessage());
        }
        

    }


    public function userManagement(Request $request){

        try {
            if (Auth::user()->roles === 'super_admin' || Auth::user()->roles === 'support') {
                $users = User::all();
                $data = [
                    'page' => 'usermanagement',
                    'users' => $users, 
                   
                                      
                ];
                return view('App.Admin.usermanagement', $data);
            }else {
                return redirect()->back();
            }
        } catch (Exception $error) {
            Log::info('errorMessage:' . $error->getMessage());
        }
        

    }




    public function updateUser(Request $request)
    {
        try 
          {
            $user = User::where('id', $request->id)->first();
            if(!$user){
                return response()->json(['message' => "User not found!"],404); 
            }
            $user->name = $request->name ? $request->name : $user->name;
            $user->mobile = $request->mobile ? $request->mobile : $user->mobile;
            $user->email = ($request->email) ? $request->email : $user->email;
            $user->roles = ($request->roles) ? $request->roles : $user->roles;
            $user->save();
            $message = "Member credentials updated!";
            return response()->json(["message" =>$message, "user" => $user], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\AdminController@updateUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }






    public function createUser(Request $request){
        try {
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
    
            }

            // $request->is_active = ($request->is_active == "true")? true : false;


            $user = new User;
            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->roles = $request->roles;
            $user->designation = $request->designation;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            // $user->is_active = $request->is_active;
            $user->uuid = (string) \Str::uuid();
            $user->save();
            $message = "User added successfully";
            return response()->json(['message' => $message],200);

        } catch (Exception $error) {
            Log::info('errorMessage:' . $error->getMessage());
        }
    }


    public function deleteUser(Request $request){
        try {
            $user = User::where('id', $request->id)->first(); 
            
            if(!$user){
                $message = "Unknown User!";
                return response()->json(['message' =>  $message],404); 
            }
            $user->delete();
            $message = "Delete successful!";
            return response()->json(["message" => $message, "user" => $user], 200);
           
        } catch (Exception $error) {
            Log::info("Admin\AdminController@deleteUser error message:" . $error->getMessage());
            $response = [
                'status' =>false,
                "message" => $error
            ];
            return $response;
        }
    }


    protected function validator(array $data) {
		return Validator::make($data, [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:6', 'confirmed'],
			'roles' => ['required', 'string'],
            'is_acitve' => ['required']
		]);
	}
}
