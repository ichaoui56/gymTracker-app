<?php

namespace App\Http\Controllers\backOffice;

use App\Models\Classe;
use App\Models\BenefitClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClasseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'coach' => 'required|integer',
            'category' => 'required|integer',
            'classPicture' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'benefits' => 'required|array'
        ]);

        $categoryAlreadyUsed = Classe::where('category_id', $request->input('category'))->exists();

        if ($categoryAlreadyUsed) {
            return redirect()->back()->with('failed', 'Category is already associated with a class.');
        }

        $picturePath = null;
        if ($request->hasFile('classPicture')) {
            $file = $request->file('classPicture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = 'assets-dashboard/img/classPicture';
            $file->move(public_path($destinationPath), $filename);
            $picturePath = $destinationPath . '/' . $filename;
        }

        $classe = Classe::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'coach_id' => $request->input('coach'),
            'picture' => $picturePath,
            'category_id' => $request->input('category'),
        ]);

        if ($classe) {
            $classeId = $classe->id;
            $selectedBenefits = explode(',', $request->benefits[0]);

            foreach ($selectedBenefits as $benefitId) {
                $benefitClass = new BenefitClass();
                $benefitClass->classe_id = $classeId;
                $benefitClass->benefits_id = $benefitId;
                $benefitClass->save();
            }

            return redirect('/classeDash')->with('success', 'Class created successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed to create class.');
        }
    }

    public function updateClasse(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'coach' => 'required|integer',
            'benefits' => 'required|array'
        ]);

        $classe = Classe::findOrFail($id);
        $benfitsClasse = BenefitClass::get()->where('classe_id', $id);

        $classe->name = $request->input('name');
        $classe->description = $request->input('description');
        $classe->coach_id = $request->input('coach');

        $classe->save();
        
        foreach ($benfitsClasse as $benefit) {
            $benefit->delete();
        }

        $selectedBenefits = explode(',', $request->benefits[0]);
        foreach ($selectedBenefits as $benefitId) {
            $benefitClass = new BenefitClass();
            $benefitClass->classe_id = $id;
            $benefitClass->benefits_id = $benefitId;
            $benefitClass->save();
        }
        return redirect('/classeDash')->with('success', 'Class updated successfully.');
    }

    public function deleteClasse($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();

        return redirect('/classeDash')->with('success', 'Class deleted successfully.');
    }
}
