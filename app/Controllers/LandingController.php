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

    public function program()
    {
        $contentModel = new ContentModel();

        $result = $contentModel->AseanChairmanship()->content;

        $data['content'] = $result;
        return view('landingpage/program', $data);
    }

    public function programDetail(){
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

        if ($nat === "indonesia") {
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

        } else {
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
        return view('/landingpage/summary', $data);
    }
}
