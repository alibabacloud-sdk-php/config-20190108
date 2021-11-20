<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateDiscoveredResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $complianceType;

    /**
     * @description 资源夹ID
     *
     * @var string
     */
    public $folderId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regions;

    /**
     * @var int
     */
    public $resourceDeleted;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'aggregatorId'    => 'AggregatorId',
        'complianceType'  => 'ComplianceType',
        'folderId'        => 'FolderId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regions'         => 'Regions',
        'resourceDeleted' => 'ResourceDeleted',
        'resourceId'      => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceTypes'   => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateDiscoveredResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Regions'])) {
            $model->regions = $map['Regions'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
