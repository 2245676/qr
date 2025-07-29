<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 校验错误提示语
    |--------------------------------------------------------------------------
    |
    | 以下内容为默认的校验错误提示信息。部分校验规则有多种格式，
    | 如size相关。你可以根据实际需求自由调整这些提示。
    |
    */

    'accepted' => ':attribute 必须被接受。',
    'active_url' => ':attribute 不是一个有效的URL地址。',
    'after' => ':attribute 必须是 :date 之后的日期。',
    'after_or_equal' => ':attribute 必须是 :date 当天或之后的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是数组。',
    'before' => ':attribute 必须是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必须是 :date 当天或之前的日期。',
    'between' => [
        'numeric' => ':attribute 必须介于 :min 和 :max 之间。',
        'file' => ':attribute 必须介于 :min 到 :max KB之间。',
        'string' => ':attribute 必须介于 :min 到 :max 个字符之间。',
        'array' => ':attribute 必须有 :min 到 :max 个项目。',
    ],
    'boolean' => ':attribute 字段必须为 true 或 false。',
    'confirmed' => ':attribute 两次输入不一致。',
    'date' => ':attribute 不是有效的日期。',
    'date_equals' => ':attribute 必须是等于 :date 的日期。',
    'date_format' => ':attribute 与格式 :format 不符。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 位数字。',
    'digits_between' => ':attribute 必须是 :min 到 :max 位数字。',
    'dimensions' => ':attribute 图片尺寸无效。',
    'distinct' => ':attribute 字段存在重复值。',
    'email' => ':attribute 必须是有效的邮箱地址。',
    'ends_with' => ':attribute 必须以以下之一结尾: :values。',
    'exists' => '所选 :attribute 无效。',
    'file' => ':attribute 必须是文件。',
    'filled' => ':attribute 字段必须有值。',
    'gt' => [
        'numeric' => ':attribute 必须大于 :value。',
        'file' => ':attribute 必须大于 :value KB。',
        'string' => ':attribute 必须多于 :value 个字符。',
        'array' => ':attribute 必须多于 :value 个项目。',
    ],
    'gte' => [
        'numeric' => ':attribute 必须大于或等于 :value。',
        'file' => ':attribute 必须大于或等于 :value KB。',
        'string' => ':attribute 必须不少于 :value 个字符。',
        'array' => ':attribute 必须有 :value 个项目或更多。',
    ],
    'image' => ':attribute 必须是图片。',
    'in' => '所选 :attribute 无效。',
    'in_array' => ':attribute 字段不存在于 :other。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是有效的IP地址。',
    'ipv4' => ':attribute 必须是有效的IPv4地址。',
    'ipv6' => ':attribute 必须是有效的IPv6地址。',
    'json' => ':attribute 必须是有效的JSON字符串。',
    'lt' => [
        'numeric' => ':attribute 必须小于 :value。',
        'file' => ':attribute 必须小于 :value KB。',
        'string' => ':attribute 必须少于 :value 个字符。',
        'array' => ':attribute 必须少于 :value 个项目。',
    ],
    'lte' => [
        'numeric' => ':attribute 必须小于或等于 :value。',
        'file' => ':attribute 必须小于或等于 :value KB。',
        'string' => ':attribute 必须少于或等于 :value 个字符。',
        'array' => ':attribute 不能多于 :value 个项目。',
    ],
    'max' => [
        'numeric' => ':attribute 不能大于 :max。',
        'file' => ':attribute 不能大于 :max KB。',
        'string' => ':attribute 不能多于 :max 个字符。',
        'array' => ':attribute 不能多于 :max 个项目。',
    ],
    'mimes' => ':attribute 必须是以下类型的文件: :values。',
    'mimetypes' => ':attribute 必须是以下类型的文件: :values。',
    'min' => [
        'numeric' => ':attribute 不能小于 :min。',
        'file' => ':attribute 不能小于 :min KB。',
        'string' => ':attribute 不能少于 :min 个字符。',
        'array' => ':attribute 不能少于 :min 个项目。',
    ],
    'multiple_of' => ':attribute 必须是 :value 的倍数。',
    'not_in' => '所选 :attribute 无效。',
    'not_regex' => ':attribute 格式无效。',
    'numeric' => ':attribute 必须为数字。',
    'password' => '密码不正确。',
    'present' => ':attribute 字段必须存在。',
    'regex' => ':attribute 格式无效。',
    'required' => ':attribute 字段为必填项。',
    'required_if' => '当 :other 为 :value 时，:attribute 字段为必填项。',
    'required_unless' => '除非 :other 在 :values 中，否则 :attribute 字段为必填项。',
    'required_with' => '当 :values 存在时，:attribute 字段为必填项。',
    'required_with_all' => '当 :values 存在时，:attribute 字段为必填项。',
    'required_without' => '当 :values 不存在时，:attribute 字段为必填项。',
    'required_without_all' => '当 :values 均不存在时，:attribute 字段为必填项。',
    'same' => ':attribute 和 :other 必须一致。',
    'size' => [
        'numeric' => ':attribute 必须是 :size。',
        'file' => ':attribute 必须为 :size KB。',
        'string' => ':attribute 必须为 :size 个字符。',
        'array' => ':attribute 必须包含 :size 个项目。',
    ],
    'starts_with' => ':attribute 必须以以下之一开头: :values。',
    'string' => ':attribute 必须是字符串。',
    'timezone' => ':attribute 必须是有效的时区。',
    'unique' => ':attribute 已被使用。',
    'uploaded' => ':attribute 上传失败。',
    'url' => ':attribute 格式无效。',
    'uuid' => ':attribute 必须是有效的UUID。',

    /*
    |--------------------------------------------------------------------------
    | 自定义校验提示语
    |--------------------------------------------------------------------------
    |
    | 你可以为属性使用“属性.规则”的命名方式，指定自定义的错误提示。
    | 这样可以快速为特定字段和规则定制提示信息。
    |
    */

    'custom' => [
        'order_price' => [
            'min' => '订单最低金额为 :min，请添加更多商品到购物车',
        ],
        'address_id' => [
            'required' => '请选择您的地址',
        ],
        'stripe_payment_error_action' => [
            'required' => '支付失败，需要额外操作后才能完成',
        ],
        'stripe_payment_failure' => [
            'required' => '支付失败，可能因余额不足等原因。请检查您的信息。',
        ],
        'paypal_payment_error_action' => [
            'required' => '支付失败，需要额外操作后才能完成',
        ],
        'general_payment_error_action' => [
            'required' => '支付失败。如为系统管理员，请检查支付服务商相关问题。',
        ],
        'link_payment_error_action' => [
            'required' => '未找到基于链接的支付方式',
        ],
        'paypal_payment_approval_missing' => [
            'required' => '无法获取Paypal支付链接。',
        ],
        'mollie_error_action' => [
            'required' => '获取支付链接时出错。',
        ],
        'paystack_error_action' => [
            'required' => '与PayStack通信出错',
        ],
        'dinein_table_id' => [
            'required' => '请选择您的餐桌',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 自定义校验属性
    |--------------------------------------------------------------------------
    |
    | 以下内容可将属性占位符替换为更友好的表达，例如将“email”
    | 显示为“邮箱地址”，使提示信息更易读。
    |
    */

    'attributes' => [],

];
