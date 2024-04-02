<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditCallbackResponseBody extends Model
{
    /**
     * @var string
     */
    public $callback;

    /**
     * @var int
     */
    public $cryptType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $seed;
    protected $_name = [
        'callback'  => 'Callback',
        'cryptType' => 'CryptType',
        'requestId' => 'RequestId',
        'seed'      => 'Seed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->cryptType) {
            $res['CryptType'] = $this->cryptType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditCallbackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CryptType'])) {
            $model->cryptType = $map['CryptType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        return $model;
    }
}
