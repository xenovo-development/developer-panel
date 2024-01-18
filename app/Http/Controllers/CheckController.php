<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckRequest;
use App\Models\Check;
use DateTime;
use Illuminate\Http\Request;

class CheckController extends Controller
{

    public function index($date = null)
    {
        return Check::where('date',$date)->first();
    }
    public function store(CheckRequest $request)
    {
        $paths = [];
        $check = new Check($request->input());
        $check->attendant = Auth()->user()['name'];

        if (!$request->has('date')) {
            $check->date = new DateTime();
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if ($file->isValid()) {
                    $filename = $file->getClientOriginalName();
                    $path = $file->storePubliclyAs('/assets/images/check', $filename, 'public');
                    $paths[] = $path;
                }
            }
        }
        $check->file = json_encode($paths);

        $check->save();

        return redirect(route('second', ['task', 'check']))->with('success', 'Submitted successfully!');
    }
}
