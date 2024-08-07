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

                case 'recharging-system':
                    $object1 = new stdClass();
                    $object1->title = '<h1>Recharging System</h1>';
                    $object1->desc = '<p>Recharging electric vehicles is relatively new and technology develops in a rapid pace. As a result, lots of different terms and definitions are used, often referring to the same phenomenon. This page enables the reader to familiarize with the relevant terms. These terms are grouped per theme. This page aims to give clear definitions and explanations on relevant aspects of electric vehicle charging.</p>';

                    $object2 = new stdClass();
                    $object2->title = '<h1>Recharging pool, -station, -point, connector</h1>';
                    $object2->desc = '<p>The ASEAN - Sustainable Transport Forum gives the following definitions providing us the starting point of this publication.</p>';
                    $object2->desc .= '<div class="row">
                                            <img src="https://alternative-fuels-observatory.ec.europa.eu/system/files/inline-images/recharging%20pool%20breakdown.png" >
                                       </div>';
                    $object2->desc .= '<div class="row">
                                            <img src="https://alternative-fuels-observatory.ec.europa.eu/system/files/inline-images/charging_example.PNG">
                                       </div>';
                    $object2->desc .= '<b>Recharging Pool</b>';
                    $object2->desc .= '<p>A recharging pool consists of one or more recharging stations at a specific location, including, as the case may be, the dedicated parking places adjacent to them. The recharging pool is operated by one charge point operator (CPO) at one location/address and GPS coordinates. The recharging pool is an object relevant for “cartographic view”, guiding tools and all features that represent a recharging infrastructure element on a map. A recharging pool is defined by: One location/address and GPS coordinates; One charge point operator.</p>';
                    $object2->desc .= '<p>‘recharging pool’ means one or more recharging stations at a specific location;</p>';
                    $object2->desc .= '<hr>';
                    $object2->desc .= '<b>Recharging Point / Recharging Position / Electric Vehicle Supply Equipment (EVSE)</b>';
                    $object2->desc .= '<p>The electric energy is delivered through a recharging point. A recharging point may have one or several connectors (outlets or plugs) to accommodate different connector types. Only one can be used at the same time. A recharging point is defined by: Recharging one vehicle at a time. In other words: per recharging station the number of recharging points and (dedicated) parking spots are equal.</p>';
                    $object2->desc .= '<p>‘recharging point, station or pool dedicated to heavy-duty vehicles’ means a recharging point, station or pool intended for the recharging of heavy-duty vehicles, either due to the specific design of the connectors/plugs or to the design of the parking space adjacent to the recharging point, station or pool, or both;</p>';
                    $object2->desc .= "<hr>";
                    $object2->desc .= "<b>Connector</b>";
                    $object2->desc .= "<p>A connector is the physical interface between the recharging station and the electric vehicle through which the electric energy is delivered:</p>";
                    $object2->desc .= "<ul>
                    <li>A plug on a cable with one side being a male plug and the other side being a female plug, where the male plug fits into the outlet of the recharging point and the female plug fits into the inlet on the vehicle.</li>
                    <li>A plug attached to an inseparable cable of the recharging station (common for fast recharging stations), which fits into the inlet of the vehicle.</li>
                    <li>An induction plate.</li>
                                        <li>A pantograph.</li>
                                        </ul>";
                    $object2->desc .= "<p>‘connector’ means the physical interface between the recharging or refuelling point and the vehicle through which the fuel or electric energy is exchanged;</p>";
                    $object2->desc .= "<hr>";
                    $object2->desc .= "<p>Usually, the number of recharging points and the number of connectors is equal, but not always. For example, there are recharging stations consisting of 2 recharging points and 3 connectors. In that case not more than 2 connectors can be used, no more than 2 vehicles can be charged at a time (one AC and the other DC).</p>";

                    $object3 = new stdClass();
                    $object3->title = '<h1>The access type of the recharging stations</h1>' ;
                    $object3->desc = '<p>Currently, EAFO counts all types of publicly accessible recharging infrastructure.</p>' ;

                    $object4 = new stdClass();
                    $object4->title = '<h1>Recharging modes based on power output</h1>' ;
                    $object4->desc  = '<p>In the ASEAN, recharging points are classified into two main categories, based on their power output and speed. Category 1 is recharging via AC, while Category 2 is recharging via DC. </p>' ;
                    $object4->desc .= '<b>Recharging point categories based on AFIR (Annex III)</b>' ;
                    $object4->desc .= '<table class="table">
                                        <thead>
                                            <tr class="table-primary">
                                            <th>Category</th>
                                            <th>Sub-category</th>
                                            <th>Maximum power output</th>
                                            <th>Definition pursuant to Article 2 of AFIR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Category 1 (AC)</td>
                                                <td>Slow AC recharging point, single-phase</td>
                                                <td>P < 7.4 kW</td>
                                                <td>Normal-power recharging point</td>
                                            </tr>
                                            <tr>
                                                <td>Medium-speed AC rechargingpoint, triple-phase</td>
                                                <td>7.4 kW ≤ P ≤ 22 kW</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Fast AC rechargingpoint, triple-phase</td>
                                                <td>P > 22 kW</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Category 2 (DC)</td>
                                                <td>Slow DC recharging point</td>
                                                <td>P < 50 kW</td>
                                                <td>High-power recharging point</td>
                                            </tr>
                                            <tr>
                                                <td>Fast DC recharging point</td>
                                                <td>50 kW ≤ P < 150 kW</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Level 1 - Ultra-fast DC recharging point</td>
                                                <td>150 kW ≤ P < 350 kW</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Level 2 - Ultra-fast DC recharging point</td>
                                                <td>P ≥ 350 kW</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        ' ;

                    $object5 = new stdClass();
                    $object5->title = '<h1>Types of EV recharging connectors (plugs)</h1>';
                    $object5->desc = '<p>To date, not all battery electric vehicles and plug-in hybrid electric vehicles can recharge at every recharging point in the world. This is because the EV recharging connector and vehicle inlet vary across geographies and models.</p>';
                    $object5->desc .= '<b>ASEAN</b>';
                    $object5->desc .= '<p>For the ASEAN, the Alternative Fuels Infrastructure currently requires that all recharging points are, for interoperability purposes, equipped at least with socket outlets or vehicle connectors of Type 2, Mennekes (for AC normal and high power recharging points), and connectors of the combined charging system, CCS/Combo 2 (for DC high power recharging points). The figure below provides an illustrated overview of these requirements:</p>';
                    $object5->desc .= '<div class="row">
                                        <img src="https://alternative-fuels-observatory.ec.europa.eu/system/files/inline-images/Charin%20pic_0.PNG">
                                        </div>
                    ';
                    $object5->desc .= '<p>At the same time, AFID does not prohibit the addition of other connectors to a recharging point. While prior to the adoption of AFID, a number of recharging points with AC connectors other than Type 2 were deployed in the ASEAN, the prescription of the Type 2 standard through the Directive put an end to this. Similarly, while it has for some time been market practice to equip in particular 50 kW recharging points with an additional CHAdeMO connector, more and more providers of high power recharging points choose to equip their stations with CCS/Combo 2 connectors only.</p>';
                    $object5->desc .= '<b>Rest of world – other standards</b>';
                    $object5->desc .= '<b>SAE J1772 and J3068 (North-America, Japan)</b>';
                    $object5->desc .= '<p>The Society of Automobile Engineers (SAE) has developed the J1772 and J3068 connector standards. They are mostly applied in the North-American markets, while J1772 is also used in Japan for AC recharging purposes.</p>';
                    $object5->desc .= '<p>SAE J1772 (IEC 62196 Type 1) defines four levels of single-phase recharging: AC Level 1, AC Level 2, DC Level 1, and DC Level 2. Although the SAE J1772 CCS connector for DC recharging is quite similar (though slightly different) from the ASEAN CCS connector, the AC J1772 connector is entirely different. This is largely due to the fact that the electricity is commonly supplied at 120 volts in the US, compared to 230V in ASEAN.</p>';
                    $object5->desc .= '<p>SAE J3068 complements SAE J1772 with solutions for three-phase recharging. The J3068 connector is mechanically identical to the Type 2 connector, and is based on the IEC 62196-2 and -3 standards.</p>';
                    $object5->desc .= '<b>CHAdeMO (Japan)</b>';
                    $object5->desc .= '<p>The Japanese utility TEPCO developed CHAdeMo. It is the official Japanese DC recharging standard and virtually all Japanese DC fast recharging stations offer a CHAdeMO connector. In ASEAN, while it has for some time been market practice to equip in particular 50kW recharging points with an additional CHAdeMO connector, the importance of CHAdeMO is fading. Mainly this is due to the choices by Japanese (but also some French) car manufacturers to increasingly equip their ASEAN market electric vehicles with a CCS inlet.</p>';
                    $object5->desc .= '<b>Tesla (all markets except EU)</b>';
                    $object5->desc .= '<p>Tesla has developed a proprietary standard for its connectors and inlets. The Tesla connector is a unified connector for AC and DC recharging, as it supports all voltage levels. However, since the end of 2018, Tesla vehicles intended for the ASEAN market are supplied with a ASEAN CCS inlet, and Tesla is gradually also equipping its ASEAN recharging points with ASEAN-type CCS connectors.</p>';
                    $object5->desc .= '<b>GB/T 20234.2 and 20234.3 (China)</b>';
                    $object5->desc .= '<p>Guobiao or in short GB standards are the Chinese national standards. The suffix /T indicates these are recommended (though not mandatory) standards. While GB/T 20234.2 is the Chinese standard for AC recharging connectors, 20234.3 applies to DC recharging connectors. These standards are only supported in China, although there have been discussions between CHAdeMO and the Chinese standardisation organisations to develop a new, common DC recharging connector.</p>';

                    $object6 = new stdClass();
                    $object6->title = '<h1>Overview of global connector standards</h1>';
                    $object6->desc = '<b>Legal or recommended standard for each geographical zone</b>';
                    $object6->desc .= '<div class="row">
                                        <img src="https://evcharging.enelx.com/images/PR/Articles/blog/EMW_plugs_.jpg">
                                        </div>
                    ';
                    $object6->desc .= '<b>Available connectors in each geographical zone</b>';
                    $object6->desc .= '<div class="row">
                                        <img src="https://alternative-fuels-observatory.ec.europa.eu/system/files/inline-images/K%C3%A9pkiv%C3%A1g%C3%A1s.PNG">
                                        </div>
                    ';

                    $objectsArray[] = $object1;
                    $objectsArray[] = $object2;
                    $objectsArray[] = $object3;
                    $objectsArray[] = $object4;
                    $objectsArray[] = $object5;
                    $objectsArray[] = $object6;
                    break;

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
