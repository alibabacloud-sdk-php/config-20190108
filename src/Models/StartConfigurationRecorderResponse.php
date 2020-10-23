<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\StartConfigurationRecorderResponse\configurationRecorder;
use AlibabaCloud\Tea\Model;

class StartConfigurationRecorderResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configurationRecorder
     */
    public $configurationRecorder;
    protected $_name = [
        'requestId'             => 'RequestId',
        'configurationRecorder' => 'ConfigurationRecorder',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('configurationRecorder', $this->configurationRecorder, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configurationRecorder) {
            $res['ConfigurationRecorder'] = null !== $this->configurationRecorder ? $this->configurationRecorder->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartConfigurationRecorderResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigurationRecorder'])) {
            $model->configurationRecorder = configurationRecorder::fromMap($map['ConfigurationRecorder']);
        }

        return $model;
    }
}
