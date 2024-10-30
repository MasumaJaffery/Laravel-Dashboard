<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Admin Authentication and Profile Methods
    
    public function showRegister()
    {
        return view('admin.register');
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6',
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.login')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        $adminInfo = Admin::where('email', $request->input('email'))->first();

        if (!$adminInfo || !Hash::check($request->input('password'), $adminInfo->password)) {
            return back()->withErrors(['login' => 'Invalid credentials']);
        }

        $request->session()->put('LoggedAdminInfo', $adminInfo->id);

        return redirect()->route('admin.dashboard');
    }

    public function showDashboard()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the dashboard');
        }

        return view('admin.dashboard', ['LoggedAdminInfo' => $LoggedAdminInfo]);
    }

    public function showProfile()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the profile page');
        }

        return view('admin.profile', ['LoggedAdminInfo' => $LoggedAdminInfo]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $admin = Admin::find(session('LoggedAdminInfo'));

        if (!$admin) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to update the profile');
        }

        $admin->name = $request->input('name');
        $admin->bio = $request->input('bio');

        if ($request->hasFile('picture')) {
            if ($admin->picture) {
                Storage::disk('public')->delete($admin->picture);
            }

            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_pictures', $filename, 'public');
            $admin->picture = $path;
        }

        $admin->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    public function logout()
    {
        session()->forget('LoggedAdminInfo');
        return redirect()->route('admin.login');
    }
    
    // User Management Methods
    
    public function showUserList()
    {
        $users = User::all();
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the user list');
        }

        return view('admin.user', ['LoggedAdminInfo' => $LoggedAdminInfo, 'users' => $users]);
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'role' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_pictures', $filename, 'public');
            $user->picture = $path;
        }

        $user->save();

        return redirect()->route('admin.user')->with('success', 'User created successfully.');
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_pictures', $filename, 'public');
            $user->picture = $path;
        }

        $user->save();

        return redirect()->route('admin.user')->with('success', 'User updated successfully.');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted successfully.');
    }
    
    // Guest Management Methods

    public function showGuestList()
    {
        $guests = Guest::all();
        return view('admin.guests', ['guests' => $guests]);
    }

    
    public function storeGuest(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:guests,email',
        'bio' => 'nullable|string',
        'phonenumber' => 'nullable|string|max:20',
    ]);

    $guest = new Guest([
        'name' => $request->name,
        'email' => $request->email,
        'bio' => $request->bio,
        'phonenumber' => $request->phonenumber,
    ]);

    $guest->save();

    return redirect()->route('admin.guests')->with('success', 'Guest created successfully');
}



    public function showGuestsList()
    {
        $guests = Guest::all();
        return view('admin.guests', ['guests' => $guests]);
    }

    
    public function updateGuest(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:guests,email,' . $id,
            'bio' => 'nullable|string',
            'phonenumber' => 'nullable|string|max:20',
        ]);

        $guest = Guest::findOrFail($id);
        $guest->update($request->all());

        return redirect()->route('admin.guests')->with('success', 'Guest updated successfully');
    }

    public function destroyGuest($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        return redirect()->route('admin.guests')->with('success', 'Guest deleted successfully');
    }
}
