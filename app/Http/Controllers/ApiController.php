<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    /**
     * Returns group of flights
     *
     * @param  Request $request
     * @return JsonResponse
     * @csrf
     */
    public function getFlights(Request $request)
    {
        $postbody = '';

        if (count($request->json()->all())) {
            $postbody = $request->json()->all();
        }

        return new JsonResponse($postbody);

    }

}
