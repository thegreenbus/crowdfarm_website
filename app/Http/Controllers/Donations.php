<?php
namespace App\Http\Controllers;
use App\Models\PayUnit;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;
use Redirect;

class Donations extends Controller
{
    //
    public function donate(Request $request)
    {
        try{
            $amount = $request->input('amount');
            $myPayment = new PayUnit(
                "de5730bdffed6b520660e746598b82c7085a721a",
                "9aa2d4c3-b83b-44d7-968e-59b79665ee05",
                "payunit_sand_50Pf7uAtz",
                "http://127.0.0.1:8000/pay-status",
                "notifyUrl",
                "mode",
                "description",
                "purchaseRef",
                "XAF",
                "name"
            );

            return view('/pay-status');

            $myPayment->makePayment($amount);




//            dd($myPayment);


        } catch (ClientException $e) {
            echo Psr7\Message::toString($e->getRequest());
            echo Psr7\Message::toString($e->getResponse());
        } catch (Exception $exception) {
            return Redirect::back()->withErrors(['msg' => 'Error processing  Quotation . Please try Again']);
        }



    }
}

