<?php

namespace App\Http\Controllers\Admin\Market;

use Illuminate\Http\Request;
use App\Models\Market\Payment;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:,shop_payment_index')->only('index');
        $this->middleware('role:,shop_payment_offline')->only('offline');
        $this->middleware('role:,shop_payment_online')->only('online');
        $this->middleware('role:,shop_payment_cash')->only('cash');
        $this->middleware('role:,shop_payment_canceled')->only('canceled');
        $this->middleware('role:,shop_payment_returned')->only('returned');
        $this->middleware('role:,shop_payment_show')->only('show');

    }

    public function index()
    {
        $payments = Payment::all();
        return view('admin.market.payment.index', compact('payments'));
    }
    public function offline()
    {
        $payments = Payment::where('paymentable_type', 'App\Models\Market\OfflinePayment')->get();
        return view('admin.market.payment.index', compact('payments'));
    }
    public function online()
    {
        $payments = Payment::where('paymentable_type', 'App\Models\Market\OnlinePayment')->get();
        return view('admin.market.payment.index', compact('payments'));
    }
    public function cash()
    {
        $payments = Payment::where('paymentable_type', 'App\Models\Market\CashPayment')->get();
        return view('admin.market.payment.index', compact('payments'));
    }
    public function canceled(Payment $payment)
    {
        $payment->status = 2;
        $payment->save();
        return redirect()->route('admin.market.payment.index')->with('swal-success', 'تغییر شما با موفقیت انجام شد');
    }

    public function returned(Payment $payment)
    {
        $payment->status = 3;
        $payment->save();
        return redirect()->route('admin.market.payment.index')->with('swal-success', 'تغییر شما با موفقیت انجام شد');
    }

    public function show(Payment $payment)
    {
        return view('admin.market.payment.show', compact('payment'));
    }
}
