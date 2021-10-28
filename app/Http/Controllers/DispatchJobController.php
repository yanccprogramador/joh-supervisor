<?php

namespace App\Http\Controllers;

use App\Jobs\WriteLogJob;
use Illuminate\Http\Request;

class DispatchJobController extends Controller
{
    //
    public function dispatchJob(Request $request)
    {
        WriteLogJob::dispatch($request->all());
        //WriteLogJob::dispatch($request->all())->onQueue('priority');
        return response('Dados enviados',200);
    }
}
