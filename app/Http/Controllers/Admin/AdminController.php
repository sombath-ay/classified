<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listing;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class AdminController extends Controller
{
    public function index() {
        $users = User::all();
        $listings = Listing::all();
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $child_categories = ChildCategory::all();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('admin.index',compact('users', 'listings', 'categories', 'sub_categories', 'child_categories', 'countries', 'states', 'cities'));
    }
}
