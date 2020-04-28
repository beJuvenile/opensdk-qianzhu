<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\QianZhu\Client;
use OpenSDK\QianZhu\Requests\KfcOrdersPagedQueryGetRequest;

class KfcOrdersPagedQueryGetRequestTest
{

    private $appKey = '10189';

    private $appSecret = '123456';

    private $url = 'https://live-test.qianzhu8.com';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->gatewayUrl = $this->url;
        $req = new KfcOrdersPagedQueryGetRequest();

        $req->setPageIndex(1);
        $req->setPageSize(10);
        $req->setUpdateTimeBeginTime("2020-04-20 00:00:00");
        $req->setUpdateTimeEndTime("2020-04-27 00:00:00");

        $c->execute($req);
        $response = $c->result();
        if(isset($response['status']) && $response['status'] == '0000'){

        }
        var_dump($response);exit;

    }

}

(new KfcOrdersPagedQueryGetRequestTest())();

