<?php

namespace App\Http\Controllers\backOffice;

use Carbon\Carbon;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use App\Models\AbonnementFeature;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AbonnementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'plan' => 'required|integer',
            'feature' => 'required|array'
        ]);

        $abonnement = Abonnement::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'plan_id' => $request->input('plan'),
        ]);

        if ($abonnement) {
            $abonnementId = $abonnement->id;
            $selectedFeatures = $request->input('feature');
            foreach ($selectedFeatures as $featureId) {
                $abonnementFeature = new AbonnementFeature();
                $abonnementFeature->abonnement_id = $abonnementId;
                $abonnementFeature->feature_id = $featureId;
                $abonnementFeature->save();
            }

            return redirect('/')->with('success', 'Product created successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed to create product.');
        }
    }

    public function addUserAbonnement(Request $request)
    {
        $user = Auth::user();

        $abonnementId = $request->id;

        $user->update([
            'abonnement_id' => $abonnementId,
            'abonnement_date' => Carbon::now(),
        ]);

        return redirect('/')->with('success', 'Abonnement Reserved successfully.');
    }

    public function approveAbonnement($id)
    {
        $userAbonnement = User::findOrFail($id);

        $userAbonnement->accepted = 'approved';
        $userAbonnement->save();

        return redirect()->back()->with('success', 'Abonnement approved successfully.');
    }

    public function declineAbonnement($id)
    {
        $userAbonnement = User::findOrFail($id);

        $userAbonnement->abonnement_id = null;
        $userAbonnement->abonnement_date = null;

        $userAbonnement->accepted = null;

        $userAbonnement->save();

        return redirect()->back()->with('success', 'Abonnement declined successfully.');
    }
}
