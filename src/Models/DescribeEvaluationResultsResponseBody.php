<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponseBody\evaluationResults;
use AlibabaCloud\Tea\Model;

class DescribeEvaluationResultsResponseBody extends Model
{
    /**
     * @var evaluationResults
     */
    public $evaluationResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'evaluationResults' => 'EvaluationResults',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationResults) {
            $res['EvaluationResults'] = null !== $this->evaluationResults ? $this->evaluationResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEvaluationResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationResults'])) {
            $model->evaluationResults = evaluationResults::fromMap($map['EvaluationResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
