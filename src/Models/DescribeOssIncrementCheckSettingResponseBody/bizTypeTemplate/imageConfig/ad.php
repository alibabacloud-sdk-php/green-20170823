<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\imageConfig;

use AlibabaCloud\Tea\Model;

class ad extends Model
{
    /**
     * @var string[]
     */
    public $categories;
    protected $_name = [
        'categories' => 'Categories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ad
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }

        return $model;
    }
}
