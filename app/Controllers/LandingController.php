<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use stdClass;

class LandingController extends BaseController
{
    public function index()
    {
        return view('landingpage/landingpage');
    }

    public function program()
    {
        return view('landingpage/program');
    }

    // public function programDetail(){
    //     return view('landingpage/programDetail');
    // }

    // public function programDetail($programId = null)
    // {
    //     $data = [];
    //     $data['slug'] = $programId;
    //     switch ($programId) {
    //         case 'alternative-fuel':
    //             $data['title'] = 'Alternative Fuel';
    //             $data['content'] = 'Alternative fuels are those fuels or power sources which serve, 
    //             at least partly, as a substitute for fossil oil sources in the transport sector.';
    //             break;
    //         case 'vehicle-types':
    //             $data['title'] = 'Vehicle Types';
    //             $data['content'] = 'Content for Vehicle Types.';
    //             break;
    //         case 'recharging-system':
    //             $data['title'] = 'Recharging System';
    //             $data['content'] = 'Content for Recharging System.';
    //             break;
    //         default:
    //             $data['title'] = 'Program Detail';
    //             $data['content'] = 'Default content.';
    //             break;
    //     }

    //     return view('landingpage/programDetail', $data);
    // }

    public function programDetail($programId = null)
    {
        $objectsArray = [];

        switch ($programId) {
            case 'alternative-fuel':
                $object1 = new stdClass();
                $object1->title = '<h1>Alternative Fuel</h1>';
                $object1->desc = '<p>Alternative fuels are those fuels or power sources which serve, 
                at least partly, as a substitute for fossil oil sources in the transport sector.</p>';
                $object2 = new stdClass();
                $object2->title = '<h1>Definitions</h1>';
                $object2->desc = '';
                $object3 = new stdClass();
                $object3->title = '<h1>Definitions</h1>';
                $object3->desc = '<p>"Alternative fuels” means fuels or power sources that serve, at least partly, 
                as a substitute for fossil oil sources in the energy supply to transport and which have the potential 
                to contribute to its decarbonisation and enhance the environmental performance of the transport sector.</p>';
                $objectsArray[] = $object1;
                $objectsArray[] = $object2;
                $objectsArray[] = $object3;
                break;

                case 'vehicle-types':
                    $object1 = new stdClass();
                    $object1->title = '<h1>Vehicle Types</h1>';
                    $object1->desc = '<p>Content for Vehicle Types.</p>';
                    $object2 = new stdClass();
                    $object2->title = '<h1>Vehicle categories</h1>';
                    $object2->desc = '<table class="table">
                                        <thead>
                                            <tr class="table-primary">
                                                <th scope="col">Category</th>
                                                <th scope="col">Definition</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>L</td>
                                                <td>Motor vehicles with less than four wheels and some lightweight four-wheelers.</td>
                                            </tr>
                                        </tbody>
                                    </table>';
                    $objectsArray[] = $object1;
                    $objectsArray[] = $object2;
                    break;

                // case 'recharging-system':
                //     $object3 = new stdClass();
                //     $object3->title = 'Recharging System';
                //     $object3->desc = '<b>Content for Recharging System.</b>';
                //     $objectsArray[] = $object3;
                //     break;

            default:
                $defaultObject = new stdClass();
                $defaultObject->title = 'Program Detail';
                $defaultObject->desc = '<b>Default content.</b>';
                $objectsArray[] = $defaultObject;
                break;
        }
        $data['objectsArray'] = $objectsArray;
        $data['slug'] = $programId;

        return view('landingpage/programDetail', $data);
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

    public function summary($nat)
    {
        $data["nation"] = $nat;

        if ($nat === "indonesia") {
            $data["population"] = "275,773,800";
            $data["ttlland"] = "1,892,556";
            $data["totalHighway"] = "548,097";
            $data["GDP"] = "4,778";
            $data["PPP"] = "19,588,089,9";
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
