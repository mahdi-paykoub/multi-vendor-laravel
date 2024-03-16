<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GlobalOptions;
use Illuminate\Http\Request;

class GlobalOptionController extends Controller
{
    public function mainPageView()
    {
        return view('admin.option.all');
    }

    public function setLogo(Request $request)
    {
        $validData = $request->validate([
            'enLogo' => 'required',
            'faLogo' => 'required',
        ]);


        GlobalOptions::updateOrCreate(
            ['key' => 'en_logo'],
            ['value' => $validData['enLogo']]
        );

        GlobalOptions::updateOrCreate(
            ['key' => 'fa_logo'],
            ['value' => $validData['faLogo']]
        );

        return back();
    }

    public function setMainSlider(Request $request)
    {

        $validData = $request->validate([
            'slider' => 'required',
            'slider.*' => 'required',
            'slider.*.*' => 'required',
        ]);



        foreach ($validData['slider'] as $key => $slide) {
            GlobalOptions::create([
                'key' => 'main_sliders',
                'value' => json_encode($slide),
            ]);
        }

        return back();
    }

    public function setMainFirstBanner(Request $request)
    {
        $validData = $request->validate([
            'slider' => 'required',
            'slider.*' => 'required',
            'slider.*.*' => 'required',
        ]);

        foreach ($validData['slider'] as $key => $slide) {
            GlobalOptions::create([
                'key' => 'main_banners',
                'value' => json_encode($slide),
            ]);
        }
        
        return back();
    }
    public function set_top_bar_img(Request $request)
    {
        $validData = $request->validate([
            'img' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);

        GlobalOptions::updateOrCreate(
            ['key' => 'top_bar_img'],
            ['value' => json_encode($validData)]
        );
        return back();
    }
}
