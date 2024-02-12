<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimelineData;

class ChartController extends Controller
{
    public function showChart()
    {
        $timelineData = [
            'labels' => [20220101, 20220102, 20220103, 20220104, 20220105],
            'data' => [1800, 2200, 2500, 1800, 2100],
        ];

        return view('profile.show', compact('timelineData'));
    }

    public function getChartData($timeline)
    {
        $timelineData = [
            'labels' => [20220101, 20220102, 20220103, 20220104, 20220105],
            'data' => [1800, 2200, 2500, 1800, 2100],
        ];

        return response()->json($timelineData);
    }
}
