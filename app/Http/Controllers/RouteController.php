<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function thessas_corner() : View
    {
        $interiorImages = [
            '28.jpg', '29.jpg', '30.jpg', '31.jpg','32.jpg', '33.jpg', '34.jpg', '35.jpg','aerial x1.jpg', 'aerial x1 and x2.jpg', 'aerial x3.jpg', 'aerial x4.jpg', 'hil1.jpg', 'hil2.jpg', 'hil3.jpg'
        ];
        $exteriorImages = [
            'aerial x1.jpg', 'aerial x1 and x2.jpg', 'aerial x3.jpg', 'aerial x4.jpg', 'hil1.jpg'
        ];
    
        return view('modules.thessas_corner.index', compact('interiorImages', 'exteriorImages'));
    }

    public function lucas_court() : View
    {
        $interiorImages = [
            '04.jpg', '05.jpg', '06.jpg', '07.jpg','w1.jpg', 'w2..jpg', 'w3.jpg'
        ];
        $exteriorImages = [
            'w1.jpg', 'w2..jpg', 'w3.jpg'
        ];

        return view('modules.lucas_court.index', compact('interiorImages', 'exteriorImages'));
    }

    public function hillgrove() : View
    {
        $interiorImages = [
            '13.jpg', '14.jpg', '15.jpg', '16.jpg', '17.jpg', '18.jpg', 'AERIAL HL.jpg', 'AR1.jpg', 'AR2.jpg', 'AR3.jpg', 'fl...jpg', 'flx..jpg', 'gf. fl.jpg', 'NG1.jpg','NG2.jpg','NG3.jpg'
        ];
        $exteriorImages = [
            'hil1.jpg', 'hil2.jpg', 'hil3.jpg'
        ];

        return view('modules.hillgrove.index', compact('interiorImages', 'exteriorImages'));
    }

    public function hill_rise_villas() : View
    {
        $interiorImages = [
            '01.jpg', '02.jpg', '03.jpg', '07.jpg','T1.jpg', 'T2.jpg', 'T3.jpg', 'TP1.jpg', 'TP2.jpg', 'TP3.jpg', 'w1.jpg', 'w2.jpg', 'w3.jpg', 'w4.jpg', 'x.1.jpg', 'x.2.jpg','x.3.jpg'
        ];
        $exteriorImages = [
            'high.jpg', 'hil2.jpg', 'hil1.jpg'
        ];

        return view('modules.hill_rise_villas.index', compact('interiorImages', 'exteriorImages'));
    }

    public function queens_park() : View
    {
        $interiorImages = [
            '17.jpg', '18.jpg', '19.jpg', '20.jpg','x.1.jpg', 'x.2.jpg', 'x.3.jpg'
        ];
        $exteriorImages = [
            'x.1.jpg', 'x.2.jpg', 'x.3.jpg'
        ];

        return view('modules.queens_park.index', compact('interiorImages', 'exteriorImages'));
    }

    public function about_us() : View
    {
        return view('modules.about_us.index');
    }

    public function mission() : View
    {
        return view('modules.mission.index');
    }

    public function vision() : View
    {
        return view('modules.vision.index');
    }

    public function team() : View
    {
        return view('modules.team.index');
    }
}
