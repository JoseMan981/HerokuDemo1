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



        // echo "<pre> " .$lastTwoWeek . "<br />";
        //     print_r($securityPolicies);
        //     print_r($sPLast2Weeks);

        
// (Knowledge Article: Status EQUALS Draft) AND (Knowledge Article: Record Type EQUALS Draft) AND (
//     (Knowledge Article: Approval Status EQUALS New) OR (Knowledge Article: Approval StatusEQUALSRejected) OR (Knowledge Article: Approval StatusEQUALSnull)) AND (Knowledge Article: Total CategoriesGREATER THAN0) AND (Knowledge Article: Short contentNOT EQUAL TOnull) AND (Knowledge Article: Url Public ImageNOT EQUAL TOnull) AND (Knowledge Article: SubcategoryNOT EQUAL TOnull) AND (Knowledge Article: ApproverNOT EQUAL TOnull)


        // echo "</pre>";


        // echo "<pre>";
        //     print_r($securityPolicies);
        // echo "</pre>";

        return view('welcome', [

                'categoriesAllowed'  => $this->categoriesAllowed,
            ] 
        );
    }

}
