# opensdk-qianzhu

### 介绍
本类库是对千猪开放平台API的封装  


#### 使用示例
~~~php
require 'vendor/autoload.php';

use OpenSDK\ITaoKe\Client;
use OpenSDK\ITaoKe\Requests\DdkCmsPromUrlGenerateRequest;

$c = new Client();
$c->appKey = 'You are appKey';
$c->appSecret = 'You are appSecret';
$req = new DdkCmsPromUrlGenerateRequest();
$req->setWeAppWebViewShortUrl(true);
$req->setWeAppWebViewUrl(true);
$req->setPidList(['xxxx_xxxxx']);
$c->setRequest($req);
$result = $c->execute();

var_dump($result);
~~~