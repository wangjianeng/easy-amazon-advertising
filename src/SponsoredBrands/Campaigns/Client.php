<?php

namespace easyAmazonAdv\SponsoredBrands\Campaigns;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{
    /**
     * listCampaigns.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function listCampaigns(array $params = [])
    {
        return $this->httpGet('/sb/campaigns', $params, false);
    }

    public function listCampaignsEx(array $params = [])
    {
        return $this->httpGet('/sb/campaigns', $params, false);
		//return $this->httpPost('/sb/v4/campaigns/list', $params, [], false, 'text/plain');
    }
	
	public function listCampaignsV4Ex(array $params = [])
    {
		return $this->httpPostSBV4('/sb/v4/campaigns/list', $params, [], false, 'text/plain');
    }

    /**
     * createCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function createCampaigns($params)
    {
        return $this->httpPost('/sb/campaigns', $params, [], false);
    }

    /**
     * updateCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function updateCampaigns($params)
    {
        return $this->httpPut('/sb/campaigns', $params, [], false);
    }

    /**
     * getCampaign.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function getCampaign(int $campaignId)
    {
        return $this->httpGet('/sb/campaigns/'.$campaignId, [], false);
    }

    public function getCampaignEx(int $campaignId)
    {
        return $this->httpGet('/sb/campaigns/'.$campaignId, [], false);
    }

    /**
     * archiveCampaign.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function archiveCampaign(int $campaignId)
    {
        return $this->httpDelete('/sb/campaigns/'.$campaignId, [], [], false);
    }
}
