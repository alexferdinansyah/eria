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

        $sales = [];
        $stock = [];

        if ($nat === "indonesia") {
            $data["sd"] = '
            <p>Data Source</p>
            <ol type="A">
                <li>Population
                    <ol>
                        <li><a href="https://sumsel.bps.go.id/indicator/12/573/4/jumlah-penduduk-menurut-provinsi.html">https://sumsel.bps.go.id/indicator/12/573/4/jumlah-penduduk-menurut-provinsi.html</a></li>
                        <li><a href="https://jatim.bps.go.id/indicator/12/114/2/jumlah-penduduk-menurut-provinsi-di-indonesia.html">https://jatim.bps.go.id/indicator/12/114/2/jumlah-penduduk-menurut-provinsi-di-indonesia.html</a></li>
                        <li><a href="https://jatim.bps.go.id/indicator/12/114/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html">https://jatim.bps.go.id/indicator/12/114/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html</a></li>
                        <li><a href="https://sulut.bps.go.id/indicator/12/958/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html">https://sulut.bps.go.id/indicator/12/958/1/jumlah-penduduk-menurut-provinsi-di-indonesia.html</a></li>
                        <li><a href="https://www.bps.go.id/id/statistics-table/2/MTk3NSMy/jumlah-penduduk-pertengahan-tahun--ribu-jiwa-.html">https://www.bps.go.id/id/statistics-table/2/MTk3NSMy/jumlah-penduduk-pertengahan-tahun--ribu-jiwa-.html</a></li>
                    </ol>
                </li>
                <li>Total Land Area
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/AG.LND.TOTL.K2?locations=ID&start=2011">https://data.worldbank.org/indicator/AG.LND.TOTL.K2?locations=ID&start=2011</a></li>
                    </ol>
                </li>
                <li>Total Road Length
                    <ol>
                        <li><a href="https://www.bps.go.id/en/statistics-table/2/NTAjMg==/length-of-road-by-level-of-government-responsibility--km-.html">https://www.bps.go.id/en/statistics-table/2/NTAjMg==/length-of-road-by-level-of-government-responsibility--km-.html</a></li>
                    </ol>
                </li>
                <li>GDP per Capita (Current US$)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?end=2022&locations=ID&start=2011&view=chart">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?end=2022&locations=ID&start=2011&view=chart</a></li>
                    </ol>
                </li>
                <li>Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="https://satudata.kemendag.go.id/data-informasi/perdagangan-dalam-negeri/produk-domestik-bruto">https://satudata.kemendag.go.id/data-informasi/perdagangan-dalam-negeri/produk-domestik-bruto</a></li>
                    </ol>
                </li>
                <li>GDP per Capita, Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=ID&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=ID&start=2011</a></li>
                    </ol>
                </li>
            </ol>
            ';

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
            $data["totalRoad"] = "548,097";
            $data["GDP"] = "4,778";
            $data["PPP"] = "1,214.92";
            $data["GDPppp"] = "12,410";

            $data["volIce"] = "1032603";
            $data["volHev"] = "5100";
            $data["volBev"] = "10327";
            $data["volPhev"] = "10";
            $data["volNewCarSum"] = "1048040";
            $data["volStockUIO"] = "12250892";

            $data['tableData1'] = '
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
        } else if ($nat == "vietnam") {
            $data["sd"] = "";
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
            $data["totalRoad"] = "649,422";
            $data["GDP"] = "4,123";
            $data["PPP"] = "6,908";
            $data["GDPppp"] = "14,024";

            $data["volIce"] = "1032603";
            $data["volHev"] = "5100";
            $data["volBev"] = "10327";
            $data["volPhev"] = "10";
            $data["volNewCarSum"] = "1048040";
            $data["volStockUIO"] = "12250892";


            $data['tableData1'] = '
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
                        <td>85</td>
                        <td>7,080</td>
                        <td>34,855</td>
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
                        <td>80,418</td>
                        <td>96,692</td>
                        <td>147,588</td>
                        <td>235,768</td>
                        <td>308,242</td>
                        <td>279,369</td>
                        <td>340,343</td>
                        <td>400,941</td>
                        <td>394,836</td>
                        <td>383,359</td>
                        <td>455,489</td>
                        <td>343,827</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>110,938</td>
                        <td>80,418</td>
                        <td>96,692</td>
                        <td>147,588</td>
                        <td>235,768</td>
                        <td>308,242</td>
                        <td>279,369</td>
                        <td>340,343</td>
                        <td>400,941</td>
                        <td>394,836</td>
                        <td>383,444</td>
                        <td>462,569</td>
                        <td>378,682</td>
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
                            <td>85</td>
                            <td>7165</td>
                            <td>42020</td>
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
                            <td>110,938</td>
                            <td>191,356</td>
                            <td>288,048</td>
                            <td>435,636</td>
                            <td>671,404</td>
                            <td>979,646</td>
                            <td>1,259,015</td>
                            <td>1,599,358</td>
                            <td>2,000,299</td>
                            <td>2,395,135</td>
                            <td>2,778,494</td>
                            <td>3,233,983</td>
                            <td>3,577,810</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>110,938</td>
                            <td>191,356</td>
                            <td>288,048</td>
                            <td>435,636</td>
                            <td>671,404</td>
                            <td>979,646</td>
                            <td>1,259,015</td>
                            <td>1,599,358</td>
                            <td>2,000,299</td>
                            <td>2,395,135</td>
                            <td>2,778,579</td>
                            <td>3,241,148</td>
                            <td>3,619,830</td>
                        </tr>
            ';
        } else if ($nat == "thailand") {
            $data["sd"] = '
            <p>Data Source</p>
            <ol type="A">
                <li>Population
                    <ol>
                        <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                        <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                        <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
                    </ol>
                </li>
                <li>Total Land Area
                    <ol>
                        <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
                    </ol>
                </li>
                <li>Total Road Length
                    <ol>
                        <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
                    </ol>
                </li>
                <li>GDP per Capita (Current US$)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
                    </ol>
                </li>
                <li>Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="#">not Available</a></li>
                    </ol>
                </li>
                <li>GDP per Capita, Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
                    </ol>
                </li>
                <li>Public Charging Roadmap
                    <ol>
                        <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                        <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
                    </ol>
                </li>
            </ol>
            ';

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
            $data["totalRoad"] = "703,633";
            $data["GDP"] = "7,171.81";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "21,112.640";

            $data["volIce"] = "1032603";
            $data["volHev"] = "5100";
            $data["volBev"] = "10327";
            $data["volPhev"] = "10";
            $data["volNewCarSum"] = "1048040";
            $data["volStockUIO"] = "12250892";

            $data['tableData1'] = '
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
        } else if ($nat == "malaysia") {
            $data["sd"] = "";

            $sales["ICE"] = 3006138;
            $sales["HEV"] = 30762;
            $sales["BEV"] = 8618;
            $sales["PHEV"] = "N/a";

            $stock["ICE"] = 24422108;
            $stock["HEV"] = 112268;
            $stock["BEV"] = 24204;
            $stock["PHEV"] = 49092;

            $data["population"] = "33,938,221";
            $data["ttlland"] = "328,550";
            $data["totalRoad"] = "281,302";
            $data["GDP"] = "11,993.19";
            $data["PPP"] = "1,137,789,082,909";
            $data["GDPppp"] = "33,525";

            $data["volIce"] = "N/a";
            $data["volHev"] = "N/a";
            $data["volBev"] = "N/a";
            $data["volPhev"] = "N/a";
            $data["volNewCarSum"] = "N/a";
            $data["volStockUIO"] = "N/a";

            $data['tableData1'] = '
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>13908</td>
                        <td>11724</td>
                        <td>18316</td>
                        <td>15610</td>
                        <td>12266</td>
                        <td>4134</td>
                        <td>5548</td>
                        <td>30762</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>496</td>
                        <td>1300</td>
                        <td>1772</td>
                        <td>1720</td>
                        <td>1796</td>
                        <td>2448</td>
                        <td>2362</td>
                        <td>1574</td>
                        <td>2118</td>
                        <td>8618</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>33732</td>
                        <td>15360</td>
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
                        <td>2440530</td>
                        <td>2547212</td>
                        <td>2385840</td>
                        <td>2190498</td>
                        <td>2231688</td>
                        <td>2419146</td>
                        <td>2502442</td>
                        <td>2321096</td>
                        <td>2377518</td>
                        <td>3006138</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>2474758</td>
                        <td>2563872</td>
                        <td>2401520</td>
                        <td>2203942</td>
                        <td>2251800</td>
                        <td>2437204</td>
                        <td>2517070</td>
                        <td>2326804</td>
                        <td>2385184</td>
                        <td>3045518</td>
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
                            <td>13908</td>
                            <td>25632</td>
                            <td>43948</td>
                            <td>59558</td>
                            <td>71824</td>
                            <td>75958</td>
                            <td>81506</td>
                            <td>112268</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>496</td>
                            <td>1796</td>
                            <td>3568</td>
                            <td>5288</td>
                            <td>7084</td>
                            <td>9532</td>
                            <td>11894</td>
                            <td>13468</td>
                            <td>15586</td>
                            <td>24204</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>496</td>
                            <td>1796</td>
                            <td>3568</td>
                            <td>5288</td>
                            <td>7084</td>
                            <td>9532</td>
                            <td>11894</td>
                            <td>13468</td>
                            <td>15586</td>
                            <td>24204</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2440530</td>
                            <td>4987742</td>
                            <td>7373582</td>
                            <td>9564080</td>
                            <td>11795768</td>
                            <td>14214914</td>
                            <td>16717356</td>
                            <td>19038452</td>
                            <td>21415970</td>
                            <td>24422108</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2474758</td>
                            <td>5038630</td>
                            <td>7440150</td>
                            <td>9644092</td>
                            <td>11895892</td>
                            <td>14333096</td>
                            <td>16850166</td>
                            <td>19176970</td>
                            <td>21562154</td>
                            <td>24607672</td>
                            <td>0</td>
                        </tr>
            ';
        } else if ($nat == "laos") {
            $data["sd"] = "";

            $sales["ICE"] = 25224;
            $sales["HEV"] = 63;
            $sales["BEV"] = 1697;
            $sales["PHEV"] = 0;

            $stock["ICE"] = 174765;
            $stock["HEV"] = 234;
            $stock["BEV"] = 2296;
            $stock["PHEV"] = 0;

            $data["population"] = "7,633,779";
            $data["ttlland"] = "236,800";
            $data["totalRoad"] = "59,646";
            $data["GDP"] = "1,832.00";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "N/a";

            $data["volIce"] = "N/a";
            $data["volHev"] = "N/a";
            $data["volBev"] = "N/a";
            $data["volPhev"] = "N/a";
            $data["volNewCarSum"] = "N/a";
            $data["volStockUIO"] = "N/a";

            $data['tableData1'] = '
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
                        <td>3</td>
                        <td>11</td>
                        <td>157</td>
                        <td>63</td>
                        <td>471</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>30</td>
                        <td>65</td>
                        <td>184</td>
                        <td>200</td>
                        <td>283</td>
                        <td>1786</td>
                        <td>3152</td>
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
                        <td>135351</td>
                        <td>144561</td>
                        <td>150781</td>
                        <td>137703</td>
                        <td>140320</td>
                        <td>132516</td>
                        <td>128957</td>
                        <td>125516</td>
                        <td>128293</td>
                        <td>109535</td>
                        <td>106852</td>
                        <td>150464</td>
                        <td>109641</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>135351</td>
                        <td>144561</td>
                        <td>150781</td>
                        <td>137703</td>
                        <td>140320</td>
                        <td>132516</td>
                        <td>128987</td>
                        <td>125581</td>
                        <td>128480</td>
                        <td>109746</td>
                        <td>107292</td>
                        <td>152313</td>
                        <td>113264</td>
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
                            <td>3</td>
                            <td>14</td>
                            <td>171</td>
                            <td>234</td>
                            <td>705</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>30</td>
                            <td>95</td>
                            <td>279</td>
                            <td>479</td>
                            <td>762</td>
                            <td>2548</td>
                            <td>5700</td>
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
                            <td>135351</td>
                            <td>279912</td>
                            <td>430693</td>
                            <td>568396</td>
                            <td>708716</td>
                            <td>841232</td>
                            <td>970189</td>
                            <td>1095705</td>
                            <td>1223998</td>
                            <td>1333533</td>
                            <td>1440385</td>
                            <td>1590849</td>
                            <td>1700490</td>
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
                            <td>36181</td>
                            <td>68398</td>
                            <td>98557</td>
                            <td>120465</td>
                            <td>150311</td>
                            <td>177295</td>
                        </tr>
            ';
        } else {
            $data["sd"] = "";
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
            $data["totalRoad"] = "N/a";
            $data["GDP"] = "N/a";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "N/a";

            $data["volIce"] = "N/a";
            $data["volHev"] = "N/a";
            $data["volBev"] = "N/a";
            $data["volPhev"] = "N/a";
            $data["volNewCarSum"] = "N/a";
            $data["volStockUIO"] = "N/a";

            $data['tableData1'] = '
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

    public function summaryMobile($cat, $nat)
    {

        if ($nat == "indonesia") {
            $data["nat"] = $nat;   //negara
            $data["cat"] = $cat;
            $data["population"] = "275,773,800";
            $data["ttlland"] = "1,892,556";
            $data["totalRoad"] = "548,097";
            $data["GDP"] = "4,778";
            $data["PPP"] = "1,214.92";
            $data["GDPppp"] = "12,410";
            $data['tableData1'] = '
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

            $data["sd"] = '
                <p>Data Source</p>
                <ol type="A">
                    <li>Population
                        <ol>
                            <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                            <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                            <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
                        </ol>
                    </li>
                    <li>Total Land Area
                        <ol>
                            <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
                        </ol>
                    </li>
                    <li>Total Road Length
                        <ol>
                            <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
                        </ol>
                    </li>
                    <li>GDP per Capita (Current US$)
                        <ol>
                            <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
                        </ol>
                    </li>
                    <li>Purchasing Power Parity (PPP)
                        <ol>
                            <li><a href="#">not Available</a></li>
                        </ol>
                    </li>
                    <li>GDP per Capita, Purchasing Power Parity (PPP)
                        <ol>
                            <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
                        </ol>
                    </li>
                    <li>Public Charging Roadmap
                        <ol>
                            <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                            <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
                        </ol>
                    </li>
                </ol>
                ';
            return view('/landingpage/summary/nations/indonesia', $data);
        } else if ($nat == "thailand") {
            $data["nat"] = $nat;   //negara
            $data["cat"] = $cat;
            $data["population"] = "66,050,000";
            $data["ttlland"] = "513,120";
            $data["totalRoad"] = "704,282";
            $data["GDP"] = "7,171.81";
            $data["PPP"] = "";
            $data["GDPppp"] = "21,112.64";
            $data['tableData1'] = '
                <tr style="height: 33.33%;">
                            <td>VOL HEV Sales</td>
                            <td>12,077</td>
                            <td>16,102</td>
                            <td>16,175</td>
                            <td>9,101</td>
                            <td>7,629</td>
                            <td>9,577</td>
                            <td>11,944</td>
                            <td>20,056</td>
                            <td>26,447</td>
                            <td>28,375</td>
                            <td>34,339</td>
                            <td>63,568</td>
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
                            <td>1,406</td>
                            <td>1,990</td>
                            <td>9,901</td>
                            <td>76,793</td>
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
                            <td>1,091</td>
                            <td>7,060</td>
                            <td>11,331</td>
                            <td>11,703</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>VOL ICE Sales</td>
                            <td>858,221</td>
                            <td>1,269,591</td>
                            <td>1,296,195</td>
                            <td>905,181</td>
                            <td>799,274</td>
                            <td>811,360</td>
                            <td>917,158</td>
                            <td>982,983</td>
                            <td>991,767</td>
                            <td>788,205</td>
                            <td>736,680</td>
                            <td>806,194</td>
                            <td>675,188</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL Sales</td>
                            <td>870,307</td>
                            <td>1,285,700</td>
                            <td>1,312,383</td>
                            <td>914,288</td>
                            <td>806,917</td>
                            <td>820,939</td>
                            <td>929,140</td>
                            <td>1,003,191</td>
                            <td>1,018,962</td>
                            <td>819,077</td>
                            <td>780,069</td>
                            <td>890,994</td>
                            <td>848,160</td>
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
            ';

            $data["sd"] = '
            <p>Data Source</p>
            <ol type="A">
                <li>Population
                    <ol>
                        <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                        <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                        <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
                    </ol>
                </li>
                <li>Total Land Area
                    <ol>
                        <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
                    </ol>
                </li>
                <li>Total Road Length
                    <ol>
                        <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
                    </ol>
                </li>
                <li>GDP per Capita (Current US$)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
                    </ol>
                </li>
                <li>Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="#">not Available</a></li>
                    </ol>
                </li>
                <li>GDP per Capita, Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
                    </ol>
                </li>
                <li>Public Charging Roadmap
                    <ol>
                        <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                        <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
                    </ol>
                </li>
            </ol>
            ';
            return view('/landingpage/summary/nations/thailand', $data);
        } else if ($nat == "malaysia") {
            $data["nat"] = $nat;   //negara
            $data["cat"] = $cat;
            $data["population"] = "33,938,221";
            $data["ttlland"] = "328,550";
            $data["totalRoad"] = "281,302";
            $data["GDP"] = "11,993.19";
            $data["PPP"] = "1,137,789,082,909";
            $data["GDPppp"] = "33,525.30";
            $data['tableData1'] = '
            <tr style="height: 33.33%;">
                        <td>VOL HEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>13908</td>
                        <td>11724</td>
                        <td>18316</td>
                        <td>15610</td>
                        <td>12266</td>
                        <td>4134</td>
                        <td>5548</td>
                        <td>30762</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL BEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>496</td>
                        <td>1300</td>
                        <td>1772</td>
                        <td>1720</td>
                        <td>1796</td>
                        <td>2448</td>
                        <td>2362</td>
                        <td>1574</td>
                        <td>2118</td>
                        <td>8618</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>VOL PHEV Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>33732</td>
                        <td>15360</td>
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
                        <td>2440530</td>
                        <td>2547212</td>
                        <td>2385840</td>
                        <td>2190498</td>
                        <td>2231688</td>
                        <td>2419146</td>
                        <td>2502442</td>
                        <td>2321096</td>
                        <td>2377518</td>
                        <td>3006138</td>
                        <td>0</td>
                    </tr>
                    <tr style="height: 33.33%;">
                        <td>TOTAL Sales</td>
                        <td>0</td>
                        <td>0</td>
                        <td>2474758</td>
                        <td>2563872</td>
                        <td>2401520</td>
                        <td>2203942</td>
                        <td>2251800</td>
                        <td>2437204</td>
                        <td>2517070</td>
                        <td>2326804</td>
                        <td>2385184</td>
                        <td>3045518</td>
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
                            <td>13908</td>
                            <td>25632</td>
                            <td>43948</td>
                            <td>59558</td>
                            <td>71824</td>
                            <td>75958</td>
                            <td>81506</td>
                            <td>112268</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>BEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>496</td>
                            <td>1796</td>
                            <td>3568</td>
                            <td>5288</td>
                            <td>7084</td>
                            <td>9532</td>
                            <td>11894</td>
                            <td>13468</td>
                            <td>15586</td>
                            <td>24204</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>PHEV Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>33732</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>49092</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>ICE Vehicle Stock</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2440530</td>
                            <td>4987742</td>
                            <td>7373582</td>
                            <td>9564080</td>
                            <td>11795768</td>
                            <td>14214914</td>
                            <td>16717356</td>
                            <td>19038452</td>
                            <td>21415970</td>
                            <td>24422108</td>
                            <td>0</td>
                        </tr>
                        <tr style="height: 33.33%;">
                            <td>TOTAL STOCK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2474758</td>
                            <td>5038630</td>
                            <td>7440150</td>
                            <td>9644092</td>
                            <td>11895892</td>
                            <td>14333096</td>
                            <td>16850166</td>
                            <td>19176970</td>
                            <td>21562154</td>
                            <td>24607672</td>
                            <td>0</td>
                        </tr>
            ';

            $data["sd"] = '
            <p>Data Source</p>
            <ol type="A">
                <li>Population
                    <ol>
                        <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                        <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                        <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
                    </ol>
                </li>
                <li>Total Land Area
                    <ol>
                        <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
                    </ol>
                </li>
                <li>Total Road Length
                    <ol>
                        <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
                    </ol>
                </li>
                <li>GDP per Capita (Current US$)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
                    </ol>
                </li>
                <li>Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="#">not Available</a></li>
                    </ol>
                </li>
                <li>GDP per Capita, Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
                    </ol>
                </li>
                <li>Public Charging Roadmap
                    <ol>
                        <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                        <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
                    </ol>
                </li>
            </ol>
            ';
            return view('/landingpage/summary/nations/malaysia', $data);
        } else if ($nat == "laos") {
            $data["nat"] = $nat;   //negara
            $data["cat"] = $cat;
            $data["population"] = "7,633,779";
            $data["ttlland"] = "236,800";
            $data["totalRoad"] = "59,646";
            $data["GDP"] = "1,832.00";
            $data["PPP"] = "N/A";
            $data["GDPppp"] = "N/A";
            $data['tableData1'] = '
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
                                <td>3</td>
                                <td>11</td>
                                <td>157</td>
                                <td>63</td>
                                <td>471</td>
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
                                <td>65</td>
                                <td>184</td>
                                <td>200</td>
                                <td>283</td>
                                <td>1786</td>
                                <td>3152</td>
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
                                <td>135351</td>
                                <td>144561</td>
                                <td>150781</td>
                                <td>137703</td>
                                <td>140320</td>
                                <td>132516</td>
                                <td>128957</td>
                                <td>125516</td>
                                <td>128293</td>
                                <td>109535</td>
                                <td>106852</td>
                                <td>150464</td>
                                <td>109641</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>TOTAL Sales</td>
                                <td>135351</td>
                                <td>144561</td>
                                <td>150781</td>
                                <td>137703</td>
                                <td>140320</td>
                                <td>132516</td>
                                <td>128987</td>
                                <td>125581</td>
                                <td>128480</td>
                                <td>109746</td>
                                <td>107292</td>
                                <td>152313</td>
                                <td>113264</td>
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
                                <td>3</td>
                                <td>14</td>
                                <td>171</td>
                                <td>234</td>
                                <td>705</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>BEV Vehicle Stock</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>30</td>
                                <td>95</td>
                                <td>279</td>
                                <td>479</td>
                                <td>762</td>
                                <td>2548</td>
                                <td>5700</td>
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
                                <td>135351</td>
                                <td>279912</td>
                                <td>430693</td>
                                <td>568396</td>
                                <td>708716</td>
                                <td>841232</td>
                                <td>970189</td>
                                <td>1095705</td>
                                <td>1223998</td>
                                <td>1333533</td>
                                <td>1440385</td>
                                <td>1590849</td>
                                <td>1700490</td>
                            </tr>
                            <tr style="height: 33.33%;">
                                <td>TOTAL STOCK</td>
                                <td>135351</td>
                                <td>279912</td>
                                <td>430693</td>
                                <td>568396</td>
                                <td>708716</td>
                                <td>841232</td>
                                <td>970219</td>
                                <td>1095800</td>
                                <td>1224280</td>
                                <td>1334026</td>
                                <td>1441318</td>
                                <td>1593631</td>
                                <td>1706895</td>
                            </tr>
                ';

            $data["sd"] = '
                <p>Data Source</p>
                <ol type="A">
                    <li>Population
                        <ol>
                            <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                            <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                            <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
                        </ol>
                    </li>
                    <li>Total Land Area
                        <ol>
                            <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
                        </ol>
                    </li>
                    <li>Total Road Length
                        <ol>
                            <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
                        </ol>
                    </li>
                    <li>GDP per Capita (Current US$)
                        <ol>
                            <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
                        </ol>
                    </li>
                    <li>Purchasing Power Parity (PPP)
                        <ol>
                            <li><a href="#">not Available</a></li>
                        </ol>
                    </li>
                    <li>GDP per Capita, Purchasing Power Parity (PPP)
                        <ol>
                            <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
                        </ol>
                    </li>
                    <li>Public Charging Roadmap
                        <ol>
                            <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                            <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
                        </ol>
                    </li>
                </ol>
                ';
            return view('/landingpage/summary/nations/laos', $data);
        } else if ($nat == "vietnam") {
            $data["nat"] = $nat;   //negara
            $data["cat"] = $cat;
            $data["population"] = "99,474";
            $data["ttlland"] = "331,346";
            $data["totalRoad"] = "649,422";
            $data["GDP"] = "4,123";
            $data["PPP"] = "6,908";
            $data["GDPppp"] = "14,024";
            $data['tableData1'] = '
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
                <td>85</td>
                <td>7080</td>
                <td>34855</td>
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
                <td>110938</td>
                <td>80418</td>
                <td>96692</td>
                <td>147588</td>
                <td>235768</td>
                <td>308242</td>
                <td>279369</td>
                <td>340343</td>
                <td>400941</td>
                <td>394836</td>
                <td>383359</td>
                <td>455489</td>
                <td>343827</td>
            </tr>
            <tr style="height: 33.33%;">
                <td>TOTAL Sales</td>
                <td>110938</td>
                <td>80418</td>
                <td>96692</td>
                <td>147588</td>
                <td>235768</td>
                <td>308242</td>
                <td>279369</td>
                <td>340343</td>
                <td>400941</td>
                <td>394836</td>
                <td>383444</td>
                <td>462569</td>
                <td>378682</td>
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
                    <td>85</td>
                    <td>7165</td>
                    <td>42020</td>
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
                    <td>110938</td>
                    <td>191356</td>
                    <td>288048</td>
                    <td>435636</td>
                    <td>671404</td>
                    <td>979646</td>
                    <td>1259015</td>
                    <td>1599358</td>
                    <td>2000299</td>
                    <td>2395135</td>
                    <td>2778494</td>
                    <td>3233983</td>
                    <td>3577810</td>
                </tr>
                <tr style="height: 33.33%;">
                    <td>TOTAL STOCK</td>
                    <td>110938</td>
                    <td>191356</td>
                    <td>288048</td>
                    <td>435636</td>
                    <td>671404</td>
                    <td>979646</td>
                    <td>1259015</td>
                    <td>1599358</td>
                    <td>2,000,299</td>
                    <td>2395135</td>
                    <td>2778579</td>
                    <td>3241148</td>
                    <td>3619830</td>
                </tr>
    ';

            $data["sd"] = '
    <p>Data Source</p>
    <ol type="A">
        <li>Population
            <ol>
                <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
            </ol>
        </li>
        <li>Total Land Area
            <ol>
                <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
            </ol>
        </li>
        <li>Total Road Length
            <ol>
                <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
            </ol>
        </li>
        <li>GDP per Capita (Current US$)
            <ol>
                <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
            </ol>
        </li>
        <li>Purchasing Power Parity (PPP)
            <ol>
                <li><a href="#">not Available</a></li>
            </ol>
        </li>
        <li>GDP per Capita, Purchasing Power Parity (PPP)
            <ol>
                <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
            </ol>
        </li>
        <li>Public Charging Roadmap
            <ol>
                <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
            </ol>
        </li>
    </ol>
    ';
            return view('/landingpage/summary/nations/vietnam', $data);
        } else {
            echo "The nation Still empty";
        }
    }

    public function compare($cat)
    {
        $data["cat"] = $cat;
        $data["population"] = "99,474";
        $data["ttlland"] = "33,1345";
        $data["totalRoad"] = "649,422";
        $data["GDP"] = "4,123";
        $data["PPP"] = "6,908";
        $data["GDPppp"] = "14,024";
        $data['tableData1'] = '
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

        $data["sd"] = '
            <p>Data Source</p>
            <ol type="A">
                <li>Population
                    <ol>
                        <li><a href="https://www.nso.go.th/nsoweb/nso/ebook">https://www.nso.go.th/nsoweb/nso/ebook</a></li>
                        <li><a href="http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx">http://statbbi.nso.go.th/staticreport/page/sector/th/01.aspx</a></li>
                        <li><a href="https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH">https://app.bot.or.th/BTWS_STAT/statistics/BOTWEBSTAT.aspx?reportID=409&language=TH</a></li>
                    </ol>
                </li>
                <li>Total Land Area
                    <ol>
                        <li><a href="https://www.thailand.go.th/page/land-area">https://www.thailand.go.th/page/land-area</a></li>
                    </ol>
                </li>
                <li>Total Road Length
                    <ol>
                        <li><a href="https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf">https://www.otp.go.th/uploads/tiny_uploads/PDF/2566-11/25661106-TransportInfrastructureAnnualReport2022.pdf</a></li>
                    </ol>
                </li>
                <li>GDP per Capita (Current US$)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH">https://data.worldbank.org/indicator/NY.GDP.PCAP.CD?locations=TH</a></li>
                    </ol>
                </li>
                <li>Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="#">not Available</a></li>
                    </ol>
                </li>
                <li>GDP per Capita, Purchasing Power Parity (PPP)
                    <ol>
                        <li><a href="https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011">https://data.worldbank.org/indicator/NY.GDP.PCAP.PP.KD?locations=TH&start=2011</a></li>
                    </ol>
                </li>
                <li>Public Charging Roadmap
                    <ol>
                        <li><a href="https://evat.or.th/ev-information/evat-directory/index">https://evat.or.th/ev-information/evat-directory/index</a></li>
                        <li><a href="https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html">https://data.thaiauto.or.th/tai/dailynews-iframe/11375-%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B8%B5%E0%B8%8A%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%88%E0%B8%A3%E0%B8%96-ev-1,664-%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%97%E0%B8%A2-%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%8A%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B8%84%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%95%E0%B8%A5%E0%B8%B2%E0%B8%94.html</a></li>
                    </ol>
                </li>
            </ol>
            ';
        return view('/landingpage/summary/compare', $data);
    }

    public function about()
    {
        return view('landingpage/about');
    }

    public function chart()
    {
        return view('landingpage/chart');
    }
}
