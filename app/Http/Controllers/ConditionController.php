<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Traits\Conditionable;

class ConditionController extends Controller
{
    use Conditionable;

    public function __invoke(Request $request)
    {
        // $this->when(false, fn() => dd('true'), fn() => dd('false'));

        // $this->unless(true, fn() => dd('true'), fn() => dd('false'));

//        $user = User::find($request->id);
//
//        if($user) {
//            return $user;
//        } else {
//            return 'User not found';
//        }

        // return $this->when(Provider::find($request->id), fn($obj, $value) => $value, fn() => 'Provider not found');

        return Provider::finding($request->id);
    }
}
