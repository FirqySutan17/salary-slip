<?php

namespace App\Http\Controllers;

use App\Models\SalarySlip;
use Illuminate\Http\Request;
use \Mpdf\Mpdf as PDF; 
use Mail;
use Storage;

class SalarySlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salary_slip()
    {
        return view('slip');
    }

    public function salary_slip_generate()
    {
        // // Setup a filename 
        $documentFileName = "fun.pdf";
 
        // // Create the mPDF document
        // $document = new PDF( [
        //     'mode' => 'utf-8',
        //     'format' => 'A4',
        //     'margin_header' => '3',
        //     'margin_top' => '20',
        //     'margin_bottom' => '20',
        //     'margin_footer' => '2',
        // ]);     
 
        // // Set some header informations for output
        // $header = [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        // ];
        // $document->SetProtection(array(), '30November1999', 'admin123');
        // $document->WriteHTML(view('slip'));
        // Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
        
        // return Storage::disk('public')->download($documentFileName); 
        $data["email"] = "firqy.sutan@gmail.com";
        $data["title"] = "Payroll Email";
        $data["body"] = "This is Demo";
 
        $files = [
            storage_path('app/public/'.$documentFileName),
        ];
  
        Mail::send('email', $data, function($message)use($data, $files) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }
            
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalarySlip  $salarySlip
     * @return \Illuminate\Http\Response
     */
    public function show(SalarySlip $salarySlip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalarySlip  $salarySlip
     * @return \Illuminate\Http\Response
     */
    public function edit(SalarySlip $salarySlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalarySlip  $salarySlip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalarySlip $salarySlip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalarySlip  $salarySlip
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalarySlip $salarySlip)
    {
        //
    }
}
