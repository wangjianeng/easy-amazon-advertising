<?php

namespace easyAmazonAdv\SponsoredDisplay\Groups;

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
     * getAdGroup.
     *
     * @param int $adGroupId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function getAdGroup(int $adGroupId)
    {
        return $this->httpGet('/sd/adGroups/extended/'.$adGroupId, [], false);
    }

    /**
     * getAdGroupEx.
     *
     * @param int $adGroupId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function getAdGroupEx(int $adGroupId)
    {
        return $this->httpGet('/sd/adGroups/extended/'.$adGroupId, [], false);
    }

    /**
     * createAdGroups.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function createAdGroups(array $params)
    {
        return $this->httpPost('/sd/adGroups', $params, [], false);
    }


    public function listCreatives(array $params = [])
    {
		return $this->httpGet('/sd/creatives/', $params, false);
	}
	
	public function createCreatives(array $params)
    {
        return $this->httpPost('/sd​/creatives', $params, [], false);
    }
	
	public function updateCreatives(array $params)
    {
        return $this->httpPut('/sd/creatives', $params, [], false);
    }
    /**
     * updateAdGroups.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function updateAdGroups(array $params)
    {
        return $this->httpPut('/sd/adGroups', $params, [], false);
    }


	public function updateAdGroup(array $params)
    {
        return $this->httpPut('/sd/adGroups', $params, [], false);
    }
    /**
     * archiveAdGroup.
     *
     * @param int $adGroupId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function archiveAdGroup(int $adGroupId)
    {
        return $this->httpDelete('/sd/adGroups/'.$adGroupId, [], [], false);
    }

    /**
     * listAdGroups.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function listAdGroups(array $params = [])
    {
        return $this->httpGet('/sd/adGroups/', $params, false);
    }

    /**
     * listAdGroupsEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function listAdGroupsEx(array $params = [])
    {
        return $this->httpGet('/sd/adGroups/extended', $params, false);
    }
}
