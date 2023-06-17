<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import model Member

use App\Models\Member;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('pinjaman.member.index',[
            'members' => $members
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjaman.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required',
        ]);

        Member::create($validated);
        return redirect('/tampilan/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mendapatkan data berdasarkan ID 
        $member = Member::find($id);
        return view('pinjaman.member.show', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mendapatkan data berdasarkan ID
        $member = Member::find($id);
        return view('pinjaman.member.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);

        // validasi form input
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required',
        ]);

        // Update data 

        $member->name = $request->input('name');
        $member->email= $request->input('email');
        $member->gender= $request->input('gender');
        $member->status= $request->input('status');
        $member->address= $request->input('address');
        $member->save();

        return redirect('/tampilan/member')->with('success', 'Data Berhasil di Perbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // mencari data berdasarkan ID
        $member = Member::find($id);

        // hapus data berdasarkan ID 

        $member->delete();

        return redirect('/tampilan/member');
    }
}
