<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Spatie\PdfToText\Pdf;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getSettings()
    {
        $settings = Setting::first();
        return view('admin.setting', compact('settings'));
    }

public function pdfconverter(Request $request)
    {
    $path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
    $text = Pdf::getText('book.pdf', $path);
    dd($text);
    }
    public function updateSettings(Request $request)
    {
        $settings = Setting::find(1);
        $this->validate($request, [
            'company_name' => 'required',
            'company_location' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $settings->company_name = $request->company_name;
        $settings->company_location = $request->company_location;
        $settings->email = $request->email;
        $settings->phone_number = $request->phone_number;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->twitter = $request->twitter;
        $settings->linkedin = $request->linkedin;
        $settings->youtube = $request->youtube;
        $settings->cv = $request->cv;

        $settings->save();
        return redirect(route('adminSettings'))->with('message', 'Settings updated successfully');
    }
}
