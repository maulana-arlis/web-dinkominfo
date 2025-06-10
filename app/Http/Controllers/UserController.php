<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard')->with('status', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'Logout berhasil!');
    }

    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('users.index', compact('users'));
    }

    // edit profile
    public function editProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'position' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        // Jika password tidak diisi, gunakan password lama
        if (!$request->filled('password')) {
            $validated['password'] = $user->password;
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }

        User::where('id', $user->id)->update($validated);

        return redirect('/admin/profile')->with('status', 'Profil berhasil diperbarui!');
    }


    // Buat User (Hanya untuk super_admin)
    public function createUser(Request $request)
    {
        $this->authorizeSuperAdmin();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => ['required', Rule::in(['admin', 'super_admin'])]
        ], [
            'name.required' => 'Nama wajib diisi.',
            'position.required' => 'Jabatan wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'role.required' => 'Role wajib dipilih.',
            'role.in' => 'Role tidak valid.'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('status', 'User berhasil dibuat!');
    }

    public function editUser(User $user)
    {
        return view('users.edit', compact('user'));
    }


    // Edit User (Hanya super_admin yang bisa edit user lain)
    public function updateUser(Request $request, User $user)
    {
        $this->authorizeSuperAdmin();

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'position' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
            'password' => '',
            'role' => ['sometimes', Rule::in(['admin', 'super_admin'])]
        ]);

        // Jika password tidak diisi, gunakan password lama
        if (!$request->filled('password')) {
            $validated['password'] = $user->password;
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('status', 'User berhasil diperbarui!');
    }

    // Hapus User (Hanya super_admin yang bisa)
    public function deleteUser(User $user)
    {
        $this->authorizeSuperAdmin();

        if ($user->id === Auth::id()) {
            return redirect()->route('users.index')->with('error', 'Anda tidak bisa menghapus diri sendiri.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('status', 'User berhasil dihapus!');
    }

    // Fungsi untuk membatasi aksi hanya untuk super_admin
    private function authorizeSuperAdmin()
    {
        if (!Auth::user() || Auth::user()->role !== 'super_admin') {
            abort(403, 'Akses ditolak! Hanya super_admin yang diperbolehkan.');
        }
    }
}