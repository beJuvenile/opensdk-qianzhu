<?php
/**
 * API: qianzhu.kfcOrders.pagedQuery.get 分页查询肯德基订单
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\QianZhu\Requests;
use OpenSDK\QianZhu\Interfaces\Request;

class KfcOrdersPagedQueryGetRequest implements Request
{

    public $requestType = 'post';

    public $dataType = 'json';

    //分页页码，从1开始
    public $pageIndex = 1;

    //每页大小
    public $pageSize = 20;

    //最后更新时间开始时间
    public $updateTimeBeginTime;

    //最后更新时间结束时间
    public $updateTimeEndTime;

    public $apiParas = array();

    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
        $this->apiParas["pageIndex"] = $pageIndex;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function setUpdateTimeBeginTime($updateTimeBeginTime)
    {
        $this->updateTimeBeginTime = $updateTimeBeginTime;
        $this->apiParas["updateTimeBeginTime"] = $updateTimeBeginTime;
    }

    public function setUpdateTimeEndTime($updateTimeEndTime)
    {
        $this->updateTimeEndTime = $updateTimeEndTime;
        $this->apiParas["updateTimeEndTime"] = $updateTimeEndTime;
    }

	public function getApiMethodName()
	{
		return '/openApi/v1/kfcOrders/pagedQuery';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

    /**
     * 解析结果
     *
     * @param   $response   array
     * @return  array
     */
    public function getResult($response)
    {
        return $response;
    }

}
