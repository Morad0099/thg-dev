<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function thessas_corner() : View
    {
        $interiorImages = [
            '01.jpg', '02.jpg', '03.jpg', '10.jpg','x.1.jpg', 'x.2.jpg', 'x.3.jpg'
        ];
        $exteriorImages = [
            'x.1.jpg', 'x.2.jpg', 'x.3.jpg'
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
            '08.jpg', '09.jpg', '11.jpg', '12.jpg','hil1.jpg', 'hil2.jpg', 'hil3.jpg'
        ];
        $exteriorImages = [
            'hil1.jpg', 'hil2.jpg', 'hil3.jpg'
        ];

        return view('modules.hillgrove.index', compact('interiorImages', 'exteriorImages'));
    }

    public function hill_rise_villas() : View
    {
        $interiorImages = [
            '13.jpg', '14.jpg', '15.jpg', '16.jpg','high.jpg', 'hil2.jpg', 'hil1.jpg'
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
}
