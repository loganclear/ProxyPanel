<?php

return [
    'account'             => [
        'credit'           => '账户余额',
        'status'           => '账号状态',
        'level'            => '账号等级',
        'group'            => '所属分组',
        'speed_limit'      => '限速',
        'remain'           => '剩余流量',
        'time'             => '套餐时长',
        'last_login'       => '最近登录',
        'reset'            => '还有 :days 天重置',
        'connect_password' => '连接密码',
        'reason'           => [
            'normal'            => '账号一切正常',
            'expired'           => '您的账号套餐已过期',
            'overused'          => '本时段使用流量超过 <code>:data</code> GB触发系统限制<br/> <code id="countdown">:min</code> 后解除限制',
            'traffic_exhausted' => '您的账号[流量]消耗殆尽',
            'unknown'           => '未知原因，请开工单联系管理',
        ],
    ],
    'status'              => [
        'disabled'        => '停用',
        'enabled'         => '正常',
        'expired'         => '已过期',
        'limited'         => '限制',
        'unused'          => '未使用',
        'used'            => '已使用',
        'closed'          => '关 闭',
        'completed'       => '完 成',
        'waiting_payment' => '待付款',
        'using'           => '使用中',
        'waiting_confirm' => '待确认',
        'prepaid'         => '预支付',
        'applying'        => '申请中',
        'withdrawn'       => '已提现',
        'not_withdrawn'   => '未提现',
        'reply'           => '已回复',
        'pending'         => '待处理',
    ],
    'home'                => [
        'attendance'         => [
            'attribute' => '签 到',
            'disable'   => '系统未开启签到功能',
            'done'      => '已经签到过了，明天再来吧！',
            'success'   => '您获得了 :data 流量',
            'failed'    => '系统❌异常',
        ],
        'traffic_logs'       => '流量记录',
        'announcement'       => '公告',
        'wechat_push'        => '微信公告推送',
        'chat_group'         => '聊天群',
        'empty_announcement' => '暂无公告',
    ],
    'purchase_to_unlock'  => '购买服务后解锁',
    'purchase_required'   => '本功能对非付费用户禁用！请',
    'more'                => '更多',
    'attribute'           => [
        'node'    => '线路',
        'data'    => '流量',
        'ip'      => 'IP地址',
        'isp'     => '运营商',
        'address' => '地区',
    ],
    'purchase_promotion'  => '快 来 购 买 服 务 吧！',
    'menu'                => [
        'helps'           => '帮 助',
        'home'            => '主 页',
        'invites'         => '邀 请',
        'invoices'        => '账 单',
        'nodes'           => '线 路',
        'referrals'       => '推 广',
        'shop'            => '服 务',
        'profile'         => '设 置',
        'tickets'         => '工 单',
        'admin_dashboard' => '管 理',
    ],
    'contact'             => '联系方式',
    'oauth'               => [
        'bind_title' => '绑定社交账号',
        'not_bind'   => '尚未绑定',
        'bind'       => '绑 定',
        'rebind'     => '重新绑定',
        'unbind'     => '解 绑',
    ],
    'coupon'              => [
        'attribute'   => '优惠券',
        'voucher'     => '代金券',
        'recharge'    => '充值券码',
        'inactive'    => '优惠券尚未生效',
        'wait_active' => '活动将于:time生效，请耐心等待！',
        'limit'       => '使用条件未满足',
        'higher'      => '本券最低使用金额为 ¥:amount',
        'discount'    => '优惠',
    ],
    'error_response'      => '出现了错误，请稍后再试。',
    'invite'              => [
        'attribute'       => '邀请码',
        'total'           => '共 :num 个邀请码',
        'tips'            => '可生成<strong> :num </strong>枚邀请码，:days 日内有效',
        'logs'            => '邀请记录',
        'promotion'       => '通过您的邀请码注册并激活，你们双方都将获得<mark>:traffic</mark>流量奖励；当他们消费时，您将获得他们消费金额的<mark>:referral_percent%</mark>作为奖励。',
        'generate_failed' => '生成失败：已无邀请码生成名额',
    ],
    'reset_data'          => [
        ''          => '重置流量',
        'required'  => '需要',
        'cost_tips' => '本次重置流量将扣除余额 ¥:amount！',
        'lack'      => '余额不足，请充值余额',
        'logs'      => '用户自行重置流量',
        'success'   => '重置成功',
    ],
    'referral'            => [
        'link'       => '推广链接',
        'total'      => '合计返利 :amount 元（ :total 次），满 :money 元可以申请提现。',
        'amount'     => '消费金额',
        'commission' => '返利金额',
        'logs'       => '佣金记录',
        'failed'     => '申请失败',
        'success'    => '申请成功',
        'msg'        => [
            'account'     => '账号已过期，请先购买服务吧',
            'applied'     => '已存在申请，请等待之前的申请处理完',
            'unfulfilled' => '满:amount元才可以提现，继续努力吧',
            'wait'        => '请等待管理员审核',
            'error'       => '返利单建立失败，请稍后尝试或通知管理员',
        ],
    ],
    'inviter'             => '邀请者',
    'invitee'             => '受邀者',
    'consumer'            => '消费者',
    'unknown'             => '未知',
    'registered_at'       => '注册时间',
    'bought_at'           => '购买日期',
    'payment_method'      => '支付方式',
    'pay'                 => '支付',
    'input_coupon'        => '请输入充值券码',
    'recharge'            => '充值',
    'recharge_credit'     => '余额充值',
    'recharging'          => '充值中...',
    'withdraw_commission' => '结算佣金',
    'withdraw_at'         => '结算日期',
    'withdraw_logs'       => '提现记录',
    'withdraw'            => '提 现',
    'scan_qrcode'         => '请使用客户端扫描二维码',
    'shop'                => [
        'hot'           => '热 销',
        'limited'       => '限 购',
        'change_amount' => '充值金额',
        'buy'           => '购买',
        'description'   => '描述',
        'service'       => '服务',
        'pay_credit'    => '余额支付',
        'pay_online'    => '在线支付',
        'price'         => '价格',
        'quantity'      => '数量',
        'subtotal'      => '小计',
        'total'         => '合计',
        'conflict'      => '套餐存在冲突',
        'conflict_tips' => '<p>当前购买套餐将自动设置为 <code>预支付套餐</code><p><ol class="text-left"><li> 预支付套餐会在生效中的套餐失效后自动开通！</li><li> 您可以在支付后手动激活套餐！</li></ol>',
        'call4help'     => '请开工单通知客服',
    ],
    'service'             => [
        'node_count' => '<code>:num</code>条优质线路',
        'unlimited'  => '不限速',
    ],
    'payment'             => [
        'error'           => '充值余额不合规',
        'creating'        => '创建支付单中...',
        'redirect_stripe' => '转跳至Stripe支付界面...',
        'qrcode_tips'     => '请使用<strong class="red-600">:software</strong>扫描二维码',
        'close_tips'      => '请在<code>:minutes分钟</code>内完成支付，否则订单将会自动关闭',
        'mobile_tips'     => '<strong>手机用户</strong>：长按二维码 -> 保存图片 ->打开支付软件 -> 扫一扫 -> 选择相册 进行付款',
    ],
    'invoice'             => [
        'attribute'               => '订单',
        'id'                      => '订单号',
        'detail'                  => '消费记录',
        'amount'                  => '金额',
        'active_prepaid_question' => '是否提前激活预支付套餐？',
        'active_prepaid_tips'     => '套餐激活后：<br>先前套餐将直接失效！<br>过期日期将由本日重新开始计算！',
    ],
    'node'                => [
        'info'     => '配置信息',
        'setting'  => '代理设置',
        'unstable' => '线路波动/维护中',
        'rate'     => ':ratio倍流量消耗',
    ],
    'subscribe'           => [
        'baned'            => '您的订阅功能被禁用，请联系管理员恢复',
        'link'             => '订阅链接',
        'tips'             => '警告：该订阅链接仅限个人使用，请勿传播该链接，否则会导致您的账号流量使用情况异常触发自动封号机制。',
        'exchange_warning' => '更换订阅地址将导致:\n1.旧地址立即失效\n2.连接密码被更改',
        'ss_only'          => '只订阅SS/SSR',
        'v2ray_only'       => '只订阅V2Ray',
        'trojan_only'      => '只订阅Trojan',
        'error'            => '更换订阅地址异常',
    ],
    'ticket'              => [
        'attribute'         => '工单',
        'submit_tips'       => '确定提交工单？',
        'reply_confirm'     => '确定回复工单？',
        'close_tips'        => '您确定要关闭该工单吗？',
        'close'             => '关闭工单',
        'failed_closed'     => '错误：该工单已关闭',
        'reply_placeholder' => '说些什么呢？',
        'reply'             => '回复',
        'close_msg'         => '工单：ID:id用户已手动关闭',
        'placeholder'       => '请详细的描述您遇到的问题，或者需要我们帮助的地方',
        'title_placeholder' => '请详细的描述您遇到的问题，或者需要我们帮助的地方',
        'new'               => '创建新的工单',
        'working_hour'      => '客服工作时间',
        'online_hour'       => '在线时间',
        'service_tips'      => '本站有多种联系方式，请使用其中<code>一种</code>联系客服！ <br>重复请求，将会自动延迟处理时间',
        'error'             => '未知错误！请通知客服',
    ],
    'traffic_logs'        => [
        '24hours' => '今日流量使用情况',
        '30days'  => '本月流量使用情况',
        'tips'    => '提示：流量统计更新会有延迟。按天统计于次日更新，按小时统计于次小时更新。',
    ],
    'client'              => '客户端',
    'tutorials'           => '教程',
    'current_role'        => '当前身份',
];
