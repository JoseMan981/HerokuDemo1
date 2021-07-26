<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use DoITCloudConsulting\Salesforce\Controllers\Salesforce;
use Carbon\Carbon;


class Welcome extends Controller
{


    public $languageSF;



    public $gamArticles;
    public $categoriesAllowed;
    public $discoverMore;
    public $lastArticlesByGam;
    public $iataRecord;

    function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale = null)
    {



        $salesforce = new Salesforce();

        $this->categoriesAllowed = $salesforce->query('SELECT Id, Name FROM Account ');





        App::setLocale($locale);



        echo "<categoriesAllowed> " .$categoriesAllowed . "<br />";
        print_r($salesforce);


        return view('welcome', [

                'categoriesAllowed'  => $this->categoriesAllowed,
            ] 
        );
    }

}
