<?php

namespace App\Http\Controllers;

use App\Core\App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserInterface $user;

    public function __construct(UserInterface $user)
    {
        $this->middleware(['auth', 'roles:"list user"']);
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->getBasicPaginate();
        return view('panel.user.index', compact('users'));
    }

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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->user->delete($user);
        return redirect()->route('users.index')->with('success', __('User deleted successfully'));
    }
}
