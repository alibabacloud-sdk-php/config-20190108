<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceDetail extends Model
{
    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCreationTime;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceDeleted;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceStatus;
    protected $_name = [
        'availabilityZone'     => 'AvailabilityZone',
        'resourceType'         => 'ResourceType',
        'configuration'        => 'Configuration',
        'region'               => 'Region',
        'resourceCreationTime' => 'ResourceCreationTime',
        'tags'                 => 'Tags',
        'accountId'            => 'AccountId',
        'resourceId'           => 'ResourceId',
        'resourceDeleted'      => 'ResourceDeleted',
        'resourceName'         => 'ResourceName',
        'resourceStatus'       => 'ResourceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCreationTime) {
            $res['ResourceCreationTime'] = $this->resourceCreationTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceDeleted) {
            $res['ResourceDeleted'] = $this->resourceDeleted;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCreationTime'])) {
            $model->resourceCreationTime = $map['ResourceCreationTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceDeleted'])) {
            $model->resourceDeleted = $map['ResourceDeleted'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }

        return $model;
    }
}
