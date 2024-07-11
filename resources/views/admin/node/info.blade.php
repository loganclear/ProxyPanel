@extends('admin.layouts')
@section('css')
    <link href="/assets/global/vendor/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="/assets/global/vendor/switchery/switchery.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none
        }
    </style>
@endsection
@section('content')
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="panel-title">
                    {{ isset($node) ? trans('admin.action.edit_item', ['attribute' => trans('model.node.attribute')]) : trans('admin.action.add_item', ['attribute' => trans('model.node.attribute')]) }}
                </h2>
            </div>
            <div class="alert alert-info" role="alert">
                <button class="close" data-dismiss="alert" aria-label="{{ trans('common.close') }}">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">{{ trans('common.close') }}</span>
                </button>
                {!! trans('admin.node.info.hint') !!}
            </div>
            <div class="panel-body">
                <form class="form-horizontal" onsubmit="return Submit()">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="example-wrap">
                                <h4 class="example-title">{{ trans('admin.node.info.basic') }}</h4>
                                <div class="example">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="is_ddns">{{ trans('model.node.ddns') }}</label>
                                        <div class="col-md-9">
                                            <input id="is_ddns" name="is_ddns" data-plugin="switchery" type="checkbox" onchange="switchSetting('is_ddns')">
                                        </div>
                                        <div class="text-help offset-md-3">
                                            {!! trans('admin.node.info.ddns_hint') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="name"> {{ trans('model.node.name') }} </label>
                                        <input class="form-control col-md-4" id="name" name="name" type="text" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="server"> {{ trans('model.node.domain') }} </label>
                                        <input class="form-control col-md-4" id="server" name="server" type="text"
                                               placeholder="{{ trans('admin.node.info.domain_placeholder') }}">
                                        <span class="text-help offset-md-3">{{ trans('admin.node.info.domain_hint') }}</span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="ip"> {{ trans('model.node.ipv4') }} </label>
                                        <input class="form-control col-md-4" id="ip" name="ip" type="text"
                                               placeholder="{{ trans('admin.node.info.ipv4_placeholder') }}" required>
                                        <span class="text-help offset-md-3">{{ trans('admin.node.info.ipv4_hint') }}</span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="ipv6"> {{ trans('model.node.ipv6') }} </label>
                                        <input class="form-control col-md-4" id="ipv6" name="ipv6" type="text"
                                               placeholder="{{ trans('admin.node.info.ipv6_placeholder') }}">
                                        <span class="text-help offset-md-3">{{ trans('admin.node.info.ipv6_hint') }}</span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="push_port"> {{ trans('model.node.push_port') }} </label>
                                        <input class="form-control col-md-4" id="push_port" name="push_port" type="number" value="1080">
                                        <span class="text-help offset-md-3">{{ trans('admin.node.info.push_port_hint') }}</span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="traffic_rate"> {{ trans('model.node.data_rate') }} </label>
                                        <input class="form-control col-md-4" id="traffic_rate" name="traffic_rate" type="number" value="1.0" step="0.01"
                                               required>
                                        <div class="text-help offset-md-3">{{ trans('admin.node.info.data_rate_hint') }}</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="level">{{ trans('model.common.level') }}</label>
                                        <select class="col-md-5 form-control show-tick" id="level" name="level" data-plugin="selectpicker"
                                                data-style="btn-outline btn-primary">
                                            @foreach ($levels as $level)
                                                <option value="{{ $level->level }}">{{ $level->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-help offset-md-3"> {{ trans('admin.node.info.level_hint') }}</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="ruleGroup">{{ trans('model.node.rule_group') }}</label>
                                        <select class="col-md-5 form-control show-tick" id="ruleGroup" name="ruleGroup" data-plugin="selectpicker"
                                                data-style="btn-outline btn-primary" title="{{ trans('common.none') }}">
                                            @foreach ($ruleGroups as $ruleGroup)
                                                <option value="{{ $ruleGroup->id }}">{{ $ruleGroup->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="speed_limit">{{ trans('model.node.traffic_limit') }}</label>
                                        <div class="col-md-4 input-group p-0">
                                            <input class="form-control" id="speed_limit" name="speed_limit" type="number" value="1000" required>
                                            <span class="input-group-text">Mbps</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="client_limit">{{ trans('model.node.client_limit') }}</label>
                                        <input class="form-control col-md-4" id="client_limit" name="client_limit" type="number" value="1000" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="labels">{{ trans('model.node.label') }}</label>
                                        <select class="col-md-5 form-control show-tick" id="labels" name="labels" data-plugin="selectpicker"
                                                data-style="btn-outline btn-primary" multiple>
                                            @foreach ($labels as $label)
                                                <option value="{{ $label->id }}">{{ $label->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="country_code"> {{ trans('model.node.country') }} </label>
                                        <select class="col-md-5 form-control" id="country_code" name="country_code" data-plugin="selectpicker"
                                                data-style="btn-outline btn-primary">
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->code }}">{{ $country->code . ' - ' . $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="description"> {{ trans('model.common.description') }} </label>
                                        <input class="form-control col-md-6" id="description" name="description" type="text">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="sort">{{ trans('model.common.sort') }}</label>
                                        <input class="form-control col-md-4" id="sort" name="sort" type="text" value="1" required />
                                        <div class="text-help offset-md-3"> {{ trans('admin.sort_asc') }}</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="is_udp">{{ trans('model.node.udp') }}</label>
                                        <div class="col-md-9">
                                            <input id="is_udp" name="is_udp" data-plugin="switchery" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="status">{{ trans('common.status.attribute') }}</label>
                                        <div class="col-md-9">
                                            <input id="status" name="status" data-plugin="switchery" type="checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="example-wrap">
                                <h4 class="example-title">{{ trans('admin.node.info.extend') }}</h4>
                                <div class="example">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="is_display">{{ trans('model.node.display') }}</label>
                                        <ul class="col-md-9 list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="invisible" name="is_display" type="radio" value="0" checked />
                                                    <label for="invisible">{{ trans('admin.node.info.display.invisible') }}</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="page_only" name="is_display" type="radio" value="1" />
                                                    <label for="page_only">{{ trans('admin.node.info.display.node') }}</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="sub_only" name="is_display" type="radio" value="2" />
                                                    <label for="sub_only">{{ trans('admin.node.info.display.sub') }}</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="visible" name="is_display" type="radio" value="3" checked />
                                                    <label for="visible">{{ trans('admin.node.info.display.all') }}</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text-help offset-md-3"> {{ trans('admin.node.info.display.hint') }}</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="detection_type">{{ trans('model.node.detection') }}</label>
                                        <ul class="col-md-9 list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="detect_disable" name="detection_type" type="radio" value="0" checked />
                                                    <label for="detect_disable">{{ trans('common.close') }}</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="detect_tcp" name="detection_type" type="radio" value="1" />
                                                    <label for="detect_tcp">{{ trans('admin.node.info.detection.tcp') }}</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="detect_icmp" name="detection_type" type="radio" value="2" />
                                                    <label for="detect_icmp">{{ trans('admin.node.info.detection.icmp') }}</label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="radio-custom radio-primary">
                                                    <input id="detect_all" name="detection_type" type="radio" value="3" />
                                                    <label for="detect_all">{{ trans('admin.node.info.detection.all') }}</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text-help offset-md-3"> {{ trans('admin.node.info.detection.hint') }}</div>
                                    </div>
                                    <!-- 中转 设置部分 -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="relay_node_id">{{ trans('model.node.transfer') }}</label>
                                        <select class="col-md-5 form-control show-tick" id="relay_node_id" name="relay_node_id" data-plugin="selectpicker"
                                                data-style="btn-outline btn-primary" title="{{ trans('common.none') }}">
                                            @foreach ($nodes as $name => $id)
                                                <option value="{{ $id }}">{{ $id }} - {{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <hr />
                                    <!-- 代理 设置部分 -->
                                    <div class="proxy-config">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="type">{{ trans('model.common.type') }}</label>
                                            <ul class="col-md-9 list-unstyled list-inline">
                                                <li class="list-inline-item">
                                                    <div class="radio-custom radio-primary">
                                                        <input id="shadowsocks" name="type" type="radio" value="0">
                                                        <label for="shadowsocks">Shadowsocks</label>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="radio-custom radio-primary">
                                                        <input id="shadowsocksR" name="type" type="radio" value="1">
                                                        <label for="shadowsocksR">ShadowsocksR</label>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="radio-custom radio-primary">
                                                        <input id="v2ray" name="type" type="radio" value="2">
                                                        <label for="v2ray">V2Ray</label>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="radio-custom radio-primary">
                                                        <input id="trojan" name="type" type="radio" value="3">
                                                        <label for="trojan">Trojan</label>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="radio-custom radio-primary">
                                                        <input id="vnet" name="type" type="radio" value="4">
                                                        <label for="vnet">VNET</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <!-- SS/SSR 设置部分 -->
                                        <div class="ss-setting">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="method">{{ trans('model.node.method') }}</label>
                                                <select class="col-md-5 form-control" id="method" name="method" data-plugin="selectpicker"
                                                        data-style="btn-outline btn-primary">
                                                    @foreach (Helpers::methodList() as $method)
                                                        <option value="{{ $method->name }}" @if (!isset($node) && $method->is_default) selected @endif>{{ $method->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="ssr-setting">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="protocol">{{ trans('model.node.protocol') }}</label>
                                                    <select class="col-md-5 form-control" id="protocol" name="protocol" data-plugin="selectpicker"
                                                            data-style="btn-outline btn-primary">
                                                        @foreach (Helpers::protocolList() as $protocol)
                                                            <option value="{{ $protocol->name }}" @if (!isset($node) && $protocol->is_default) selected @endif>
                                                                {{ $protocol->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="protocol_param"> {{ trans('model.node.protocol_param') }}
                                                    </label>
                                                    <input class="form-control col-md-4" id="protocol_param" name="protocol_param" type="text">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="obfs">{{ trans('model.node.obfs') }}</label>
                                                    <select class="col-md-5 form-control" id="obfs" name="obfs" data-plugin="selectpicker"
                                                            data-style="btn-outline btn-primary">
                                                        @foreach (Helpers::obfsList() as $obfs)
                                                            <option value="{{ $obfs->name }}" @if (!isset($node) && $obfs->is_default) selected @endif>
                                                                {{ $obfs->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group row obfs_param">
                                                    <label class="col-md-3 col-form-label" for="obfs_param"> {{ trans('model.node.obfs_param') }} </label>
                                                    <textarea class="form-control col-md-8" id="obfs_param" name="obfs_param" rows="5" placeholder="{!! trans('admin.node.info.obfs_param_hint') !!}"></textarea>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">{{ trans('admin.node.proxy_info') }}</label>
                                                    <div class="text-help col-md-9">
                                                        {!! trans('admin.node.proxy_info_hint') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="single">{{ trans('model.node.single') }}</label>
                                                <div class="col-md-9">
                                                    <input id="single" name="single" data-plugin="switchery" type="checkbox"
                                                           onchange="switchSetting('single')">
                                                </div>
                                                <div class="text-help offset-md-3">
                                                    {!! trans('admin.node.info.additional_ports_hint') !!}
                                                </div>
                                            </div>
                                            <div class="single-setting">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="single_port">{{ trans('model.node.service_port') }}</label>
                                                    <input class="form-control col-md-4" id="single_port" name="port" type="number" value="443"
                                                           hidden />
                                                    <span class="text-help offset-md-3"> {!! trans('admin.node.info.single_hint') !!}</span>
                                                </div>
                                                <div class="form-group row ssr-setting">
                                                    <label class="col-md-3 col-form-label" for="passwd">{{ trans('model.node.single_passwd') }}</label>
                                                    <input class="form-control col-md-4" id="passwd" name="passwd" type="text"
                                                           placeholder="{{ trans('validation.attributes.password') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- V2ray 设置部分 -->
                                        <div class="v2ray-setting">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_alter_id">{{ trans('model.node.v2_alter_id') }}</label>
                                                <input class="form-control col-md-4" id="v2_alter_id" name="v2_alter_id" type="text" value="16" />
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_port">{{ trans('model.node.service_port') }}</label>
                                                <input class="form-control col-md-4" id="v2_port" name="port" type="number" value="10053" hidden />
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_method">{{ trans('model.node.method') }}</label>
                                                <select class="col-md-5 form-control" id="v2_method" data-plugin="selectpicker"
                                                        data-style="btn-outline btn-primary">
                                                    <option value="none">none</option>
                                                    <option value="auto">auto</option>
                                                    <option value="aes-128-cfb">aes-128-cfb</option>
                                                    <option value="aes-128-gcm">aes-128-gcm</option>
                                                    <option value="chacha20-poly1305">chacha20-poly1305</option>
                                                </select>
                                                <div class="text-help offset-md-3"> {{ trans('admin.node.info.v2_method_hint') }}</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_net">{{ trans('model.node.v2_net') }}</label>
                                                <select class="col-md-5 form-control" id="v2_net" data-plugin="selectpicker"
                                                        data-style="btn-outline btn-primary">
                                                    <option value="tcp">TCP</option>
                                                    <option value="http">HTTP/2</option>
                                                    <option value="ws">WebSocket</option>
                                                    <option value="kcp">mKCP</option>
                                                    <option value="domainsocket">DomainSocket</option>
                                                    <option value="quic">QUIC</option>
                                                </select>
                                                <div class="text-help offset-md-3"> {{ trans('admin.node.info.v2_net_hint') }}</div>
                                            </div>
                                            <div class="form-group row v2_type">
                                                <label class="col-md-3 col-form-label" for="v2_type">{{ trans('model.node.v2_cover') }}</label>
                                                <select class="col-md-5 form-control" id="v2_type" data-plugin="selectpicker"
                                                        data-style="btn-outline btn-primary">
                                                    <option value="none">{{ trans('admin.node.info.v2_cover.none') }}</option>
                                                    <option value="http">{{ trans('admin.node.info.v2_cover.http') }}</option>
                                                    <optgroup id="type_option" label="">
                                                        <option value="srtp">{{ trans('admin.node.info.v2_cover.srtp') }}</option>
                                                        <option value="utp">{{ trans('admin.node.info.v2_cover.utp') }}</option>
                                                        <option value="wechat-video">{{ trans('admin.node.info.v2_cover.wechat') }}</option>
                                                        <option value="dtls">{{ trans('admin.node.info.v2_cover.dtls') }}</option>
                                                        <option value="wireguard">{{ trans('admin.node.info.v2_cover.wireguard') }}</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group row v2_host">
                                                <label class="col-md-3 col-form-label" for="v2_host">{{ trans('model.node.v2_host') }}</label>
                                                <div class="col-md-4 pl-0">
                                                    <input class="form-control" id="v2_host" name="v2_other" type="text">
                                                </div>
                                                <div class="text-help offset-md-3">
                                                    {{ trans('admin.node.info.v2_host_hint') }}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_path">{{ trans('model.node.v2_path') }}</label>
                                                <input class="form-control col-md-4" id="v2_path" name="v2_path" type="text">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_sni">{{ trans('model.node.v2_sni') }}</label>
                                                <input class="form-control col-md-4" id="v2_sni" name="v2_sni" type="text">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="v2_tls">{{ trans('model.node.v2_tls') }}</label>
                                                <div class="col-md-9">
                                                    <input id="v2_tls" name="v2_tls" data-plugin="switchery" type="checkbox"
                                                           onchange="switchSetting('v2_tls')">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="tls_provider">{{ trans('model.node.v2_tls_provider') }}</label>
                                                <input class="form-control col-md-9" id="tls_provider" name="tls_provider" type="text" />
                                                <div class="text-help offset-md-3"> {{ trans('admin.node.info.v2_tls_provider_hint') }}
                                                    <a href="https://proxypanel.gitbook.io/wiki/webapi/webapi-basic-setting#vnet-v2-ray-hou-duan"
                                                       target="_blank">VNET-V2Ray</a>、
                                                    <a href="https://proxypanel.gitbook.io/wiki/webapi/webapi-basic-setting#v-2-ray-poseidon-hou-duan"
                                                       target="_blank">V2Ray-Poseidon</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Trojan 设置部分 -->
                                        <div class="trojan-setting">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="trojan_port">{{ trans('model.node.service_port') }}</label>
                                                <input class="form-control col-md-4" id="trojan_port" name="port" type="number" value="443" hidden />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relay-config">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="relay_port">{{ trans('model.node.relay_port') }}</label>
                                            <input class="form-control col-md-4" id="relay_port" name="port" type="number" value="443" hidden />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-actions">
                                <div class="float-right">
                                    <a class="btn btn-danger" href="{{ route('admin.node.index') }}">{{ trans('common.back') }}</a>
                                    <button class="btn btn-success" type="submit">{{ trans('common.submit') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="/assets/global/vendor/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/global/js/Plugin/bootstrap-select.js"></script>
    <script src="/assets/global/vendor/switchery/switchery.min.js"></script>
    <script src="/assets/global/js/Plugin/switchery.js"></script>
    <script>
        const string = "{{ strtolower(Str::random()) }}";
        $(document).ready(function() {
            $('.relay-config').hide();
            let v2_path = $('#v2_path');
            @isset($node)
                @if ($node->is_ddns)
                    $('#is_ddns').click();
                @endif
                @if ($node->is_udp)
                    $('#is_udp').click();
                @endif
                @if ($node->status)
                    $('#status').click();
                @endif
                $("input[name='is_display'][value='{{ $node->is_display }}']").click();
                $("input[name='detection_type'][value='{{ $node->detection_type }}']").click();
                $("input[name='type'][value='{{ $node->type }}']").click();
                $('#name').val('{{ $node->name }}');
                $('#server').val('{{ $node->server }}');
                $('#ip').val('{{ $node->ip }}');
                $('#ipv6').val('{{ $node->ipv6 }}');
                $('#push_port').val('{{ $node->push_port }}');
                $('#traffic_rate').val('{{ $node->traffic_rate }}');
                $('#level').selectpicker('val', '{{ $node->level }}');
                $('#ruleGroup').selectpicker('val', '{{ $node->rule_group_id }}');
                $('#speed_limit').val('{{ $node->speed_limit }}');
                $('#client_limit').val('{{ $node->client_limit }}');
                $('#labels').selectpicker('val', {{ $node->labels->pluck('id') }});
                $('#country_code').selectpicker('val', '{{ $node->country_code }}');
                $('#relay_node_id').selectpicker('val', '{{ $node->relay_node_id }}');
                $('#description').val('{{ $node->description }}');
                $('#sort').val('{{ $node->sort }}');

                @if (isset($node->relay_node_id))
                    $('#relay_port').val('{{ $node->port }}');
                @else
                    @switch($node->type)
                        @case(1)
                        @case(4)
                        $('#protocol').selectpicker('val', '{{ $node->profile['protocol'] ?? null }}');
                        $('#protocol_param').val('{{ $node->profile['protocol_param'] ?? null }}');
                        $('#obfs').selectpicker('val', '{{ $node->profile['obfs'] ?? null }}');
                        $('#obfs_param').val('{{ $node->profile['obfs_param'] ?? null }}');
                        @if (!empty($node->profile['passwd']) && $node->port)
                            $('#single').click();
                            $('#passwd').val('{{ $node->profile['passwd'] }}');
                        @endif
                        @case(0)
                        $('#method').selectpicker('val', '{{ $node->profile['method'] ?? null }}');
                        @break

                        @case(2)
                        //V2Ray
                        $('#v2_alter_id').val('{{ $node->profile['v2_alter_id'] ?? null }}');
                        $('#v2_method').selectpicker('val', '{{ $node->profile['method'] ?? null }}');
                        $('#v2_net').selectpicker('val', '{{ $node->profile['v2_net'] ?? null }}');
                        $('#v2_type').selectpicker('val', '{{ $node->profile['v2_type'] ?? null }}');
                        $('#v2_host').val('{{ $node->profile['v2_host'] ?? null }}');
                        $('#v2_port').val('{{ $node->port }}');
                        $('#v2_sni').val('{{ $node->profile['v2_sni'] ?? null }}');
                        v2_path.val('{{ $node->profile['v2_path'] ?? null }}');
                        @if ($node->profile['v2_tls'] ?? false)
                            $('#v2_tls').click();
                        @endif
                        $('#tls_provider').val('{!! $node->tls_provider !!}');
                        @break

                        @case(3)
                        $('#trojan_port').val('{{ $node->port }}');
                        @break

                        @default
                    @endswitch
                    $('input[name = port]').val('{{ $node->port }}');
                @endif
            @else
                switchSetting('single');
                switchSetting('is_ddns');
                $('input[name=\'type\'][value=\'0\']').click();
                $('#status').click();
                $('#is_udp').click();
                v2_path.val('/' + string);
            @endisset
            if ($('#obfs').val() === 'plain') {
                $('.obfs_param').hide();
            }
        });

        function Submit() { // ajax同步提交
            $.ajax({
                method: @isset($node)
                    'PUT'
                @else
                    'POST'
                @endisset ,
                url: '{{ isset($node) ? route('admin.node.update', $node) : route('admin.node.store') }}',
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}',
                    is_ddns: document.getElementById('is_ddns').checked ? 1 : 0,
                    name: $('#name').val(),
                    server: $('#server').val(),
                    ip: $('#ip').val(),
                    ipv6: $('#ipv6').val(),
                    push_port: $('#push_port').val(),
                    traffic_rate: $('#traffic_rate').val(),
                    level: $('#level').val(),
                    rule_group_id: $('#ruleGroup').val(),
                    speed_limit: $('#speed_limit').val(),
                    client_limit: $('#client_limit').val(),
                    labels: $('#labels').val(),
                    country_code: $('#country_code option:selected').val(),
                    description: $('#description').val(),
                    sort: $('#sort').val(),
                    is_udp: document.getElementById('is_udp').checked ? 1 : 0,
                    status: document.getElementById('status').checked ? 1 : 0,
                    type: $('input[name=\'type\']:checked').val(),
                    method: $('#method').val(),
                    protocol: $('#protocol').val(),
                    protocol_param: $('#protocol_param').val(),
                    obfs: $('#obfs').val(),
                    obfs_param: $('#obfs_param').val(),
                    is_display: $('input[name=\'is_display\']:checked').val(),
                    detection_type: $('input[name=\'detection_type\']:checked').val(),
                    single: document.getElementById('single').checked ? 1 : 0,
                    port: $('input[name="port"]:not([hidden])').val(),
                    passwd: $('#passwd').val(),
                    v2_alter_id: $('#v2_alter_id').val(),
                    v2_method: $('#v2_method').val(),
                    v2_net: $('#v2_net').val(),
                    v2_type: $('#v2_type').val(),
                    v2_host: $('#v2_host').val(),
                    v2_path: $('#v2_path').val(),
                    v2_sni: $('#v2_sni').val(),
                    v2_tls: document.getElementById('v2_tls').checked ? 1 : 0,
                    tls_provider: $('#tls_provider').val(),
                    relay_node_id: $('#relay_node_id option:selected').val(),
                },
                success: function(ret) {
                    if (ret.status === 'success') {
                        swal.fire({
                            title: ret.message,
                            icon: 'success',
                            timer: 1000,
                            showConfirmButton: false,
                        }).then(() => window.location.href =
                            '{{ route('admin.node.index') . (Request::getQueryString() ? '?' . Request::getQueryString() : '') }}');
                    } else {
                        swal.fire({
                            title: '[错误 | Error]',
                            text: ret.message,
                            icon: 'error'
                        });
                    }
                },
                error: function(data) {
                    let str = '';
                    const errors = data.responseJSON;
                    if ($.isEmptyObject(errors) === false) {
                        $.each(errors.errors, function(index, value) {
                            str += '<li>' + value + '</li>';
                        });
                        swal.fire({
                            title: '{{ trans('admin.hint') }}',
                            html: str,
                            icon: 'error',
                            confirmButtonText: '{{ trans('common.confirm') }}',
                        });
                    }
                },
            });

            return false;
        }

        function switchSetting(id) {
            let check = document.getElementById(id).checked ? 1 : 0;
            switch (id) {
                case 'single': // 设置单端口多用户
                    if (check) {
                        $('.single-setting').show();
                        $('#single_port').removeAttr('hidden').attr('required', true);
                    } else {
                        $('#single_port').removeAttr('required').attr('hidden', true);
                        $('#passwd').val('');
                        $('.single-setting').hide();
                    }
                    break;

                case 'is_ddns': // 设置是否使用DDNS
                    if (check) {
                        $('#ip').val('').attr('readonly', true);
                        $('#ipv6').val('').attr('readonly', true);
                        $('#server').attr('required', true);
                    } else {
                        $('#ip').removeAttr('readonly');
                        $('#ipv6').removeAttr('readonly');
                        $('#server').removeAttr('required');
                    }
                    break;
                default:
                    break;
            }
        }

        // 设置服务类型
        $('input:radio[name=\'type\']').on('change', function() {
            const type = parseInt($(this).val());
            const $ss_setting = $('.ss-setting');
            const $ssr_setting = $('.ssr-setting');
            const $v2ray_setting = $('.v2ray-setting');
            const $trojan_setting = $('.trojan-setting');
            $ssr_setting.hide();
            $ss_setting.hide();
            $v2ray_setting.hide();
            $trojan_setting.hide();
            $('#v2_port').removeAttr('required').attr('hidden', true);
            $('#trojan_port').removeAttr('required');
            switch (type) {
                case 0:
                    $ss_setting.show();
                    break;
                case 2:
                    $v2ray_setting.show();
                    $('#v2_port').removeAttr('hidden').attr('required', true);
                    $('#v2_net').selectpicker('val', 'tcp');
                    break;
                case 3:
                    $trojan_setting.show();
                    $('#trojan_port').removeAttr('hidden').attr('required', true);
                    break;
                case 1:
                case 4:
                    $ss_setting.show();
                    $ssr_setting.show();
                    break;
                default:
            }
        });

        $('#obfs').on('changed.bs.select', function() {
            const obfs_param = $('.obfs_param');
            if ($('#obfs').val() === 'plain') {
                $('#obfs_param').val('');
                obfs_param.hide();
            } else {
                obfs_param.show();
            }
        });

        $('#relay_node_id').on('changed.bs.select', function() {
            const relay = $('.relay-config');
            const config = $('.proxy-config');
            if ($('#relay_node_id').val() === '') {
                relay.hide();
                $('#relay_port').removeAttr('required').attr('hidden', true);
                config.show();
            } else {
                relay.show();
                config.hide();
                $('#relay_port').removeAttr('hidden').attr('required', true);
            }
        });

        // 设置V2Ray详细设置
        $('#v2_net').on('changed.bs.select', function() {
            const type = $('.v2_type');
            const type_option = $('#type_option');
            const host = $('.v2_host');
            const path = $('#v2_path');
            const v2_other = $('[name="v2_other"]');
            type.show();
            host.show();
            v2_other.show();
            path.val('/' + string);
            switch ($(this).val()) {
                case 'kcp':
                    type_option.attr('disabled', false);
                    break;
                case 'ws':
                    type.hide();
                    break;
                case 'http':
                    type.hide();
                    break;
                case 'domainsocket':
                    type.hide();
                    host.hide();
                    break;
                case 'quic':
                    type_option.attr('disabled', false);
                    path.val(string);
                    break;
                case 'tcp':
                default:
                    type_option.attr('disabled', true);
                    break;
            }
            $('#v2_type').selectpicker('refresh');
        });

        // 服务条款
        function showTnc() {
            const content =
                '<ol>' +
                '<li>请勿直接复制黏贴以下配置，SSR(R)会报错的</li>' +
                '<li>确保服务器时间为CST</li>' +
                '</ol>' +
                '&emsp;&emsp;"additional_ports" : {<br />' +
                '&emsp;&emsp;&emsp;"443": {<br />' +
                '&emsp;&emsp;&emsp;&emsp;"passwd": "ProxyPanel",<br />' +
                '&emsp;&emsp;&emsp;&emsp;"method": "none",<br />' +
                '&emsp;&emsp;&emsp;&emsp;"protocol": "auth_chain_a",<br />' +
                '&emsp;&emsp;&emsp;&emsp;"protocol_param": "#",<br />' +
                '&emsp;&emsp;&emsp;&emsp;"obfs": "plain",<br />' +
                '&emsp;&emsp;&emsp;&emsp;"obfs_param": "fe2.update.microsoft.com"<br />' +
                '&emsp;&emsp;&emsp;}<br />' +
                '&emsp;&emsp;},';

            swal.fire({
                title: '[节点 user-config.json 配置示例]',
                html: '<div class="p-10 bg-grey-900 text-white font-weight-300 text-left" style="line-height: 22px;">' +
                    content + '</div>',
                icon: 'info',
            });
        }

        // 模式提示
        function showPortsOnlyConfig() {
            const content = '严格模式："additional_ports_only": "true"' +
                '<br><br>' +
                '兼容模式："additional_ports_only": "false"';

            swal.fire({
                title: '[节点 user-config.json 配置示例]',
                html: '<div class="p-10 bg-grey-900 text-white font-weight-300 text-left" style="line-height: 22px;">' +
                    content + '</div>',
                icon: 'info',
            });
        }
    </script>
@endsection
