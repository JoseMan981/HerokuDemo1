<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use DoITCloudConsulting\Salesforce\Controllers\Salesforce;
use Carbon\Carbon;


class Welcome extends Controller
{


    public $languageSF;

    function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {


        
        $salesforce = new Salesforce();
        echo $salesforce;
        $articleSelected = $salesforce->query('SELECT Id, Name FROM Account Limit 1');





        App::setLocale($locale);



        echo "<articleSelected> " .$articleSelected . "<br />";
        print_r($salesforce);


        return view('welcome', [

            'article'           => $articleSelected['manageable'][0],
            'articleId'         => $articleSelected['manageable'][0]->id
            ] 
        );
    }

}
