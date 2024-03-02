<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimelineData extends Model
{
    use HasFactory;

    public static function getChartData($timeline)
    {
        $labels = [];
        $data = [];
        $currentDate = now();
        switch ($timeline) {
            case '1M':
                $interval = 'P1D'; // 1 day interval
                $period = new \DatePeriod($currentDate->sub(new \DateInterval('P30D')), new \DateInterval($interval), 30);
                break;
            case '6M':
                $interval = 'P1M'; // 1 month interval
                $period = new \DatePeriod($currentDate->sub(new \DateInterval('P6M')), new \DateInterval($interval), 6);
                break;
            case '1Y':
                $interval = 'P1M'; // 1 month interval
                $period = new \DatePeriod($currentDate->sub(new \DateInterval('P12M')), new \DateInterval($interval), 12);
                break;
            case '5Y':
                $interval = 'P1Y'; // 1 year interval
                $period = new \DatePeriod($currentDate->sub(new \DateInterval('P5Y')), new \DateInterval($interval), 5);
                break;
            default:
                $interval = 'P1D'; // 1 day interval
                $period = new \DatePeriod($currentDate->sub(new \DateInterval('P30D')), new \DateInterval($interval), 30);
                break;
        }
        foreach ($period as $date) {
            $labels[] = $date->format('Ymd');
            $data[] = rand(1000, 5000);
        }
        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }
}
