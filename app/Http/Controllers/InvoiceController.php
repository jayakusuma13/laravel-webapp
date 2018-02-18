<?php

namespace App\Http\Controllers;
use App\Invoice;
use App\InvoiceItems;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = DB::table('invoices');
        $invoice_items = DB::table('invoices_items');

        $invoices = DB::table('invoices')
                    ->leftJoin('invoices_items','invoices_items.invoice_id','=','invoice.id')
                    ->select('invoices.*','invoices_items.items')
                    ->get();

        return view('invoices.index',['invoices'=>$invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new Invoice;
        $invoiceItems = new InvoiceItems;
        $invoice->customer = $request->customer;
        $invoice->note = $request->note;
        $invoice->created_date = $request->created_date;
        $invoice->due_date = $request->due_date;

        $invoiceItems->item = $request->item;
        $invoiceItems->invoice_id = $invoice->id;
        $invoiceItems->quantity = $request->quantity;
        $invoiceItems->price = $request->price;
        $invoiceItems->total_price = $request->price * $request->quantity;
        $post->save();

        //Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.show',['invoice'=>$invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.edit',['invoice'=>$invoice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        $invoice->customer = $request->customer;
        $invoice->note = $request->note;
        $invoice->created_date = $request->created_date;
        $invoice->due_date = $request->due_date;

        $invoiceItems->item = $request->item;
        $invoiceItems->invoice_id = $invoice->id;
        $invoiceItems->quantity = $request->quantity;
        $invoiceItems->price = $request->price;
        $invoiceItems->total_price = $request->price * $request->quantity;
        $post->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoiceItems = InvoiceItems::find($id);
        $invoice->delete();
        $invoiceItems->delete();

        return redirect()->back();
    }
}
