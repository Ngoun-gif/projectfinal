<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        
        return view('dashboard.user.index');
        
    }
    public function fetchUserRecord(Request $request){

        try {
            // Call the stored procedure
            $data = DB::select("CALL fetch_user_records()");
    
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error fetching users: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function createUserRecord(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'email' => 'string|max:191',
            'password' => 'required|string|min:8|max:191',
            'active' => 'required|in:1,0', // Active or inactive
            'level' => 'required|in:1,2,3', 
            'language' => 'required|in:kh,en', // English or Spanish
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()
            ->json(
                ['success' => false, 
                'errors' => $validator->errors()], 422);
        }

        try {
            // Insert data using Query Builder
           $user =DB::table('users')
                ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'level' => $request->level,
                'language' => $request->language,
                'active' => $request->active,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user, // Return the created record
            ], 201);

        } catch (\Exception $e) {
            // Handle errors and exceptions
            return response()->json([
                'success' => false,
                'message' => 'Error creating user: ' . $e->getMessage(),
            ], 500);
        }
    
    }
    public function updateUserRecord(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'email' => 'string|max:191',
            'password' => 'required|string|min:8|max:191',
            'active' => 'required|in:1,0', // Active or inactive
            'level' => 'required|in:1,2,3', 
            'language' => 'required|in:kh,en', // English or Spanish
        ]);
        try {

            $updated = DB::table('users')
                ->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'level' => $request->level,
                    'language' => $request->language,
                    'active' => $request->active,
                ]);

            // Check if any rows were updated
            if ($updated) {
                return response()->json([
                    'success' => true,
                    'message' => 'User updated successfully.',
                ]);
            }
        } catch (\Exception $e) {
            // Return error response
            return response()->json([
                'success' => false,
                'message' => 'Error updating course: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function deleteUserRecord($id){

        try{
            $user = DB::table('users')->where('id', $id)->first();
            if ($user) {
                // Delete the course
                DB::table('users')->
                    where('id', $id)->
                    delete();

                return response()->json(['message' => 'User deleted successfully'], 200);

            } else {

                return response()->json(['message' => 'User not found'], 404);
            }

            } catch (\Exception $e){

                return response()->json(['message' => 'Error deleting user: ' . $e->getMessage()], 500);
            }

    }
}