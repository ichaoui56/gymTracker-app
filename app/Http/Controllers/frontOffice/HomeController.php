<?php

namespace App\Http\Controllers\frontOffice;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abonnement;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Quote;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showClasses()
    {
        $user = Auth::user();
        $classes = Classe::with('category')->get();
        return view('homePages.classes', compact('user', 'classes'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showClasseDetails($id, $category_id)
    {
        $user = Auth::user();
        $categories = Category::all();
        $class = Classe::with(['category', 'coach.city', 'benefits'])->findOrFail($id);
        // You may want to filter classes based on category here if needed
        return view('homePages.classDetail', compact('user', 'class', 'categories'));
    }


    /**
     * Display a listing of the resource.
     */
    public function showPricing()
    {
        $user = Auth::user();
        $abonnements = Abonnement::with(['plan', 'features'])->orderBy('price', 'desc')->get();
        return view('homePages.pricing', compact('user', 'abonnements'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showSchedule()
    {
        $user = Auth::user();
        return view('homePages.schedule', compact('user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function MyBlogs($id)
    {
        $user = Auth::user();
        $quotes = Quote::all();
        $blogs = Blog::where('coach_id', $id)
            ->with('coach')
            ->with('category')
            ->with('quote')
            ->orderBy('created_at', 'desc')
            ->get();
        $class = Classe::where('coach_id', $id)->with(['coach','category'])->first();
        $hasClasses = Classe::where('coach_id', $id)->exists();
        return view('homePages.myBlogs', compact('user','quotes', 'blogs', 'class', 'hasClasses'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBlogs($id)
    {
        $user = Auth::user();
        $blogs = Blog::where('coach_id', $id)
            ->with('coach')
            ->with('category')
            ->with('quote')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('homePages.blogs', compact('user', 'blogs'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBlogDetails($id)
    {
        $user = Auth::user();
        $blog = Blog::with(['coach', 'category', 'quote'])->findOrFail($id);
        return view('homePages.blogDetail', compact('user', 'blog'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showCoaches()
    {
        $user = Auth::user();
        $coaches = User::where('role_id', '2')->with(['classes.category'])->get();
        return view('homePages.coaches', compact('user', 'coaches'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showCoachDetail($id)
    {
        $user = Auth::user();
        $coaches = User::where('role_id', '2')->where('id', '!=', $id)->with(['classes.category'])->Limit(3)->get();
        $coach = User::with(['city','classes.category'])->findorFail($id);
        return view('homePages.coachDetail', compact('user','coach','coaches'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBim()
    {
        $user = Auth::user();

        return view('homePages.BIM', compact('user'));
    }

    public function calculateBmr(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $activity_level = $request->input('activity_level');
        $weight_goal = $request->input('weight_goal');

        if ($gender === 'male') {
            $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age); // For men
        } else {
            $bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age); // For women
        }

        switch ($activity_level) {
            case 'sedentary':
                $activity_multiplier = 1.2;
                break;
            case 'lightly_active':
                $activity_multiplier = 1.375;
                break;
            case 'moderately_active':
                $activity_multiplier = 1.55;
                break;
            case 'very_active':
                $activity_multiplier = 1.725;
                break;
            case 'extra_active':
                $activity_multiplier = 1.9;
                break;
            default:
                $activity_multiplier = 1.2; // Assuming sedentary by default
        }

        // Calculate total daily calorie needs
        $total_calories = $bmr * $activity_multiplier;

        // Adjust total daily calorie needs based on weight goal
        switch ($weight_goal) {
            case 'lose':
                // Reduce total calories by 500 kcal/day for weight loss
                $total_calories -= 500;
                break;
            case 'gain':
                // Increase total calories by 500 kcal/day for weight gain
                $total_calories += 500;
                break;
            case 'maintain':
                $total_calories += 0;
                break;
        }

        // Calculate protein, carbohydrate, and fat needs based on percentages
        $protein_percentage = 0.25;
        $carb_percentage = 0.50;
        $fat_percentage = 0.25;

        // Adjust protein, carbohydrate, and fat needs based on weight goal
        switch ($weight_goal) {
            case 'lose':
                // Adjust protein, carbohydrate, and fat needs for weight loss
                $protein_g = (($total_calories - 500) * $protein_percentage) / 4;
                $carb_g = (($total_calories - 500) * $carb_percentage) / 4;
                $fat_g = (($total_calories - 500) * $fat_percentage) / 9;
                break;
            case 'gain':
                // Adjust protein, carbohydrate, and fat needs for weight gain
                $protein_g = (($total_calories + 500) * $protein_percentage) / 4;
                $carb_g = (($total_calories + 500) * $carb_percentage) / 4;
                $fat_g = (($total_calories + 500) * $fat_percentage) / 9;
                break;
            default:
                // Adjust protein, carbohydrate, and fat needs for weight maintenance
                $protein_g = ($total_calories * $protein_percentage) / 4;
                $carb_g = ($total_calories * $carb_percentage) / 4;
                $fat_g = ($total_calories * $fat_percentage) / 9;
                break;
        }

        $user = Auth::user();


        // Pass the calculated values to the view
        return view('homePages.bmrResult', [
            'user' => $user,
            'total_calories' => round($total_calories, 2),
            'protein_g' => round($protein_g, 2),
            'carb_g' => round($carb_g, 2),
            'fat_g' => round($fat_g, 2)
        ]);
    }
}
