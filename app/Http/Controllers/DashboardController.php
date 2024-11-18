<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $logos = [
            'logo1', 'logo2', 'logo3', 'logo4', 'logo5',
            'logo6', 'logo7', 'logo8', 'logo9', 'logo10',
            'logo11', 'logo12', 'logo13', 'logo14', 'logo15',
            'logo16', 'logo17', 'logo18', 'logo19', 'logo20',
            'logo21', 'logo22', 'logo23', 'logo24', 'logo25'
        ];

        return view('dashboard', compact('logos'));
    }
}
