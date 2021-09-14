<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Cache;
class DoctorController extends Controller
{
    public function index()
    {
        $process_start = microtime(true);
        $doctors = Doctor::all();
        $process_end = microtime(true);
        $execution_time = $process_end - $process_start;

        return view('index')->with([
            'doctors' => $doctors,
            'execution_time' => $execution_time
        ]);
    }

    public function with_cache()
    {
        //
    }
}
