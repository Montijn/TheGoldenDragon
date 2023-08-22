<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\Console\Output\Output;


class PdfController extends Controller
{
    public function download(){
        $dishes = MenuItem::all();

        $html = \View::make('pdf.index')->with('dishes', $dishes);
        $html = $html->render();

        return Pdf::loadHTML($html)->download('GoudenDraak_Menu.pdf');
    }
}
