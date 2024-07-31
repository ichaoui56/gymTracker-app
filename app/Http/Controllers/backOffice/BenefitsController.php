<?php

namespace App\Http\Controllers\backOffice;

use App\Http\Controllers\Controller;
use App\Models\Benefits;
use Illuminate\Http\Request;

class BenefitsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Benefits::create([
            'name' => $request->input('name')
        ]);

        return redirect()->route('show.benefits')->with('success', 'Benefit created successfully.');
    }

    public function deleteBenefit($id)
    {
        $benefit = Benefits::findorFail($id);

        $benefit->delete();

        return redirect()->route('show.benefits')->with('success', 'Benefit deleted successfully.');
    }

    public function updateBenefit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $benefit = Benefits::findOrFail($id);

        $benefit->name = $request->input('name');
        $benefit->save();

        return redirect()->route('show.benefits')->with('success', 'Benefit updated successfully.');
    }

}
