<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CompanySettings;
use Illuminate\Support\Facades\File;

class MyCompanyController extends Controller
{
    public function edit(){
        $settings = CompanySettings::all()->pluck('value', 'key');
        return view('mycompany', compact('settings'));
    }

    public function update(Request $request){
        $request->validate([
            'company_name' => 'required|string',
            'company_logo' => 'nullable|image|max:2048',
        ]);
        CompanySettings::setValue('name', $request->input('company_name'));

        if ($request->hasFile('company_logo')) {
            $image = $request->file('company_logo');
            $imageName = 'company_logo.' . $image->getClientOriginalExtension();
            $imagePath = public_path('assets/img/' . $imageName);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $path = $image->move(public_path('assets/img/'), $imageName);
            CompanySettings::setValue('logo', $imageName);
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
