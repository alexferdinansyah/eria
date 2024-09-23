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

        $data['tes'] = "<h1>hello</h1>";
        
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

            $data['tableData1'] ='
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>331</td>
                        <td>1108</td>
                        <td>2473</td>
                        <td>5100</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>118</td>
                        <td>685</td>
                        <td>10327</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>20</td>
                        <td>6</td>
                        <td>35</td>
                        <td>10</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL ICE Sales</td>
                        <td>894164</td>
                        <td>1116230</td>
                        <td>1229811</td>
                        <td>1208028</td>
                        <td>1013518</td>
                        <td>1062694</td>
                        <td>1077364</td>
                        <td>1151308</td>
                        <td>1029775</td>
                        <td>531175</td>
                        <td>884009</td>
                        <td>1032603</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>894164</td>
                        <td>1116230</td>
                        <td>1229811</td>
                        <td>1208028</td>
                        <td>1013518</td>
                        <td>1062694</td>
                        <td>1077364</td>
                        <td>1151328</td>
                        <td>1030112</td>
                        <td>532436</td>
                        <td>888202</td>
                        <td>1043039</td>
                        <td>0</td>
                    </tr>
            ';

            $data['tableData2'] = '
            <tr style="height: 33.33%;">
                            <td>HEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>331</td>
                            <td>1439</td>
                            <td>3912</td>
                            <td>9012</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>118</td>
                            <td>685</td>
                            <td>10327</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>20</td>
                            <td>26</td>
                            <td>61</td>
                            <td>71</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>894164</td>
                            <td>2010394</td>
                            <td>3240205</td>
                            <td>4448233</td>
                            <td>5461751</td>
                            <td>6524445</td>
                            <td>7601809</td>
                            <td>7601809</td>
                            <td>9782892</td>
                            <td>10314067</td>
                            <td>11198076</td>
                            <td>12230679</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>894164</td>
                            <td>2010394</td>
                            <td>3240205</td>
                            <td>4448233</td>
                            <td>5461751</td>
                            <td>6524445</td>
                            <td>7601809</td>
                            <td>8753117</td>
                            <td>9783243</td>
                            <td>10315650</td>
                            <td>11202852</td>
                            <td>12250892</td>
                            <td>0</td>
                        </tr>
            ';

        }else if($nat == "vietnam"){
            $sales["ICE"] = 1032603;
            $sales["HEV"] = 5100;
            $sales["BEV"] = 10327;
            $sales["PHEV"] = 10;

            $stock["ICE"] = 12230679;
            $stock["HEV"] = 9012;
            $stock["BEV"] = 11130;
            $stock["PHEV"] = 71;

            $data["population"] = "99,474";
            $data["ttlland"] = "33,1345";
            $data["totalHighway"] = "N/a";
            $data["GDP"] = "4,123";
            $data["PPP"] = "6,908";
            $data["GDPppp"] = "14,024";

            $data["volIce"] = "1032603";
            $data["volHev"] = "5100";
            $data["volBev"] = "10327";
            $data["volPhev"] = "10";
            $data["volNewCarSum"] = "1048040";
            $data["volStockUIO"] = "12250892";

            
            $data['tableData1'] ='
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL ICE Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
            ';

            $data['tableData2'] = '
            <tr style="height: 33.33%;">
                            <td>HEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
            ';


        }else if($nat == "thailand"){
                
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
            
            $data['tableData1'] ='
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>12077</td>
                        <td>16102</td>
                        <td>16175</td>
                        <td>9101</td>
                        <td>7629</td>
                        <td>9577</td>
                        <td>11944</td>
                        <td>20056</td>
                        <td>26447</td>
                        <td>28375</td>
                        <td>34339</td>
                        <td>63568</td>
                        <td>84,476</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>9</td>
                        <td>7</td>
                        <td>13</td>
                        <td>6</td>
                        <td>14</td>
                        <td>2</td>
                        <td>38</td>
                        <td>152</td>
                        <td>748</td>
                        <td>1406</td>
                        <td>1990</td>
                        <td>9901</td>
                        <td>76793</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>1091</td>
                        <td>7060</td>
                        <td>11331</td>
                        <td>11703</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL ICE Sales</td>
                        <td>858221</td>
                        <td>1269591</td>
                        <td>1296195</td>
                        <td>905181</td>
                        <td>799274</td>
                        <td>811360</td>
                        <td>917158</td>
                        <td>982983</td>
                        <td>991767</td>
                        <td>788205</td>
                        <td>736680</td>
                        <td>806194</td>
                        <td>675188</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>870307</td>
                        <td>1285700</td>
                        <td>1312383</td>
                        <td>914288</td>
                        <td>806917</td>
                        <td>820939</td>
                        <td>929140</td>
                        <td>1003191</td>
                        <td>1018962</td>
                        <td>819077</td>
                        <td>780069</td>
                        <td>890994</td>
                        <td>848160</td>
                    </tr>
            ';

            $data['tableData2'] = '
            <tr style="height: 33.33%;">
                            <td>HEV Vehicle Stock</td>
                            <td>12077</td>
                            <td>28179</td>
                            <td>44354</td>
                            <td>53455</td>
                            <td>61084</td>
                            <td>70661</td>
                            <td>82605</td>
                            <td>102661</td>
                            <td>129108</td>
                            <td>157483</td>
                            <td>191822</td>
                            <td>255390</td>
                            <td>339866</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>9</td>
                            <td>16</td>
                            <td>29</td>
                            <td>35</td>
                            <td>49</td>
                            <td>51</td>
                            <td>89</td>
                            <td>241</td>
                            <td>989</td>
                            <td>2395</td>
                            <td>4385</td>
                            <td>14286</td>
                            <td>91079</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1091</td>
                            <td>8151</td>
                            <td>19482</td>
                            <td>31185</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>858221</td>
                            <td>2127812</td>
                            <td>3424007</td>
                            <td>4329188</td>
                            <td>5128462</td>
                            <td>5939822</td>
                            <td>6856980</td>
                            <td>7839963</td>
                            <td>8831730</td>
                            <td>9619935</td>
                            <td>10356615</td>
                            <td>11162809</td>
                            <td>11837997</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>870307</td>
                            <td>2156007</td>
                            <td>3468390</td>
                            <td>4382678</td>
                            <td>5189595</td>
                            <td>6010534</td>
                            <td>6939674</td>
                            <td>7942865</td>
                            <td>8961827</td>
                            <td>9780904</td>
                            <td>10560973</td>
                            <td>11451967</td>
                            <td>12300127</td>
                        </tr>
            ';
        }else if($nat == "malaysia"){
                
            $sales["ICE"] = 806194;
            $sales["HEV"] = 63568;
            $sales["BEV"] = 9901;
            $sales["PHEV"] = 11331;

            $stock["ICE"] = 12230679;
            $stock["HEV"] = 9012;
            $stock["BEV"] = 11130;
            $stock["PHEV"] = 71;

            $data["population"] = "33,938,221";
            $data["ttlland"] = "328,550";
            $data["totalHighway"] = "281,302";
            $data["GDP"] = "11,993.19";
            $data["PPP"] = "1,137,789,082,909";
            $data["GDPppp"] = "33,525";

            $data["volIce"] = "N/a";
            $data["volHev"] = "N/a";
            $data["volBev"] = "N/a";
            $data["volPhev"] = "N/a";
            $data["volNewCarSum"] = "N/a";
            $data["volStockUIO"] = "N/a";

            $data['tableData1'] ='
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL ICE Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
            ';

            $data['tableData2'] = '
            <tr style="height: 33.33%;">
                            <td>HEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
            ';
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

            $data['tableData1'] ='
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL ICE Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
            ';

            $data['tableData2'] = '
            <tr style="height: 33.33%;">
                            <td>HEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
            ';
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
