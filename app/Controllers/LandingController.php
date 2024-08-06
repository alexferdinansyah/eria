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

    public function programDetail($programId = null)
    {
        $objectsArray = [];

        switch ($programId) {
            case 'alternative-fuel':
                $object1 = new stdClass();
                $object1->title = '<h3>Alternative Fuel</h3>';
                $object1->desc = '<p>Alternative fuels are those fuels or power sources which serve, 
                at least partly, as a substitute for fossil oil sources in the transport sector.</p>';

                $object2 = new stdClass();
                $object2->title = '<h3>Definitions</h3>';
                $object2->desc = '<br>';

                $object3 = new stdClass();
                $object3->title = '<h3>Current Directive on the deployment of alternative fuels infrastructure</h3>';
                $object3->desc = '<p>“Alternative fuels” means fuels or power sources that serve, at least partly, 
                as a substitute for fossil oil sources in the energy supply to transport and which have the potential 
                to contribute to its decarbonisation and enhance the environmental performance of the transport sector.</p>';

                $object4 = new stdClass();
                $object4->title = '<h3>Scope</h3>';
                $object4->desc = '<br>';

                $object5 = new stdClass();
                $object5->title = '<h5>Current Directive on the deployment of alternative fuels infrastructure</h5>';
                $object5->desc = '<ul>
                        <li>Electricity</li>
                        <li>Hydrogen</li>
                        <li>Biofuels</li>
                        <li>Synthetic and paraffinic fuels</li>
                        <li>Natural gas, including biomethane, in gaseous form (compressed natural gas (CNG))</li>
                        <li>Liquefied Natural gas (liquefied natural gas (LNG))</li>
                        <li>Liquefied petroleum gas (LPG).</li>
                      </ul>';

                $object6 = new stdClass();
                $object6->title = '<h5>Proposed Regulation on the deployment of alternative fuels infrastructure</h5>';
                $object6->desc = '<p>In the proposed AFI regulation, alternative fuels are classified in three distinct categories (which will be described in the remainder of this section):</p>';

                $object7 = new stdClass();
                $object7->title = '';
                $object7->desc = '
                <table class="table">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">Categories</th>
                                <th scope="col">AF Types</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alternative fossil fuels for a transitional phase</td>
                                <td>natural gas, in gaseous form (compressed natural gas (CNG)) and liquefied form (liquefied natural gas (LNG)) liquefied petroleum gas (LPG) synthetic and paraffinic fuels produced from non-renewable energy</td>
                            </tr>
                            <tr>
                                <td>Alternative fuels for zero-emission vehicles</td>
                                <td>Electricity, Hydrogen, Ammonia</td>
                            </tr>
                            <tr>
                                <td>Alternative fossil fuels for a transitional phase</td>
                                <td>‘biomass fuels’, meaning gaseous and solid fuels produced from biomass ‘biofuels’ meaning liquid fuel for transport produced from biomass</td>
                            </tr>
                        </tbody>
                </table>
                ';

                $objectsArray[] = $object1;
                $objectsArray[] = $object2;
                $objectsArray[] = $object3;
                $objectsArray[] = $object4;
                $objectsArray[] = $object5;
                $objectsArray[] = $object6;
                $objectsArray[] = $object7;
                break;

            case 'vehicle-types':
                $object1 = new stdClass();
                $object1->title = '<h3>Vehicle Types</h3><br>';
                $object1->desc = '
                <div style="max-height: 400px; overflow-y: auto;">
                    <table class="table">
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
                            <tr>
                                <td>L1</td>
                                <td>A two-wheeled vehicle with an engine cylinder capacity in the case of a thermic engine not exceeding 50 cm3 and whatever the means of propulsion a maximum design speed not exceeding 50 km/h.</td>
                            </tr>
                            <tr>
                                <td>L2</td>
                                <td>MA three-wheeled vehicle of any wheel arrangement with an engine cylinder capacity in the case of a thermic engine not exceeding 50 cm3 and whatever the means of propulsion a maximum design speed not exceeding 50 km/h.</td>
                            </tr>
                            <tr>
                                <td>L3</td>
                                <td>A two-wheeled vehicle with an engine cylinder capacity in the case of a thermic engine exceeding 50 cm3 or whatever the means of propulsion a maximum design speed exceeding 50 km/h.</td>
                            </tr>
                            <tr>
                                <td>L4</td>
                                <td>A vehicle with three wheels asymmetrically arranged in relation to the longitudinal median plane with an engine cylinder capacity in the case of a thermic engine exceeding 50 cm3 or whatever the means of propulsion a maximum design speed exceeding 50 km/h (motor cycles with sidecars).</td>
                            </tr>
                            <tr>
                                <td>L5</td>
                                <td>A vehicle with three wheels symmetrically arranged in relation to the longitudinal median plane with an engine cylinder capacity in the case of a thermic engine exceeding 50 cm3 or whatever the means of propulsion a maximum design speed exceeding 50 km/h.</td>
                            </tr>
                            <tr>
                                <td>L6</td>
                                <td>A vehicle with four wheels whose unladen mass is not more than 350 kg, not including the mass of the batteries in case of electric vehicles, whose maximum design speed is not more than 45 km/h, and whose engine cylinder capacity does not exceed 50 cm3 for spark (positive) ignition engines, or whose maximum net power output does not exceed 4 kW in the case of other internal combustion engines, or whose maximum continuous rated power does not exceed 4 kW in the case of electric engines. </td>
                            </tr>
                            <tr>
                                <td>L7</td>
                                <td>A vehicle with four wheels, other than that classified for the category L6, whose unladen mass is not more than 400 kg (550 kg for vehicles intended for carrying goods), not including the mass of batteries in the case of electric vehicles and whose maximum continuous rated power does not exceed 15 kW. </td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>Power-driven vehicles having at least four wheels and used for the carriage of passengers.</td>
                            </tr>
                            <tr>
                                <td>M1</td>
                                <td>Vehicles used for the carriage of passengers and comprising not more than eight seats in addition to the drivers seat.</td>
                            </tr>
                            <tr>
                                <td>M2</td>
                                <td>Vehicles used for the carriage of passengers, comprising more than eight seats in addition to the drivers seat, and having a maximum mass not exceeding 5 tonnes.</td>
                            </tr>
                            <tr>
                                <td>M3</td>
                                <td>Vehicles used for the carriage of passengers, comprising more than eight seats in addition to the drivers seat, and having a maximum mass exceeding 5 tonnes. </td>
                            </tr>
                            <tr>
                                <td>N</td>
                                <td>Power-driven vehicles having at least four wheels and used for the carriage of goods</td>
                            </tr>
                            <tr>
                                <td>N1</td>
                                <td>Vehicles used for the carriage of goods and having a maximum mass not exceeding 3.5 tonnes. </td>
                            </tr>
                            <tr>
                                <td>N2</td>
                                <td>Vehicles used for the carriage of goods and having a maximum mass exceeding 3.5 tonnes but not exceeding 12 tonnes. </td>
                            </tr>
                            <tr>
                                <td>N3</td>
                                <td>Vehicles used for the carriage of goods and having a maximum mass exceeding 12 tonnes. </td>
                            </tr>
                            <tr>
                                <td>O</td>
                                <td>Trailers </td>
                            </tr>
                            <tr>
                                <td>O1</td>
                                <td>Trailers with a maximum mass not exceeding 0.75 tonnes. </td>
                            </tr>
                            <tr>
                                <td>O2</td>
                                <td>Trailers with a maximum mass exceeding 0.75 tonnes, but not exceeding 3.5 tonnes.</td>
                            </tr>
                            <tr>
                                <td>O3</td>
                                <td>Trailers with a maximum mass exceeding 3.5 tonnes, but not exceeding 10 tonnes. </td>
                            </tr>
                            <tr>
                                <td>O4</td>
                                <td>Trailers with a maximum mass exceeding 10 tonnes. </td>
                            </tr>
                            <tr>
                                <td>T</td>
                                <td>Motorised, wheeled or tracked agricultural or forestry vehicle having at least two axles and a maximum design speed of not less than 6 km/h, the main function of which lies in its tractive power and which has been especially designed to pull, push, carry and actuate certain interchangeable equipment designed to perform agricultural or forestry work, or to tow agricultural or forestry trailers or equipment; it may be adapted to carry a load in the context of agricultural or forestry work and/or may be equipped with one or more passenger seats. </td>
                            </tr>
                            <tr>
                                <td>R</td>
                                <td>Agricultural trailer: means any agricultural or forestry vehicle intended mainly to be towed by a tractor and intended mainly to carry loads or to process materials and where the ratio of the technically permissible maximum laden mass to the unladen mass of that vehicle is equal to or greater than 3.0. </td>
                            </tr>
                            <tr>
                                <td>S</td>
                                <td>Interchangeable towed equipment: means any vehicle used in agriculture or forestry which is designed to be towed by a tractor, changes or adds to its functions, permanently incorporates an implement or is designed to process materials, which may include a load platform designed and constructed to receive any tools and appliances needed for those purposes and to store temporarily any materials produced or needed during work and where the ratio of the technically permissible maximum laden mass to the unladen mass of that vehicle is less than 3.0. </td>
                            </tr>
                            <tr>
                                <td>G</td>
                                <td>Off-road vehicles. </td>
                            </tr>
                        </tbody>
                    </table>
                </div>';
                $objectsArray[] = $object1;
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
        } else {
            $data["population"] = "N/a";
            $data["ttlland"] = "N/a";
            $data["totalHighway"] = "N/a";
            $data["GDP"] = "N/a";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "N/a";
        }
        return view('/landingpage/summary', $data);
    }
}
