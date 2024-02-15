<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salesman;
use Illuminate\Support\Facades\Hash;

class SalesmanController extends Controller
{

    public function index()
{
    // Retrieve all salesman and return a view to display them
    $salesmans = Salesman::orderBy('created_at', 'desc')->get();
    return view('admin.salesman', compact('salesmans'));
}

public function sample()
{
    
    return view('admin.sample');
}

public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:salesmen,email',
        'phone' => 'nullable|string',
        'username' => 'required|string|unique:salesmen,username',
        'password' => 'required|min:8',
]
);

    $salesman = new Salesman();
    $salesman->name = $request->name;
    $salesman->email = $request->email;
    $salesman->phone = $request->phone;
    $salesman->username = $request->username;
    $salesman->isSalesmans = true;
    $salesman->password = Hash::make($request->password);

    $salesman->save();

    return redirect()->route('salesmans.index')->with('success', 'Salesman created successfully');
}

public function update(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:salesmen,email,' . $id,
        'phone' => 'nullable|string',
        'username' => 'required|string|unique:salesmen,username,' . $id,
        'password' => 'nullable|min:8', // Optional password validation
    ]);

    $salesman = Salesman::find($id);
    $salesman->name = $request->name;
    $salesman->email = $request->email;
    $salesman->phone = $request->phone;
    $salesman->username = $request->username;

    // Update password only if provided
    if ($request->password) {
        $salesman->password = Hash::make($request->password);
    }

    $salesman->save();

    return redirect()->route('salesmans.index')->with('success', 'Salesman updated successfully!');
}

public function destroy(Salesman $salesman)
    {
        $salesman->delete();
        return redirect()->route('salesmans.index')->with('success', 'Salesman deleted successfully.');
    }


}
