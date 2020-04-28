# opensdk-qianzhu

### 介绍
本类库是对千猪开放平台API的封装  


#### 使用示例
~~~php
require 'vendor/autoload.php';

use OpenSDK\QianZhu\Client;
use OpenSDK\QianZhu\Requests\KfcOrdersPagedQueryGetRequest;

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
~~~