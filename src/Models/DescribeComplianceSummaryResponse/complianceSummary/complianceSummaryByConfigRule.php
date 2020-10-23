<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceSummaryResponse\complianceSummary;

use AlibabaCloud\Tea\Model;

class complianceSummaryByConfigRule extends Model
{
    /**
     * @var int
     */
    public $complianceSummaryTimestamp;

    /**
     * @var int
     */
    public $compliantCount;

    /**
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'complianceSummaryTimestamp' => 'ComplianceSummaryTimestamp',
        'compliantCount'             => 'CompliantCount',
        'nonCompliantCount'          => 'NonCompliantCount',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
        Model::validateRequired('complianceSummaryTimestamp', $this->complianceSummaryTimestamp, true);
        Model::validateRequired('compliantCount', $this->compliantCount, true);
        Model::validateRequired('nonCompliantCount', $this->nonCompliantCount, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceSummaryTimestamp) {
            $res['ComplianceSummaryTimestamp'] = $this->complianceSummaryTimestamp;
        }
        if (null !== $this->compliantCount) {
            $res['CompliantCount'] = $this->compliantCount;
        }
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceSummaryByConfigRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceSummaryTimestamp'])) {
            $model->complianceSummaryTimestamp = $map['ComplianceSummaryTimestamp'];
        }
        if (isset($map['CompliantCount'])) {
            $model->compliantCount = $map['CompliantCount'];
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
