<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function statistic()
    {
        return view('artikel.statistic');
        $categories = [];

        foreach($statistic as $stat){
            $categories[] = $stat->name;
    }
        dd($categories);
}
}

