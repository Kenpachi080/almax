<?php

namespace App\Http\Controllers;


use App\Models\Api;
use App\Models\Consalt;
use App\Models\ConsaltCard;
use App\Models\Log;
use App\Models\Main;
use App\Models\Transport;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function main()
    {
        $main = Main::first();
        $log = Log::first();
        $transport = Transport::first();
        $consalt = Consalt::first();
        $card = ConsaltCard::all();
        $leftCard = ConsaltCard::where('side', '=', '1')->get();
        $rightCard = ConsaltCard::where('side', '=', '2')->get();
//        dd($leftCard);
        $data = [
            'consalt' => $consalt,
            'log' => $log,
            'main' => $main,
            'transport' => $transport,
            'leftCard' => $leftCard,
            'rightCard' => $rightCard,
        ];
        return view('index', $data);
    }
}
