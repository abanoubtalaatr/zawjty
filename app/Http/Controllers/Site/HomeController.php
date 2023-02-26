<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        $query = User::query();
        $query->where('user_type', 'user');

        // if ($request->has('fromAge')) {
        //     $query->where('age', '>=', $request->fromAge);
        // }
//        dd($request->all());

        if ($request->has('gender') && !empty($request->gender)) {
            $query->where('gender', 'LIKE', "%{$request->gender}%");
        }

        if ($request->has('beard_id') && !empty($request->beard_id)) {
            $query->where('beard_id', $request->beard_id);
        }

        if ($request->has('country_id') && !empty($request->country_id)) {
            $query->where('country_id', $request->country_id);
        }

        if ($request->has('nationality_id') && !empty($request->nationality_id)) {
            $query->where('nationality_id', $request->nationality_id);
        }

        if ($request->has('smooking_id') && !empty($request->smooking_id)) {
            $query->where('smooking_id', $request->smooking_id);
        }

        if ($request->has('music_id') && !empty($request->music_id)) {
            $query->where('music_id', $request->music_id);
        }

        // if ($request->has('toLong')) {
        //     $query->where('long_id', '=<', $request->toLong);
        // }

        // if ($request->has('fromLong')) {
        //     $query->where('long_id', '>=', $request->fromLong);
        // }


        // if ($request->has('long_id')) {
        //     $query->where('long_id', $request->long_id);
        // }

        if ($request->has('weight_id') && !empty($request->weight_id)) {
            $query->where('weight_id', $request->weight_id);
        }

        if ($request->has('eduction_id') && !empty($request->eduction_id)) {
            $query->where('eduction_id', $request->eduction_id);
        }

        if ($request->has('hair_type_id') && !empty($request->hair_type_id)) {
            $query->where('hair_type_id', $request->hair_type_id);
        }

        if ($request->has('hair_color_id') && !empty($request->hair_color_id)) {
            $query->where('hair_color_id', $request->hair_color_id);
        }

        // if ($request->has('toAge')) {
        //     $query->where('age', '<', $request->toAge);
        // }

        if ($request->has('financial_status_id') && !empty($request->financial_status_id)) {
            $query->where('financial_status_id', $request->financial_status_id);
        }

        if ($request->has('marriage_type_id') && !empty($request->marriage_type_id)) {
            $query->where('marriage_type_id', $request->marriage_type_id);
        }
// dd($request->all());
        //    if ($request->has('color_eye_id')) {
        //        $query->where('color_eye_id', $request->color_eye_id);
        //    }

        if ($request->has('color_skin_id') && !empty($request->color_skin_id)) {
            $query->where('color_skin_id', $request->color_skin_id);
        }

        if ($request->has('marriage_type_id') && !empty($request->marriage_type_id)) {
            $query->where('marriage_type_id', $request->marriage_type_id);
        }

        if ($request->has('working_id') && !empty($request->working_id)) {
            $query->where('working_id', $request->working_id);
        }

        if ($request->has('marital_status_id') && !empty($request->marital_status_id)) {
            $query->where('marital_status_id', $request->marital_status_id);
        }

        if ($request->has('health_status_id') && !empty($request->health_status_id)) {
            $query->where('health_status_id', $request->health_status_id);
        }

        if ($request->has('religiosity_id') && !empty($request->religiosity_id)) {
            $query->where('religiosity_id', $request->religiosity_id);
        }

        if ($request->has('commitment_prayer_id') && !empty($request->commitment_prayer_id)) {
            $query->where('commitment_prayer_id', $request->commitment_prayer_id);
        }

        if ($request->has('want_married_id') && !empty($request->want_married_id)) {
            $query->where('want_married_id', $request->want_married_id);
        }

        if ($request->has('annual_income_id') && !empty($request->annual_income_id)) {
            $query->where('annual_income_id', $request->annual_income_id);
        }

        if ($request->has('number_of_children') && !empty($request->number_of_children)) {
            $query->where('number_of_children', '>=', $request->number_of_children);
        }

        if ($request->has('having_children_id') && !empty($request->having_children_id)) {
            $query->where('having_children_id', $request->having_children_id);
        }
        // dd($request->all());

        $users = $query->with(['country', 'age'])->get();


        return view('site.result_of_search', compact('users'));
    }

    public function getSearch()
    {
        return view('site.search');
    }

    public function detailsSearch(Request $request)
    {
        return view('site.details_search');
    }

    public function resultSearch(Request $request)
    {
        return view('site.result_of_search');
    }

    public function showMan()
    {
        $query = User::query();
        $query->where('user_type', 'user');
        $query->where('gender', 'ذكر');
        $users = $query->with(['country', 'age'])->get();
        return view('site.new_man', compact('users'));
    }

    public function showWoman()
    {
        $query = User::query();
        $query->where('user_type', 'user');
        $query->where('gender', 'انثي');
        $users = $query->with('country', 'age')->get();

        return view('site.new_woman', compact('users'));
    }

    public function showWomanWantMarriedMsyar()
    {
        $query = User::query();
        $query->where('user_type', 'user');
        $query->where('gender', 'انثي')->where('marriage_type_id', 2);
        $users = $query->with('country', 'age')->get();

        return view('site.msyar_woman', compact('users'));
    }


    public function showWomanWantMarriedMulti()
    {
        $query = User::query();
        $query->where('user_type', 'user');
        $query->where('gender', 'انثي')->where('marriage_type_id', 3);
        $users = $query->with('country', 'age')->get();

        return view('site.polygamy_woman', compact('users'));
    }

    public function showNormalMarried()
    {
        $query = User::query();
        $query->where('user_type', 'user');
        $query->where('marriage_type_id', 1);
        $users = $query->with('country', 'age')->get();

        return view('site.normal_married', compact('users'));
    }

    public function userDetails(User $user)
    {
        $similarUsers = User::where('user_type', 'user')->where('gender', $user->gender)->get();
        return view('site.user_details', compact('user', 'similarUsers'));
    }
}
