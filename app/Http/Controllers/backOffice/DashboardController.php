<?php

namespace App\Http\Controllers\backOffice;

use App\Models\Blog;
use App\Models\Plan;
use App\Models\User;
use App\Models\Classe;
use App\Models\Feature;
use App\Models\Benefits;
use App\Models\Category;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showStaticSection()
    {
        $data = [

            'counts' => [
                'usersCount' => User::where('role_id', '!=', 1)->count(),
                'abonnementsCount' => Abonnement::all()->count(),
                'blogsCount' => Blog::all()->count(),
                'classesCount' => Classe::all()->count(),
            ],
            'lastInsertionTime' => [
                'User' =>  User::latest()->first()?->created_at->diffForHumans() ?? 'No User Found',
                'Abonnement' =>  Abonnement::latest()->first()?->created_at->diffForHumans() ?? 'No Abonnement Found',
                'Blogs' =>  Blog::latest()->first()?->created_at->diffForHumans() ?? 'No Blogs Found ',
                'Classes' =>  Classe::latest()->first()?->created_at->diffForHumans() ?? 'No Classe Found',
            ],
        ];

        $users =  User::whereIn('role_id', [2, 3])->get();

        return view('dashboard', compact('data', 'users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showTableSection()
    {
        $users = User::whereIn('role_id', [2, 3])->get();

        return view('dashboard', compact('users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showProfilSection()
    {
        $users = User::whereIn('role_id', [2, 3])->get();
        $user = Auth::user();
        return view('dashboard', compact('users','user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showAbonnementSection()
    {
        $users = User::whereIn('role_id', [2, 3])->get();
        $plans = Plan::whereDoesntHave('abonnements')->get();
        $userAbonnements = User::whereNull('accepted')->whereNotNull('abonnement_id')->with(['city', 'abonnement.plan'])->get();
        $userWithAbonnement = User::where('accepted','approved')->with(['city', 'abonnement.plan'])->get();
        $features = Feature::all();
        $abonnements = Abonnement::with(['plan', 'features'])->get();
        return view('dashboard', compact('users', 'plans', 'features', 'abonnements', 'userAbonnements', 'userWithAbonnement'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showCategoryTable()
    {
        $users = User::whereIn('role_id', [2, 3])->get();

        $categories = Category::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->get();

        return view('dashboard', compact('categories', 'users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showUserTable()
    {
        $users = User::whereIn('role_id', [2, 3])->with(['city'])->get();

        return view('dashboard', compact('users'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBenefitTable()
    {
        $users = User::whereIn('role_id', [2, 3])->get();

        $benefits = Benefits::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->get();

        return view('dashboard', compact('benefits', 'users'));
    }




    /**
     * Display a listing of the resource.
     */
    public function showClasseSection()
    {
        $users = User::whereIn('role_id', [2, 3])->get();

        $coaches = User::where('role_id', 2)->get();
        $categories = Category::whereDoesntHave('classes')->get();

        if ($categories->isEmpty()) {
            $message = 'No categories found.';
        } else {
            $message = null;
        }

        $classes = Classe::with('category')->with('benefits')->get();
        $benefits = Benefits::all();
        return view('dashboard', compact(['coaches', 'users', 'categories', 'classes', 'benefits', 'message']));
    }
}
