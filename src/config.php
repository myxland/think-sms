<?php

/**
 * 短信配置信息
 */
return [

    /**
     * HTTP 请求的超时时间（秒）
     */
    'timeout'  => 5.0,

    /**
     * 默认发送配置
     */
    'default'  => [
        /** 网关调用策略，默认：顺序调用 */
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        /**
         * 默认可用的发送网关
         * 可同时使用多个网关一起发送，也可单独使用
         */
        'gateways' => [
            'yunpian',
            'aliyun',
            'alidayu',
        ],
    ],

    /** 可用的网关配置 */
    'gateways' => [
        'errorlog'     => [
            'file' => '/tmp/easy-sms.log',
        ],
        /**
         * 阿里云
         * 短信内容使用 template + data
         */
        'aliyun'       => [
            'access_key_id'     => '',
            'access_key_secret' => '',
            'sign_name'         => '',
        ],
        /**
         * 阿里大于
         * 短信内容使用 template + data
         */
        'alidayu'      => [
            'app_key'    => '',
            'app_secret' => '',
            'sign_name'  => '',
        ],
        /**
         * 云片
         * 短信内容使用 content
         */
        'yunpian'      => [
            'api_key' => '',
        ],
        /**
         * Submail
         * 短信内容使用 data
         */
        'submail'      => [
            'app_id'  => '',
            'app_key' => '',
            'project' => '',
        ],
        /**
         * 螺丝帽
         * 短信内容使用 content
         */
        'luosimao'     => [
            'api_key' => '',
        ],
        /**
         * 容联云通讯
         * 短信内容使用 template + data
         */
        'yuntongxun'   => [
            'app_id'         => '',
            'account_sid'    => '',
            'account_token'  => '',
            'is_sub_account' => false,
        ],
        /**
         * 互亿无线
         * 短信内容使用 content
         */
        'huyi'         => [
            'api_id'  => '',
            'api_key' => '',
        ],
        /**
         * 聚合数据
         * 短信内容使用 template + data
         */
        'juhe'         => [
            'app_key' => '',
        ],
        /**
         * SendCloud
         * 短信内容使用 template + data
         */
        'sendcloud'    => [
            'sms_user'  => '',
            'sms_key'   => '',
            'timestamp' => false, // 是否启用时间戳
        ],
        /**
         * 百度云
         * 短信内容使用 template + data
         */
        'baidu'        => [
            'ak'        => '',
            'sk'        => '',
            'invoke_id' => '',
            'domain'    => '',
        ],
        /**
         * 华信短信平台
         * 短信内容使用 content
         */
        'huaxin'       => [
            'user_id'  => '',
            'password' => '',
            'account'  => '',
            'ip'       => '',
            'ext_no'   => '',
        ],
        /**
         * 253云通讯（创蓝）
         * 短信内容使用 content
         */
        'chuanglan'    => [
            'username' => '',
            'password' => '',
        ],
        /**
         * 融云
         * 短信分为两大类，验证类和通知类短信。 发送验证类短信使用 template + data
         */
        'rongcloud'    => [
            'app_key'    => '',
            'app_secret' => '',
        ],
        /**
         * 天毅无线
         * 短信内容使用 content
         */
        'tianyiwuxian' => [
            'username' => '', //用户名
            'password' => '', //密码
            'gwid'     => '', //网关ID
        ],
        /**
         * twilio
         * 短信使用 content
         * 发送对象需要 使用+添加区号
         */
        'twilio'       => [
            'account_sid' => '', // sid
            'from'        => '', // 发送的号码 可以在控制台购买
            'token'       => '', // apitoken
        ],
    ],
];