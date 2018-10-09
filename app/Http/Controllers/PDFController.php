<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $Orders = Order::all();
        $pdf = PDF::loadview('pdf',['Orders' =>$Orders]);
        return @$pdf->stream();
    }
}
