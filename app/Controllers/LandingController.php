<?php

namespace App\Controllers;

use stdClass;
use App\Models\ContentModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LandingController extends BaseController
{
    public function index()
    {
        return view('landingpage/landingpage');
    }

    public function program($prog)
    {
        $contentModel = new ContentModel();
        switch ($prog) {
            case 'asean-chairmanship':
                $result = $contentModel->AseanChairmanship()->content;
                break;
            case 'asean-east-asia-ntm-database':
                $result = $contentModel->AseanNTM()->content;
                break;
            case 'asia-ccus-network':
                $result = $contentModel->AsiaCCUS()->content;
                break;
        }

        $data['content'] = $result;
        $data['slug'] = $prog;
        return view('landingpage/program', $data);
    }

    public function programDetail()
    {
        return view('landingpage/programDetail');
    }

    public function updateDetail($updateId = null)
    {

        $contentModel = new ContentModel();

        switch ($updateId) {
            case 'alternative-fuel':
                $result = $contentModel->alternativeFuel()->content;
                break;

            case 'vehicle-types':
                $result = $contentModel->vehicleTypes()->content;

                break;

            case 'recharging-system':
                $result = $contentModel->rechargingSystem()->content;

                break;

            default:
                $defaultObject = new stdClass();
                $defaultObject->content = 'Program Detail';
                $defaultObject->content = '<b>Default content.</b>';
                $result = $defaultObject->content;
                break;
        }
        $data['content'] = $result;
        $data['slug'] = $updateId;

        return view('landingpage/updateDetail', $data);
    }

    public function publications()
    {
        return view('landingpage/publications');
    }

    public function publicationDetail($id)
    {
        // $data;
        $data["id"] = $id;
        return view('landingpage/publicationDetail', $data);
    }

    public function news()
    {
        return view('landingpage/news');
    }

    public function newsDetail()
    {
        return view('landingpage/newsDetail');
    }

    public function updates()
    {
        return view('landingpage/news');
    }

    public function events()
    {
        return view('landingpage/events');
    }

    public function eventsDetail()
    {
        return view('landingpage/eventDetail');
    }

    public function summary($nat)
    {
        $data["nation"] = $nat;

        
        $sales; 
        $stock; 

        if ($nat === "indonesia") {
                
            $sales["ICE"] = 1032603;
            $sales["HEV"] = 5100;
            $sales["BEV"] = 10327;
            $sales["PHEV"] = 10;

            $stock["ICE"] = 12230679;
            $stock["HEV"] = 9012;
            $stock["BEV"] = 11130;
            $stock["PHEV"] = 71;

            $data["population"] = "275,773,800";
            $data["ttlland"] = "1,892,556";
            $data["totalHighway"] = "548,097";
            $data["GDP"] = "4,778";
            $data["PPP"] = "1,214.92";
            $data["GDPppp"] = "12,410";

            $data["volIce"] = "1032603";
            $data["volHev"] = "5100";
            $data["volBev"] = "10327";
            $data["volPhev"] = "10";
            $data["volNewCarSum"] = "1048040";
            $data["volStockUIO"] = "12250892";
        }else if ($nat == "thailand"){
                
            $sales["ICE"] = 806194;
            $sales["HEV"] = 63568;
            $sales["BEV"] = 9901;
            $sales["PHEV"] = 11331;

            $stock["ICE"] = 11162809;
            $stock["HEV"] = 255390;
            $stock["BEV"] = 14286;
            $stock["PHEV"] = 19482;

            $data["population"] = "66,050,000";
            $data["ttlland"] = "513,120";
            $data["totalHighway"] = "703,633";
            $data["GDP"] = "7,171.81";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "21,112.640";

            $data["volIce"] = "1032603";
            $data["volHev"] = "5100";
            $data["volBev"] = "10327";
            $data["volPhev"] = "10";
            $data["volNewCarSum"] = "1048040";
            $data["volStockUIO"] = "12250892";
        } else if ($nat == "malaysia"){
                
            $sales["ICE"] = 806194;
            $sales["HEV"] = 63568;
            $sales["BEV"] = 9901;
            $sales["PHEV"] = 11331;

            $stock["ICE"] = 12230679;
            $stock["HEV"] = 9012;
            $stock["BEV"] = 11130;
            $stock["PHEV"] = 71;

            $data["population"] = "N/a";
            $data["ttlland"] = "328550";
            $data["totalHighway"] = "N/a";
            $data["GDP"] = "N/a";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "N/a";

            $data["volIce"] = "N/a";
            $data["volHev"] = "N/a";
            $data["volBev"] = "N/a";
            $data["volPhev"] = "N/a";
            $data["volNewCarSum"] = "N/a";
            $data["volStockUIO"] = "N/a";
        } 
        else {
                
            $sales["ICE"] = "N/a";
            $sales["HEV"] = "N/a";
            $sales["BEV"] = "N/a";
            $sales["PHEV"] = "N/a";

            $stock["ICE"] = "N/a";
            $stock["HEV"] = "N/a";
            $stock["BEV"] = "N/a";
            $stock["PHEV"] = "N/a";

            $data["population"] = "N/a";
            $data["ttlland"] = "N/a";
            $data["totalHighway"] = "N/a";
            $data["GDP"] = "N/a";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "N/a";

            $data["volIce"] = "N/a";
            $data["volHev"] = "N/a";
            $data["volBev"] = "N/a";
            $data["volPhev"] = "N/a";
            $data["volNewCarSum"] = "N/a";
            $data["volStockUIO"] = "N/a";
        }

        
        $data["sales"] = $sales;
        $data["stock"] = $stock;

        return view('/landingpage/summary', $data);
    }

    public function about()
    {
        return view('landingpage/about');
    }
}
