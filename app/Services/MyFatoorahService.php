<?php

namespace App\Services;

use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class MyFatoorahService
{

    public $budget = 0;

    public function pay(Request $request, Package $package, User $user)
    {
        $this->budget = $package->price;

        //Test
        // dd($id);
        //   $apiURL = 'https://apitest.myfatoorah.com/v2/';


        //Live
        //$apiKey = 'JmUyaGp_mJuDvZ5gQzbPraEjjMZUptn7NcQZMQYsUifoF7AH1oLrll1s860zO_h5HulTJxh91hiAE5HMqOZzquAKNjAwK4MAOZPOeVfwwk77G_bKLPgx_BTliMvwdHZaL-H1cE1n74IV4ZmeUn4dcY-kaw-WaOXiXPXkNpJe0cF1f9Kmz5s9SazwonfUgqnCJmGzjhQS1o8RgcACAWy_P62PIvdNPojk7evi4vK_StzfFm0b4HGeoYHWMxMnvApsLQmX6sQ1xKz_WrB1jg9CCK9fegI-0-UvZDUTICQjpsnOigPflJkp_pGlicJnrWBXFNruxBiFBNCe4ey8v7NxUrTVqUIqA2stRJ8Lp3Dq92HknCbZMPK4EVkP3JRBGqBHEVkEh9ivp58bZbBxo3c9ZQylVHkTNoKiKH4xnbtXiYlMOC-BJlM1GKQ7rauX4Jq20RHiMO8c4ZFJyh8jjlJUwQZjl0Mp_FOJtB9ItytHxtksQJbZ_s8LxTy910Z5cewVfuHqAu4gJa0cPfZtvEIKes0mvuUlnVxQrNuGOTtENDJoao2ziQilrSXs7p2KZoF5Yh7y7RFCwyPQ-yBdluzwypE-TMA_qODUsjtqNurSSZo2QsHJ9JVfa3xPkgO_fo1iPEdfFxjG485Fdti6K2aPYoJb9OkEtcwMuyg3YSHXXP73yRtyDzym7XLB51KRw9BpH8lXnw'; //Test token value to be placed here: https://myfatoorah.readme.io/docs/test-token
        //$apiURL = 'https://api-sa.myfatoorah.com/v2/SendPayment/';
        //Test
        $apiKey = 'rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL'; //Test token value to be placed here: https://myfatoorah.readme.io/docs/test-token
        $apiURL = 'https://apitest.myfatoorah.com';
        //$apiKey = ''; //Live token value to be placed here: https://myfatoorah.readme.io/docs/live-token


        /* ------------------------ Call SendPayment Endpoint ----------------------- */
        //Fill customer address array
        $customerAddress = array(
            'Block' => 'Riyadh #', //optional
            //   'Street'              => 'Str', //optional
            //   'HouseBuildingNo'     => 'Bldng #', //optional
            //   'Address'             => 'Addr', //optional
            //   'AddressInstructions' => 'More Address Instructions', //optional
        );
        //   dd($ad);
        //Fill invoice item array
        $invoiceItems[] = [
            'ItemName' => $package->period, //ISBAN, or SKU
            'Quantity' => '1', //Item's quantity
            'UnitPrice' => $this->budget, //Price per item
        ];

        //Fill POST fields array
//        $postFields = [
//            //Fill required data
//            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
//            'paymentMethodId' => 2,
//            'InvoiceValue' => $this->budget,
//            'CustomerName' => $user->name,
//            //Fill optional data
//            "CurrencyIso" => "SAR",
//            'DisplayCurrencyIso' => 'SAR',
//            'MobileCountryCode' => '+966',
//            'CustomerMobile' => "525252252",
//            'CustomerEmail' => $user->email ?? "",
//            'CallBackUrl' => url('/') . '/package/success/' . $package->id . '/' . '?status=success',
//            'ErrorUrl' => url('/') . '/package/fail/' . $package->id . '/' . '?status=fail', //or 'https://example.com/error.php'
//            'Language' => 'ar', //or 'ar'
//            'CustomerReference' => date('YmdHis'),
//            'CustomerCivilId' => 1,
//            'UserDefinedField' => 1,
//            'ExpiryDate' => '', //The Invoice expires after 3 days by default. Use 'Y-m-d\TH:i:s' format in the 'Asia/Kuwait' time zone.
//            'SourceInfo' => 'Pure PHP', //For example: (Symfony, CodeIgniter, Zend Framework, Yii, CakePHP, etc)
//            'CustomerAddress' => $customerAddress,
//            'InvoiceItems' => $invoiceItems,
//        ];
        $postFields = [
            //Fill required data
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue' => $package->price,
            'CustomerName' => $user->name,
            //Fill optional data
            'DisplayCurrencyIso' => 'USD',
            //'MobileCountryCode'  => '+965',
            //'CustomerMobile'     => '1234567890',
            //'CustomerEmail'      => 'email@example.com',
            'CallBackUrl' => url('/') . "/package/$package->id/success",
//            'ErrorUrl' => url('/') . "/package/$package->id/fail", //or 'https://example.com/error.php'
            'Language' => 'ar', //or 'ar'
            //'CustomerReference'  => 'orderId',
            //'CustomerCivilId'    => 'CivilId',
            //'UserDefinedField'   => 'This could be string, number, or array',
            //'ExpiryDate'         => '', //The Invoice expires after 3 days by default. Use 'Y-m-d\TH:i:s' format in the 'Asia/Kuwait' time zone.
            //'SourceInfo'         => 'Pure PHP', //For example: (Symfony, CodeIgniter, Zend Framework, Yii, CakePHP, etc)
            //'CustomerAddress'    => $customerAddress,
            //'InvoiceItems'       => $invoiceItems,
        ];

        //Call endpoint
        $data = $this->sendPayment($apiURL, $apiKey, $postFields);

//You can save payment data in database as per your needs
        $invoiceId = $data->InvoiceId;
        $paymentLink = $data->InvoiceURL;

//Redirect your customer to the invoice page to complete the payment process
//Display the payment link to your customer

        return redirect($paymentLink);
//        echo "Click on <a href='$paymentLink' target='_blank'>$paymentLink</a> to pay with invoiceID $invoiceId.";
        die;

    }

    /* ------------------------ Functions --------------------------------------- */
    /*
     * Send Payment Endpoint Function
     */

    function sendPayment($apiURL, $apiKey, $postFields)
    {

        $json = $this->callAPI("$apiURL/v2/SendPayment", $apiKey, $postFields);
        return $json->Data;
    }

    //------------------------------------------------------------------------------
    /*
     * Call API Endpoint Function
     */

    function callAPI($endpointURL, $apiKey, $postFields = [], $requestType = 'POST')
    {

        $curl = curl_init($endpointURL);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($curl, array(
            CURLOPT_CUSTOMREQUEST => $requestType,
            CURLOPT_POSTFIELDS => json_encode($postFields),
            CURLOPT_HTTPHEADER => array("Authorization: Bearer $apiKey", 'Content-Type: application/json'),
            CURLOPT_RETURNTRANSFER => true,
        ));

        $response = curl_exec($curl);
        $curlErr = curl_error($curl);

        curl_close($curl);

        if ($curlErr) {
            //Curl is not working in your server
            die("Curl Error: $curlErr");
        }

        $error = $this->handleError($response);
        if ($error) {
            die("Error: $error");
        }

        return json_decode($response);
    }
    //------------------------------------------------------------------------------
    /*
     * Handle Endpoint Errors Function
     */

    function handleError($response)
    {

        $json = json_decode($response);
        if (isset($json->IsSuccess) && $json->IsSuccess == true) {
            return null;
        }

        //Check for the errors
        if (isset($json->ValidationErrors) || isset($json->FieldsErrors)) {
            $errorsObj = isset($json->ValidationErrors) ? $json->ValidationErrors : $json->FieldsErrors;
            $blogDatas = array_column($errorsObj, 'Error', 'Name');

            $error = implode(', ', array_map(function ($k, $v) {
                return "$k: $v";
            }, array_keys($blogDatas), array_values($blogDatas)));
        } else if (isset($json->Data->ErrorMessage)) {
            $error = $json->Data->ErrorMessage;
        }

        if (empty($error)) {
            $error = (isset($json->Message)) ? $json->Message : (!empty($response) ? $response : 'API key or API URL is not correct');
        }

        return $error;
    }

    /* -------------------------------------------------------------------------- */
}
