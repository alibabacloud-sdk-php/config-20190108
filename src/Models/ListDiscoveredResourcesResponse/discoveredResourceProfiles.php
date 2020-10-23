<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesResponse\discoveredResourceProfiles\discoveredResourceProfileList;
use AlibabaCloud\Tea\Model;

class discoveredResourceProfiles extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var discoveredResourceProfileList[]
     */
    public $discoveredResourceProfileList;
    protected $_name = [
        'pageNumber'                    => 'PageNumber',
        'pageSize'                      => 'PageSize',
        'totalCount'                    => 'TotalCount',
        'discoveredResourceProfileList' => 'DiscoveredResourceProfileList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('discoveredResourceProfileList', $this->discoveredResourceProfileList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->discoveredResourceProfileList) {
            $res['DiscoveredResourceProfileList'] = [];
            if (null !== $this->discoveredResourceProfileList && \is_array($this->discoveredResourceProfileList)) {
                $n = 0;
                foreach ($this->discoveredResourceProfileList as $item) {
                    $res['DiscoveredResourceProfileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceProfiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DiscoveredResourceProfileList'])) {
            if (!empty($map['DiscoveredResourceProfileList'])) {
                $model->discoveredResourceProfileList = [];
                $n                                    = 0;
                foreach ($map['DiscoveredResourceProfileList'] as $item) {
                    $model->discoveredResourceProfileList[$n++] = null !== $item ? discoveredResourceProfileList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
