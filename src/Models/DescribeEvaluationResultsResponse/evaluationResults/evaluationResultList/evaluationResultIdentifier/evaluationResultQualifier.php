<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse\evaluationResults\evaluationResultList\evaluationResultIdentifier;

use AlibabaCloud\Tea\Model;

class evaluationResultQualifier extends Model
{
    /**
     * @var string
     */
    public $configRuleArn;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configRuleArn'  => 'ConfigRuleArn',
        'configRuleId'   => 'ConfigRuleId',
        'configRuleName' => 'ConfigRuleName',
        'resourceId'     => 'ResourceId',
        'resourceType'   => 'ResourceType',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('configRuleArn', $this->configRuleArn, true);
        Model::validateRequired('configRuleId', $this->configRuleId, true);
        Model::validateRequired('configRuleName', $this->configRuleName, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResultQualifier
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
