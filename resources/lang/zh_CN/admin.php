<?php

return [
    'dashboard'           => [
        'users'                   => '总用户',
        'available_users'         => '有效用户',
        'paid_users'              => '付费用户',
        'active_days_users'       => ':days 日内活跃用户',
        'inactive_days_users'     => ':days 日以上不活跃用户',
        'online_users'            => '当前在线',
        'expiring_users'          => '临近到期',
        'overuse_users'           => '流量大户（超过90%的用户）',
        'abnormal_users'          => '1小时内流量异常',
        'nodes'                   => '节点',
        'maintaining_nodes'       => '维护中的节点',
        'traffic_consumed'        => '记录的消耗流量',
        'traffic_days_consumed'   => ':days 日内消耗流量',
        'orders'                  => '总订单数',
        'online_orders'           => '在线支付订单数',
        'succeed_orders'          => '支付成功订单数',
        'credit'                  => '总余额',
        'withdrawing_commissions' => '待提现佣金',
        'withdrawn_commissions'   => '已支出佣金',
    ],
    'action'              => [
        'edit_item' => '编辑:attribute',
        'add_item'  => '添加:attribute',
    ],
    'confirm'             => [
        'delete'    => [0 => '确定删除:attribute【', 1 => '】? '],
        'continues' => '确定继续操作吗? ',
        'export'    => '确定全部导出? ',
    ],
    'user_dashboard'      => '个人中心',
    'menu'                => [
        'dashboard'        => '管理中心',
        'user'             => [
            'attribute'  => '用户系统',
            'list'       => '用户管理',
            'oauth'      => '用户授权',
            'group'      => '用戶分组',
            'credit_log' => '余额变动',
            'subscribe'  => '订阅管理',
        ],
        'rbac'             => [
            'attribute'  => '权限系统',
            'permission' => '权限列表',
            'role'       => '角色列表',
        ],
        'customer_service' => [
            'attribute' => '客服系统',
            'ticket'    => '服务工单',
            'article'   => '文章管理',
            'push'      => '消息推送',
            'mail'      => '邮件群发',
        ],
        'node'             => [
            'attribute' => '线路系统',
            'list'      => '线路管理',
            'auth'      => '线路授权',
            'cert'      => '证书列表',
        ],
        'rule'             => [
            'attribute' => '审计规则',
            'list'      => '规则列表',
            'group'     => '规则分组',
            'trigger'   => '触发记录',
        ],
        'shop'             => [
            'attribute' => '商品系统',
            'goods'     => '商品管理',
            'coupon'    => '卡券管理',
            'order'     => '商品订单',
        ],
        'promotion'        => [
            'attribute'   => '推广系统',
            'invite'      => '邀请管理',
            'withdraw'    => '提现管理',
            'rebate_flow' => '返利流水',
        ],
        'analysis'         => [
            'attribute'  => '分析报告',
            'accounting' => '流水账簿',
            'user_flow'  => '用户分析',
        ],
        'log'              => [
            'attribute'        => '日志系统',
            'traffic'          => '流量使用',
            'traffic_flow'     => '流量变动',
            'service_ban'      => '封禁记录',
            'online_logs'      => '在线记录',
            'online_monitor'   => '在线监控',
            'notify'           => '通知记录',
            'payment_callback' => '支付回调',
            'system'           => '系统日志',
        ],
        'tools'            => [
            'attribute' => '工具箱',
            'decompile' => '反解析',
            'convert'   => '格式转换',
            'import'    => '数据导入',
            'analysis'  => '日志分析',
        ],
        'setting'          => [
            'attribute'    => '设置',
            'email_suffix' => '邮箱后缀管理',
            'universal'    => '通用配置',
            'system'       => '系统设置',
        ],
    ],
    'user'                => [
        'massive'         => [
            'text'    => '用户生成数量',
            'button'  => '批量生成',
            'failed'  => '批量生成账号失败',
            'succeed' => '批量生成账号成功',
            'note'    => '后台批量生成用户',
        ],
        'proxy_info'      => '配置信息',
        'traffic_monitor' => '流量统计',
        'online_monitor'  => '在线巡查',
        'reset_traffic'   => '重置流量',
        'user_view'       => '用户视角',
        'connection_test' => '联网测试',
        'counts'          => '共 <code>:num</code> 个账号',
        'reset_confirm'   => [0 => '确定重置 【', 1 => '】 流量吗？'],
        'info'            => [
            'account'              => '账号信息',
            'proxy'                => '代理信息',
            'switch'               => '切换身份',
            'reset_date_hint'      => '账号流量下一个重置日期',
            'expired_date_hint'    => '留空默认为一年',
            'uuid_hint'            => 'V2Ray的账户ID',
            'recharge_placeholder' => '填入负值则会扣余额',
        ],
        'update_help'     => '更新成功，是否返回？',
        'proxies_config'  => '【:username】连接配置信息',
        'group'           => [
            'title'  => '用户分组控制<small>（同一节点可分配至多个分组，一个用户只能属于一个分组；对于用户可见/可用节点：先按分组后按等级）</small>',
            'name'   => '分组名称',
            'counts' => ' 共 <code>:num</code> 个分组',
        ],
    ],
    'zero_unlimited_hint' => '不设置/0，即为无限制',
    'node'                => [
        'traffic_monitor' => '流量统计',
        'refresh_geo'     => '刷新地理',
        'ping'            => '检测延迟',
        'connection_test' => '连通性检测',
        'counts'          => '共 <code> :num </code> 条线路',
        'reload_all'      => '重载【全部】后端',
        'refresh_geo_all' => '刷新【全部】节点地理信息',
        'reload_confirm'  => '确定重载节点?',
        'info'            => [
            'hint'                  => '<strong>注意：</strong> 添加节点后自动生成的<code>ID</code>，即为该节点部署ShadowsocksR Python版后端时<code>usermysql.json</code>中的<code>node_id</code>的值，同时也是部署V2Ray后端时的<code>nodeId</code>的值；',
            'basic'                 => '基础信息',
            'ddns_hint'             => '动态IP节点需要<a href="https://github.com/NewFuture/DDNS" target="_blank">配置DDNS</a>，对此类型节点，节点阻断功能会通过域名进行检测',
            'domain_placeholder'    => '服务器域名地址，填则优先取域名地址',
            'domain_hint'           => '系统设置中开启【DDNS模式】，域名将会自动与下方IP内容进行绑定操作！无需再前往域名注册商页面修改IP信息了哟',
            'extend'                => '扩展信息',
            'display'               => [
                'invisible' => '完全不可见',
                'node'      => '只显示于【:trans】页面',
                'sub'       => '只显示于【订 阅】',
                'all'       => '完全可见',
                'hint'      => '用户是否可以订阅/看到本节点',
            ],
            'ipv4_hint'             => '多IP使用“, ”分割，例：1.1.1.1, 8.8.8.8',
            'ipv6_hint'             => '多IP使用“, ”分割，例：1.1.1.1, 8.8.8.8',
            'ipv4_placeholder'      => '服务器IPv4地址',
            'ipv6_placeholder'      => '服务器IPv6地址，填写则用户可见，域名无效',
            'push_port_hint'        => '必填且防火墙需放行，否则将导致消息推送异常',
            'data_rate_hint'        => '举例：0.1用100M结算10M，5用100M结算500M',
            'level_hint'            => '等级：0-无等级，全部可见',
            'detection'             => [
                'tcp'  => '只检测TCP',
                'icmp' => '只检测ICMP',
                'all'  => '检测全部',
                'hint' => '每30~60分钟随机进行节点阻断检测',
            ],
            'obfs_param_hint'       => '混淆不为 [plain] 时可填入参数进行流量伪装；&#13;&#10;混淆为 [http_simple] 时，建议端口为 80；&#13;&#10;混淆为 [tls] 时，建议端口为 443；',
            'additional_ports_hint' => '如果启用请配置服务端的<span class="red-700"><a href="javascript:showTnc();">additional_ports</a></span>信息',
            'v2_method_hint'        => '使用WebSocket传输协议时不要使用none',
            'v2_net_hint'           => '使用WebSocket传输协议时请启用TLS',
            'v2_cover'              => [
                'none'      => '无伪装',
                'http'      => 'HTTP数据流',
                'srtp'      => '视频通话数据 (SRTP)',
                'utp'       => 'BT下载数据 (uTP)',
                'wechat'    => '微信视频通话',
                'dtls'      => 'DTLS1.2数据包',
                'wireguard' => 'WireGuard数据包',
            ],
            'v2_host_hint'          => '伪装类型为http时多个伪装域名逗号隔开，使用WebSocket传输协议时只允许单个',
            'v2_tls_provider_hint'  => '不同后端配置不同：',
            'single_hint'           => '推荐80或443，服务端需要配置 <br> 严格模式：用户的端口无法连接，只能通过以下指定的端口进行连接（<a href="javascript:showPortsOnlyConfig();">如何配置</a>）',
        ],
        'proxy_info'      => '*兼容 SS',
        'proxy_info_hint' => '如果兼容请在服务端配置协议和混淆时加上<span class="red-700">_compatible</span>',
        'reload'          => '重载后端',
        'auth'            => [
            'title'          => '节点授权列表<small>WEBAPI</small>',
            'deploy'         => [
                'title'          => '部署 :type_label 后端',
                'attribute'      => '部署后端',
                'command'        => '操作命令',
                'update'         => '更新：',
                'uninstall'      => '卸载：',
                'start'          => '启动：',
                'stop'           => '停止：',
                'status'         => '状态：',
                'recent_logs'    => '近期日志：',
                'real_time_logs' => '实时日志：',
                'restart'        => '重启：',
                'same'           => '同上',
                'trojan_hint'    => '请先<a href=":url" target="_blank">填写节点域名</a>并将域名解析到节点对应的IP上',
            ],
            'reset_auth'     => '重置密钥',
            'counts'         => '共 <code>:num</code> 条授权',
            'generating_all' => '确定生成所有节点的授权吗?',
        ],
        'cert'            => [
            'title'           => '域名证书列表<small>（V2Ray节点的伪装域名）</small>',
            'counts'          => '共 <code>:num</code> 个域名证书',
            'key_placeholder' => '域名证书的KEY值，允许为空，VNET-V2Ray后端支持自动签证书',
            'pem_placeholder' => '域名证书的PEM值，允许为空，VNET-V2Ray后端支持自动签证书',
        ],
    ],
    'hint'                => '提示',
    'oauth'               => [
        'title'  => '用户OAuth授权',
        'counts' => '共 <code>:num</code> 个授权',
    ],
    'select_all'          => '全 选',
    'clear'               => '清 空',
    'unselected_hint'     => '待分配规则，此处可搜索',
    'selected_hint'       => '已分配规则，此处可搜索',
    'clone'               => '克隆',
    'monitor'             => [
        'daily_chart'   => '每日流量图',
        'monthly_chart' => '月流量图',
        'node'          => '节点流量',
        'user'          => '用户流量',
        'hint'          => '<strong>提示：</strong> 如果无统计数据，请检查定时任务是否正常。',
    ],
    'tools'               => [
        'analysis'  => [
            'title'      => 'SSR日志分析<small>仅适用于单机单节点</small>',
            'req_url'    => '近期请求地址',
            'not_enough' => '访问记录不足15000条，无法分析数据',
        ],
        'convert'   => [
            'title'               => '格式转换 <small>Shadowsocks 转 ShadowsocksR</small>',
            'content_placeholder' => '请填入要转换的配置信息',
        ],
        'decompile' => [
            'title'               => '反解析<small>配置转换</small>',
            'attribute'           => '反解析',
            'content_placeholder' => '请填入要反解析的ShadowsocksR链接，一行一条',
        ],
    ],
    'ticket'              => [
        'title'         => '工单列表',
        'counts'        => '共 <code>:num</code> 个工单',
        'send_to'       => '请填入目标用户信息!',
        'user_info'     => '用户信息',
        'inviter_info'  => '邀请人信息',
        'close_confirm' => '确定关闭工单？',
        'error'         => '未知错误！请查看运行日志',
    ],
    'logs'                => [
        'subscribe'              => '订阅列表',
        'counts'                 => '共 <code>:num</code> 条记录',
        'rule'                   => [
            'clear_all'     => '清空记录',
            'title'         => '触发记录',
            'name'          => '触发规则',
            'reason'        => '触发原因',
            'created_at'    => '触发时间',
            'tag'           => '✅ 访问非规则允许内容',
            'clear_confirm' => '确定清空所有记录吗？',
        ],
        'order'                  => [
            'title'      => '订单列表',
            'is_expired' => '是否过期',
            'is_coupon'  => '是否使用优惠券',
        ],
        'user_traffic'           => [
            'title'       => '流量使用记录',
            'choose_node' => '选择节点',
        ],
        'user_data_modify_title' => '流量变动记录',
        'callback'               => '回调日志 <small>(在线支付)</small>',
        'notification'           => '邮件投递记录',
        'ip_monitor'             => '在线IP监控 <small>2分钟内的实时数据</small>',
        'user_ip'                => [
            'title'   => '用户在线IP列表 <small>最近10分钟</small>',
            'connect' => '连接IP',
        ],
        'ban'                    => [
            'title'           => '用户封禁记录',
            'time'            => '时长',
            'reason'          => '理由',
            'ban_time'        => '封禁时间',
            'last_connect_at' => '最后连接时间',
        ],
        'credit_title'           => '余额变动记录',
    ],
    'start_time'          => '开始区间',
    'end_time'            => '结束区间',
    'goods'               => [
        'title'         => '商品列表',
        'type'          => [
            'top_up'  => '充值',
            'package' => '流量包',
            'plan'    => '套餐',
        ],
        'info'          => [
            'type_hint'           => '套餐与账号有效期有关，流量包只扣可用流量，不影响有效期',
            'period_hint'         => '套餐流量会每N天重置',
            'limit_num_hint'      => '每个用户可以购买该商品次数，为 0 时代表不限购',
            'available_date_hint' => '到期后会自动从总流量扣减对应的流量',
            'desc_placeholder'    => '商品的简单描述',
            'list_placeholder'    => '商品的自定义列表添加',
            'list_hint'           => '每行内容请以<code>&lt;li&gt;</code> 开头<code>&lt;/li&gt;</code> 结尾',
        ],
        'status'        => [
            'yes' => '上架',
            'no'  => '下架',
        ],
        'sell_and_used' => '使用 / 销售',
        'counts'        => '共 <code>:num</code> 个商品',
    ],
    'sort_asc'            => '排序值越大排越前',
    'yes'                 => '是',
    'no'                  => '否',
    'rule'                => [
        'type'   => [
            'reg'      => '正则表达式',
            'domain'   => '域名',
            'ip'       => 'IP',
            'protocol' => '协议',
        ],
        'counts' => '共 <code>:num</code> 条审计规则',
        'title'  => '规则列表',
        'group'  => [
            'type'   => [
                'off' => '阻断',
                'on'  => '放行',
            ],
            'title'  => '规则分组',
            'counts' => '共 <code>:num</code> 个分组',
        ],
    ],
    'role'                => [
        'name_hint'        => '唯一标识名称，例如：Administrator',
        'description_hint' => '面板显示名称，例如：管理员',
        'title'            => '权限角色列表',
        'permissions_all'  => '全部权限',
        'counts'           => '共 <code>:num</code> 个权限角色',
    ],
    'report'              => [
        'monthly_accounting'  => '月流水账簿',
        'annually_accounting' => '年流水账簿',
        'historic_accounting' => '历史流水账簿',
        'current_month'       => ' 本 月 ',
        'last_month'          => ' 上 月',
        'current_year'        => ' 今 年 ',
        'last_year'           => ' 去 年 ',
        'hourly_traffic'      => '每时流量',
        'daily_traffic'       => '每天流量',
        'today'               => ' 本 日 ',
    ],
    'permission'          => [
        'title'            => '权限行为列表',
        'description_hint' => '填写描述，例：【A系统】编辑A',
        'name_hint'        => '填写路由名称，例：admin.permission.create,update',
        'counts'           => '共 <code>:num</code> 条权限行为',
    ],
    'marketing'           => [
        'email'         => [
            'title'      => '邮件群发列表',
            'group_send' => '群发邮件',
            'counts'     => '共 <code>:num</code> 条消息',
        ],
        'send_status'   => '发送状态',
        'send_time'     => '发送时间',
        'error_message' => '错误信息',
        'push'          => [
            'title'  => '推送消息列表',
            'send'   => '推送消息',
            'counts' => '共 <code>:num</code> 条推送消息',
        ],
    ],
    'creating'            => '正在添加...',
    'article'             => [
        'type'          => [
            'knowledge'    => '文章',
            'announcement' => '公告',
        ],
        'category_hint' => '同一类别将归类与同一文件夹下',
        'logo_hint'     => '推荐尺寸：100x75',
        'title'         => '文章列表',
        'counts'        => '共 <code>:num</code> 篇文章',
    ],
    'coupon'              => [
        'title'                   => '卡券列表',
        'name_hint'               => '会用于前端显示',
        'sn_hint'                 => '提供给用户使用卡券的卡券，留空则默认为8位随机码',
        'type'                    => [
            'voucher'  => '抵用券',
            'discount' => '折扣券',
            'charge'   => '充值券',
        ],
        'type_hint'               => '抵用：抵扣商品金额，折扣：商品百分比打折，充值：充值用户账号余额',
        'value'                   => '{1} ➖ :num|{2} :num 折|{3} ➕ :num',
        'value_hint'              => '范围为 1% ~ 99% ',
        'priority_hint'           => '同【使用券码】下，符合条件的高权重码将会被优先使用。最高为 255',
        'minimum_hint'            => '当支付金额超过 <strong>:num</strong> 值时，才能使用本优惠劵；',
        'used_hint'               => '符合条件的用户可以使用本券 <strong>:num</strong> 次；',
        'levels_hint'             => '用户等级在选定等级内，方可使用本券',
        'groups_hint'             => '选定的用户分组，方可使用本券',
        'users_placeholder'       => '输入用户ID, 再回车',
        'user_whitelist_hint'     => '涉及用户均可使用本券，留空为不使用此条件',
        'users_blacklist_hint'    => '涉及用户均不可使用本券，空为不使用此条件',
        'services_placeholder'    => '输入商品ID, 再回车',
        'services_whitelist_hint' => '涉及商品方可使用本券，留空为不使用此条件',
        'services_blacklist_hint' => '涉及商品不可使用本券，留空为不使用此条件',
        'newbie'                  => [
            'first_discount' => '首次用任意券',
            'first_order'    => '首单',
            'created_days'   => '创号',
        ],
        'created_days_hint'       => '且 创号 <code>:days</code> 天',
        'limit_hint'              => '本项各条件为 <strong>并且</strong> 关系，请自行搭配使用',
        'info_title'              => '卡券信息',
        'counts'                  => '共 <code>:num</code> 张优惠券',
        'discount'                => '优惠',
        'export_title'            => '卡券导出',
        'single_use'              => '一次性',
    ],
    'times'               => '次',
    'massive_export'      => '批量导出',
    'system_generate'     => '系统生成',
    'aff'                 => [
        'rebate_title'      => '返利流水记录',
        'counts'            => '共 <code>:num</code> 个申请',
        'title'             => '提现申请列表',
        'apply_counts'      => '共 <code>:num</code> 个申请',
        'referral'          => '推广返利',
        'commission_title'  => '提现申请详情',
        'commission_counts' => '本申请共涉及 <code>:num</code> 单',
    ],
    'setting'             => [
        'common'        => [
            'title'         => '通用配置',
            'set_default'   => '设为默认',
            'connect_nodes' => '关联节点数',
        ],
        'email'         => [
            'title'            => '邮箱过滤列表 <small>（用于屏蔽注册邮箱后缀）</small>',
            'tail'             => '邮箱后缀',
            'rule'             => '规则',
            'black'            => '黑名单',
            'white'            => '白名单',
            'tail_placeholder' => '请填入邮箱后缀',
        ],
        'system'        => [
            'title'     => '系统配置',
            'web'       => '网站常规',
            'account'   => '账号设置',
            'node'      => '节点设置',
            'extend'    => '拓展功能',
            'check_in'  => '签到系统',
            'promotion' => '推广系统',
            'notify'    => '通知系统',
            'auto_job'  => '自动任务',
            'other'     => 'LOGO|客服|统计',
            'payment'   => '支付系统',
            'menu'      => '菜单',
        ],
        'no_permission' => '您没有权限修改参数！',
    ],
    'system'              => [
        'account_expire_notification'   => '账号过期通知',
        'active_times'                  => '激活账号次数',
        'admin_invite_days'             => '管理员-邀请码有效期',
        'aff_salt'                      => '邀请链接 用户信息字符化',
        'alipay_qrcode'                 => '支付宝二维码',
        'AppStore_id'                   => '苹果账号',
        'AppStore_password'             => '苹果密码',
        'auto_release_port'             => '端口回收机制',
        'bark_key'                      => 'Bark设备号',
        'bitpay_secret',
        'captcha_key'                   => '验证码 Key',
        'captcha_secret'                => '验证码 Secret/ID',
        'codepay_id'                    => '码支付ID',
        'codepay_key'                   => '通信密钥',
        'codepay_url'                   => '请求URL',
        'data_anomaly_notification'     => '流量异常通知',
        'data_exhaust_notification'     => '流量耗尽通知',
        'ddns_key'                      => 'DNS服务商Key',
        'ddns_mode'                     => 'DDNS模式',
        'ddns_secret'                   => 'DNS服务商Secret',
        'default_days'                  => '初始有效期',
        'default_traffic'               => '初始流量',
        'detection_check_times'         => '阻断检测提醒',
        'dingTalk_access_token'         => '钉钉自定义机器人 Access Token',
        'dingTalk_secret'               => '钉钉自定义机器人 密钥',
        'epay_key'                      => '商户密钥',
        'epay_mch_id'                   => '商户ID',
        'epay_url'                      => '接口对接地址',
        'expire_days'                   => '过期警告阈值',
        'f2fpay_app_id'                 => '应用ID',
        'f2fpay_private_key'            => '应用私钥',
        'f2fpay_public_key'             => '支付宝公钥',
        'forbid_mode'                   => '禁止访问模式',
        'invite_num'                    => '可生成邀请码数',
        'is_activate_account'           => '激活账号',
        'is_AliPay'                     => '支付宝支付',
        'is_ban_status'                 => '过期自动封禁',
        'is_captcha'                    => '验证码模式',
        'is_checkin'                    => '签到加流量',
        'is_clear_log'                  => '自动清除日志',
        'is_custom_subscribe'           => '高级订阅',
        'is_email_filtering'            => '邮箱过滤机制',
        'is_forbid_robot'               => '阻止机器人访问',
        'is_free_code'                  => '免费邀请码',
        'is_invite_register'            => '邀请注册',
        'is_otherPay'                   => '特殊支付',
        'is_push_bear',
        'is_QQPay'                      => 'QQ钱包',
        'is_rand_port'                  => '随机端口',
        'is_register'                   => '用户注册',
        'is_subscribe_ban'              => '订阅异常自动封禁',
        'is_traffic_ban'                => '异常自动封号',
        'is_WeChatPay'                  => '微信支付',
        'iYuu_token'                    => 'IYUU令牌',
        'maintenance_content'           => '维护介绍内容',
        'maintenance_mode'              => '维护模式',
        'maintenance_time'              => '维护结束时间',
        'max_port',
        'max_rand_traffic',
        'min_port'                      => '端口范围',
        'min_rand_traffic'              => '流量范围',
        'node_blocked_notification'     => '节点阻断提醒',
        'node_daily_notification'       => '节点使用报告',
        'node_offline_notification'     => '节点离线提醒',
        'oauth_path'                    => '第三方登录平台',
        'offline_check_times'           => '离线提醒次数',
        'password_reset_notification'   => '重置密码',
        'paybeaver_app_id'              => 'App ID',
        'paybeaver_app_secret'          => 'App Secret',
        'payjs_key'                     => '通信密钥',
        'payjs_mch_id'                  => '商户号',
        'payment_confirm_notification'  => '人工支付确认通知',
        'payment_received_notification' => '支付成功通知',
        'paypal_app_id'                 => '应用ID',
        'paypal_certificate'            => '证书',
        'paypal_password'               => 'API密码',
        'paypal_secret'                 => '签名',
        'paypal_username'               => 'API用户名',
        'pushDeer_key'                  => 'PushDeer Key',
        'pushplus_token'                => 'PushPlus Token',
        'rand_subscribe'                => '随机订阅',
        'redirect_url'                  => '重定向地址',
        'referral_money'                => '提现限制',
        'referral_percent'              => '返利比例',
        'referral_status'               => '推广功能',
        'referral_traffic'              => '注册送流量',
        'referral_type'                 => '返利模式',
        'register_ip_limit'             => '同IP注册限制',
        'reset_password_times'          => '重置密码次数',
        'reset_traffic'                 => '流量自动重置',
        'server_chan_key'               => 'ServerChan SCKEY',
        'standard_currency'             => '本位货币',
        'stripe_public_key'             => 'Public Key',
        'stripe_secret_key'             => 'Secret Key',
        'stripe_signing_secret'         => 'WebHook Signing secret',
        'subject_name'                  => '自定义商品名称',
        'subscribe_ban_times'           => '订阅请求阈值
',
        'subscribe_domain'              => '节点订阅地址',
        'subscribe_max'                 => '订阅节点数',
        'telegram_token'                => 'Telegram Token',
        'tg_chat_token'                 => 'TG酱Token',
        'theadpay_key'                  => '商家密钥',
        'theadpay_mchid'                => '商家ID',
        'theadpay_url'                  => '接口地址',
        'ticket_closed_notification'    => '工单关闭通知',
        'ticket_created_notification'   => '新工单通知',
        'ticket_replied_notification'   => '工单回复通知',
        'traffic_ban_time'              => '封号时长',
        'traffic_ban_value'             => '流量异常阈值',
        'traffic_limit_time'            => '时间间隔',
        'traffic_warning_percent'       => '流量警告阈值',
        'trojan_license'                => 'Trojan授权',
        'username_type'                 => '账号类型',
        'user_invite_days'              => '用户-邀请码有效期',
        'v2ray_license'                 => 'V2Ray授权',
        'v2ray_tls_provider'            => 'V2Ray TLS配置',
        'webmaster_email'               => '管理员邮箱',
        'website_analytics'             => '统计代码',
        'website_callback_url'          => '通用支付回调地址',
        'website_customer_service'      => '客服代码',
        'website_home_logo'             => '首页LOGO',
        'website_logo'                  => '站内LOGO',
        'website_name'                  => '网站名称',
        'website_security_code'         => '网站安全码',
        'website_url'                   => '网站地址',
        'web_api_url'                   => '授权/后端访问域名',
        'wechat_aid'                    => '微信企业应用ID',
        'wechat_cid'                    => '微信企业ID',
        'wechat_encodingAESKey'         => '微信企业应用EncodingAESKey',
        'wechat_qrcode'                 => '微 信二维码',
        'wechat_secret'                 => '微信企业应用密钥',
        'wechat_token'                  => '微信企业应用TOKEN',

        'hint'           => [
            'account_expire_notification'   => '通知用户账号即将到期',
            'active_times'                  => '24小时内可以通过邮件激活账号次数',
            'admin_invite_days'             => '管理员生成邀请码的有效期',
            'aff_salt'                      => '留空时，邀请链接将显示用户ID；填入任意英文/数字 即可对用户链接ID进行加密',
            'alipay_qrcode',
            'AppStore_id'                   => 'iOS软件设置教程中使用的苹果账号',
            'AppStore_password'             => 'iOS软件设置教程中使用的苹果密码',
            'auto_release_port'             => '被封禁/过期 <code>'.config('tasks.release_port').'</code> 天的账号端口自动释放',
            'bark_key'                      => '推送消息到iOS设备，需要在iOS设备里装一个名为Bark的应用，取网址后的一长串字符串，启用Bark，请务必填入本值',
            'bitpay_secret',
            'captcha_key'                   => '浏览<a href="https://proxypanel.gitbook.io/wiki/captcha" target="_blank">设置指南</a>来设置',
            'captcha_secret',
            'codepay_id',
            'codepay_key',
            'codepay_url',
            'data_anomaly_notification'     => '1小时内流量超过异常阈值通知超管',
            'data_exhaust_notification'     => '通知用户流量即将耗尽',
            'ddns_key'                      => "浏览<a href='https://proxypanel.gitbook.io/wiki/ddns' target='_blank'>设置指南</a>来设置",
            'ddns_mode'                     => '添加/编辑/删除节点的【域名、ipv4、ipv6】时，自动更新对应内容至DNS服务商',
            'ddns_secret',
            'default_days'                  => '用户注册时默认账户有效期，为0即当天到期',
            'default_traffic'               => '用户注册时默认可用流量',
            'detection_check_times'         => '提醒N次后自动下线节点，为0/留空时不限制，不超过12',
            'dingTalk_access_token'         => '可以阅读<a href=https://open.dingtalk.com/document/group/custom-robot-access#title-jfe-yo9-jl2 target=_blank>钉钉手册</a>查阅步骤',
            'dingTalk_secret'               => '可选填！开启机器人[加签]就是必填项目！',
            'epay_key',
            'epay_mch_id',
            'epay_url',
            'expire_days'                   => '【账号过期通知】开始阈值，每日通知用户',
            'f2fpay_app_id'                 => '即：APPID',
            'f2fpay_private_key'            => '生成秘钥软件生成时，产生的应用秘钥',
            'f2fpay_public_key'             => '注意不是应用公钥！',
            'forbid_mode'                   => '依据IP对对应地区进行阻拦，非阻拦地区可正常访问',
            'invite_num'                    => '用户可以生成的邀请码数',
            'is_activate_account'           => '启用后用户需要通过邮件来激活账号',
            'is_AliPay',
            'is_ban_status'                 => '(慎重)封禁整个账号会重置账号的所有数据且会导致用户无法登录,不开启状态下只封禁用户代理',
            'is_captcha'                    => '启用后 登录/注册 需要进行验证码认证',
            'is_checkin'                    => '登录时将根据流量范围随机得到流量',
            'is_clear_log'                  => '（推荐）启用后自动清除无用日志',
            'is_custom_subscribe'           => '启用后，订阅信息顶部将显示过期时间、剩余流量（只支持个别客户端）',
            'is_email_filtering'            => '黑名单: 用户可使用任意黑名单外的邮箱注册；白名单:用户只能选择使用白名单中的邮箱后缀注册',
            'is_forbid_robot'               => '如果是机器人、爬虫、代理访问网站则会抛出404错误',
            'is_free_code'                  => '关闭后免费邀请码不可见',
            'is_invite_register',
            'is_otherPay',
            'is_push_bear',
            'is_QQPay',
            'is_rand_port'                  => '注册、添加用户时随机生成端口',
            'is_register'                   => '关闭后无法注册',
            'is_subscribe_ban'              => '启用后用户订阅链接请求超过设定阈值则自动封禁',
            'is_traffic_ban'                => '1小时内流量超过异常阈值则自动封号（仅禁用代理）',
            'is_WeChatPay',
            'iYuu_token'                    => '启用爱语飞飞，请务必填入本值（<a href=http://iyuu.cn target=_blank>申请 IYUU令牌</a>）',
            'maintenance_content'           => '自定义维护内容信息',
            'maintenance_mode'              => "启用后，用户访问转移至维护界面 | 管理员使用 <a href='javascript:(0)'>:url</a> 登录",
            'maintenance_time'              => '用于维护界面倒计时',
            'max_port',
            'max_rand_traffic',
            'min_port'                      => '端口范围：1000 - 65535',
            'min_rand_traffic',
            'node_blocked_notification'     => '每小时检测节点是否被阻断并提醒管理员',
            'node_daily_notification'       => '报告各节点流量昨日消耗情况',
            'node_offline_notification'     => '每10分钟检测节点离线并提醒管理员',
            'oauth_path'                    => '请在.ENV中添加设置，再在此处开启平台',
            'offline_check_times'           => '24小时内提醒n次后不再提醒',
            'password_reset_notification'   => '启用后用户可以重置密码',
            'paybeaver_app_id'              => '<a href="https://merchant.paybeaver.com/" target="_blank">商户中心</a> -> 开发者 -> App ID',
            'paybeaver_app_secret'          => '<a href="https://merchant.paybeaver.com/" target="_blank">商户中心</a> -> 开发者 -> App Secret',
            'payjs_key',
            'payjs_mch_id'                  => '在<a href="https://payjs.cn/dashboard/member" target="_blank">本界面</a>获取信息',
            'payment_confirm_notification'  => '用户使用人工支付后通知管理员处理订单',
            'payment_received_notification' => '用户支付订单后通知用户订单状态',
            'paypal_app_id',
            'paypal_certificate',
            'paypal_password',
            'paypal_secret',
            'paypal_username',
            'pushDeer_key'                  => '启用PushDeer，请务必填入本值（<a href=http://www.pushdeer.com/official.html
                                    target=_blank>申请 Push Key</a>）',
            'pushplus_token'                => '启用PushPlus，请务必填入本值（<a href=https://www.pushplus.plus/push1.html target=_blank>申请 Token</a>）',
            'rand_subscribe'                => '启用后，订阅时将随机返回节点信息，否则按节点排序返回',
            'redirect_url'                  => '触发审计规则时访问请求被阻断并重定向至该地址',
            'referral_money'                => '满多少元才可以申请提现',
            'referral_percent'              => '根据推广链接注册的账号每笔消费推广人可以分成的比例',
            'referral_status'               => '关闭后用户不可见，但是不影响其正常邀请返利',
            'referral_traffic'              => '根据推广链接、邀请码注册则赠送相应的流量',
            'referral_type'                 => '切换模式后旧数据不变，新的返利按新的模式计算',
            'register_ip_limit'             => '同IP在24小时内允许注册数量，为0/留空时不限制',
            'reset_password_times'          => '24小时内可以通过邮件重置密码次数',
            'reset_traffic'                 => '用户会按其购买套餐的日期自动重置可用流量',
            'server_chan_key'               => "启用ServerChan，请务必填入本值（<a href=https://sc.ftqq.com target=_blank>申请 SCKEY</a>）",
            'standard_currency'             => '网站中涉及金钱部分的默认货币',
            'stripe_public_key',
            'stripe_secret_key',
            'stripe_signing_secret',
            'subject_name'                  => '用于在支付渠道的商品标题显示',
            'subscribe_ban_times'           => '24小时内订阅链接请求次数限制',
            'subscribe_domain'              => '（推荐）防止面板域名被DNS投毒后无法正常订阅，需带http://或https://"',
            'subscribe_max'                 => '客户端订阅时取得几个节点，为0/留空时返回全部节点',
            'telegram_token'                => '找 <a href=https://t.me/BotFather target=_blank>@BotFather</a> 申请机器人获取TOKEN',
            'tg_chat_token'                 => '启用TG酱，请务必填入本值（<a href=https://t.me/realtgchat_bot target=_blank>申请 Token</a>）',
            'theadpay_key',
            'theadpay_mchid',
            'theadpay_url',
            'ticket_closed_notification'    => '工单关闭通知用户',
            'ticket_created_notification'   => '新工单通知管理/用户，取决于谁创建了新工单',
            'ticket_replied_notification'   => '工单回复通知对方',
            'traffic_ban_time'              => '触发流量异常导致用户被封禁的时长，到期后自动解封',
            'traffic_ban_value'             => '1小时内超过该值，则触发自动封号',
            'traffic_limit_time'            => '间隔多久才可以再次签到',
            'traffic_warning_percent'       => '【流量耗尽通知】开始阈值，每日通知用户',
            'trojan_license',
            'username_type'                 => '规范站点用户账号的类型，默认为电子邮箱',
            'user_invite_days'              => '用户自行生成邀请的有效期',
            'v2ray_license',
            'v2ray_tls_provider'            => '后端自动签发/载入TLS证书时用（节点的设置值优先级高于此处）',
            'webmaster_email'               => '错误提示时会提供管理员邮箱作为联系方式',
            'website_analytics'             => '统计JS',
            'website_callback_url'          => '防止因为网站域名被DNS投毒后导致支付无法正常回调，需带http://或https://',
            'website_customer_service'      => '客服JS',
            'website_home_logo',
            'website_logo',
            'website_name'                  => '发邮件时展示',
            'website_security_code'         => '非空时必须通过<a href=":url" target="_blank">安全入口</a>加上安全码才可访问',
            'website_url'                   => '生成重置密码、在线支付必备',
            'web_api_url'                   => '例：https://demo.proxypanel.cf',
            'wechat_aid'                    => '在<a href=https://work.weixin.qq.com/wework_admin/frame#apps arget=_blank>应用管理</a>自建中创建应用 - AgentId',
            'wechat_cid'                    => '获取<a href=https://work.weixin.qq.com/wework_admin/frame#profile target=_blank>我的企业</a>中的企业ID',
            'wechat_encodingAESKey'         => '应用管理->应用->设置API接收->EncodingAESKey',
            'wechat_qrcode',
            'wechat_secret'                 => '应用的Secret（可能需要下载企业微信才能查看）',
            'wechat_token'                  => '应用管理->应用->设置API接收->TOKEN，URL设置：:url',
        ],
        'placeholder'    => [
            'default_url'           => '默认为 :url',
            'server_chan_key'       => '填入ServerChan的SCKEY->再点击更新',
            'pushDeer_key'          => '填入PushDeer的Push Key -> 再点击更新',
            'iYuu_token'            => '填入爱语飞飞的IYUU令牌 -> 再点击更新',
            'bark_key'              => '填入Bark的设备号 -> 再点击更新',
            'telegram_token'        => '填入Telegram的 Token -> 再点击更新',
            'pushplus_token'        => '请到ServerChan申请',
            'dingTalk_access_token' => '自定义机器人的WebHook中的access_token',
            'dingTalk_secret'       => '自定义机器人加签后出现的的密钥',
            'wechat_aid'            => '应用的AgentId',
            'wechat_cid'            => '填入微信企业ID -> 再点击更新',
            'wechat_secret'         => '应用的Secret',
            'tg_chat_token'         => '请到Telegram申请',
            'codepay_url'           => 'https://codepay.fateqq.com/creat_order/?',
        ],
        'payment'        => [
            'attribute' => '支付设置',
            'channel'   => [
                'alipay'    => '支付宝F2F',
                'codepay'   => '码支付',
                'epay'      => '易支付',
                'payjs'     => 'PayJs',
                'paypal'    => 'PayPal',
                'stripe'    => 'Stripe',
                'paybeaver' => '海狸支付',
                'theadpay'  => '平头哥支付',
                'manual'    => '人工支付',
            ],
            'hint'      => [
                'alipay'    => '本功能需要<a href="https://open.alipay.com/platform/appManage.htm?#/create/" target="_blank">蚂蚁金服开放平台</a>申请权限及应用',
                'codepay'   => '请到 <a href="https://codepay.fateqq.com/i/377289" target="_blank">码支付</a>申请账号，然后下载登录其挂机软件',
                'payjs'     => '请到<a href="https://payjs.cn/ref/zgxjnb" target="_blank">PayJs</a> 申请账号',
                'paypal'    => '使用商家账号登录<a href="https://www.paypal.com/businessprofile/mytools/apiaccess/firstparty" target="_blank">API凭证申请页</a>, 同意并获取设置信息',
                'paybeaver' => '请到<a href="https://merchant.paybeaver.com/?aff_code=iK4GNuX8" target="_blank">海狸支付 PayBeaver</a>申请账号',
                'theadpay'  => '请到<a href="https://theadpay.com/" target="_blank">平头哥支付 THeadPay</a>申请账号',
                'manual'    => '设置后会自动开启对应显示',
            ],
        ],
        'notification'   => [
            'channel' => [
                'telegram'   => 'TG电报',
                'wechat'     => '微信企业',
                'dingtalk'   => '钉钉',
                'email'      => '邮箱',
                'bark'       => 'Bark',
                'serverchan' => 'ServerChan',
                'pushdeer'   => 'PushDeer',
                'pushplus'   => 'PushPlus',
                'iyuu'       => '爱语飞飞',
                'tg_chat'    => 'TG酱',
                'site'       => '站内通知',
            ],
        ],
        'forbid'         => [
            'mainland' => '阻拦大陆',
            'china'    => '阻拦中国',
            'oversea'  => '阻拦海外',
        ],
        'username'       => [
            'email'  => '电子邮箱',
            'mobile' => '手机号码',
            'any'    => '任意用户名',
        ],
        'active_account' => [
            'before' => '注册前激活',
            'after'  => '注册后激活',
        ],
        'ddns'           => [
            'namesilo'   => 'Namesilo',
            'aliyun'     => '阿里云(国际&国内)',
            'dnspod'     => 'DNSPod',
            'cloudflare' => 'CloudFlare',
        ],
        'captcha'        => [
            'standard'  => '普通验证码',
            'geetest'   => '极 验',
            'recaptcha' => 'Google reCaptcha',
            'hcaptcha'  => 'hCaptcha',
        ],
        'referral'       => [
            'once' => '首购返利',
            'loop' => '循环返利',
        ],
    ],
    'set_to'              => '置 :attribute',
    'minute'              => '分钟',
    'query'               => '查 询',
    'optional'            => '可选',
    'require'             => '必须',
];