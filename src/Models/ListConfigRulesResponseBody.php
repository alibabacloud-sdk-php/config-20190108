<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponseBody\configRules;
use AlibabaCloud\Tea\Model;

class ListConfigRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configRules
     */
    public $configRules;
    protected $_name = [
        'requestId'   => 'RequestId',
        'configRules' => 'ConfigRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configRules) {
            $res['ConfigRules'] = null !== $this->configRules ? $this->configRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigRules'])) {
            $model->configRules = configRules::fromMap($map['ConfigRules']);
        }

        return $model;
    }
}
