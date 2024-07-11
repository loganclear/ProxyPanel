<?php
/**
 * @var  Arcanedev\LogViewer\Entities\Log $log
 * @var  Illuminate\Pagination\LengthAwarePaginator $entries
 * @var  string|null $query
 */
?>

@extends('vendor.log-viewer.remark.layouts')

@section('content')
    <div class="page-header mb-4">
        <h1>@lang('Log') [{{ $log->date }}]</h1>
    </div>

    <div class="row">
        <div class="col-lg-2">
            {{-- Log Menu --}}
            <div class="list-group">
                @foreach ($log->menu() as $levelKey => $item)
                    @if ($item['count'] === 0)
                        <a class="list-group-item disabled">
                            <span class="level-name">{!! $item['icon'] !!} {{ $item['name'] }}</span>
                            <span class="float-right badge empty">{{ $item['count'] }}</span>
                        </a>
                    @else
                        <a class="list-group-item level-{{ $levelKey }}{{ $level === $levelKey ? ' active' : '' }}" href="{{ $item['url'] }}">
                            <span class="level-name">{!! $item['icon'] !!} {{ $item['name'] }}</span>
                            <span class="float-right badge badge-level-{{ $levelKey }}">{{ $item['count'] }}</span>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-lg-10">
            {{-- Log Details --}}
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"> @lang('Log info') :</h3>
                    <div class="panel-actions panel-actions-keep">
                        <a class="btn btn-sm btn-success" href="{{ route('log-viewer::logs.download', [$log->date]) }}">
                            <i class="fa-solid fa-download"></i> @lang('Download')
                        </a>
                        <button class="btn btn-sm btn-danger" data-target="#deleteLogModal" data-toggle="modal" type="button">
                            <i class="fa-solid fa-trash"></i> @lang('Delete')
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td>@lang('File path') :</td>
                                    <td colspan="7">{{ $log->getPath() }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Log entries') :</td>
                                    <td>
                                        <span class="badge badge-primary">{{ $entries->total() }}</span>
                                    </td>
                                    <td>@lang('Size') :</td>
                                    <td>
                                        <span class="badge badge-primary">{{ $log->size() }}</span>
                                    </td>
                                    <td>@lang('Created at') :</td>
                                    <td>
                                        <span class="badge badge-primary">{{ $log->createdAt() }}</span>
                                    </td>
                                    <td>@lang('Updated at') :</td>
                                    <td>
                                        <span class="badge badge-primary">{{ $log->updatedAt() }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    {{-- Search --}}
                    <form action="{{ route('log-viewer::logs.search', [$log->date, $level]) }}" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="query" name="query" value="{{ $query }}" placeholder="@lang('Type here to search')">
                                <div class="input-group-append">
                                    @unless (is_null($query))
                                        <a class="btn btn-secondary" href="{{ route('log-viewer::logs.show', [$log->date]) }}">
                                            (@lang(':count results', ['count' => $entries->count()]))
                                            <i class="fa-solid fa-fw fa-xmark"></i>
                                        </a>
                                    @endunless
                                    <button class="btn btn-primary" id="search-btn">
                                        <i class="fa-solid fa-fw fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Log Entries --}}
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"> @lang('Log info') :</h3>
                    @if ($entries->hasPages())
                        <div class="panel-actions panel-actions-keep">
                            <div class="badge badge-info float-right">
                                {{ __('Page :current of :last', ['current' => $entries->currentPage(), 'last' => $entries->lastPage()]) }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0" id="entries">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="white-space: nowrap;">@lang('ENV')</th>
                                    <th>@lang('Level')</th>
                                    <th>@lang('Time')</th>
                                    <th>@lang('Header')</th>
                                    <th>@lang('Actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($entries as $key => $entry)
                                    <?php
                                    /** @var  Arcanedev\LogViewer\Entities\LogEntry $entry */
                                    ?>
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td style="white-space: nowrap;">
                                            {{ $entry->env }}
                                        </td>
                                        <td>
                                            <span class="badge badge-level-{{ $entry->level }}">
                                                {!! $entry->level() !!}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-secondary">
                                                {{ $entry->datetime->format('H:i:s') }}
                                            </span>
                                        </td>
                                        <td>
                                            {{ $entry->header }}
                                        </td>
                                        <td class="text-right">
                                            @if ($entry->hasStack())
                                                <a class="btn btn-sm btn-light" data-toggle="collapse" href="#log-stack-{{ $key }}" role="button"
                                                   aria-expanded="false" aria-controls="log-stack-{{ $key }}">
                                                    <i class="fa-solid fa-toggle-on"></i> @lang('Stack')
                                                </a>
                                            @endif

                                            @if ($entry->hasContext())
                                                <a class="btn btn-sm btn-light" data-toggle="collapse" href="#log-context-{{ $key }}" role="button"
                                                   aria-expanded="false" aria-controls="log-context-{{ $key }}">
                                                    <i class="fa-solid fa-toggle-on"></i> @lang('Context')
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @if ($entry->hasStack() || $entry->hasContext())
                                        <tr>
                                            <td class="stack py-0" colspan="6">
                                                @if ($entry->hasStack())
                                                    <div class="stack-content collapse" id="log-stack-{{ $key }}">
                                                        {!! $entry->stack() !!}
                                                    </div>
                                                @endif

                                                @if ($entry->hasContext())
                                                    <div class="stack-content collapse" id="log-context-{{ $key }}">
                                                        <pre>{{ $entry->context() }}</pre>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="5">
                                            <span class="badge badge-secondary">@lang('The list of logs is empty!')</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-4">
                            {!! trans('admin.logs.counts', ['num' => $entries->total()]) !!}
                        </div>
                        <div class="col-sm-8">
                            <nav class="Page navigation float-right">
                                {{ $entries->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    {{-- DELETE MODAL --}}
    <div class="modal fade" id="deleteLogModal" role="dialog" aria-hidden="true" aria-labelledby="deleteLogModal" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <form class="modal-content" id="deleteLogForm" action="{{ route('log-viewer::logs.delete') }}" method="POST">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button" aria-label="{{ trans('common.close') }}">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">@lang('Delete log file')</h4>
                </div>
                <div class="modal-body">
                    <input name="_method" type="hidden" value="DELETE">@csrf
                    <input name="date" type="hidden" value="{{ $log->date }}">
                    <p>@lang('Are you sure you want to delete this log file: :date ?', ['date' => $log->date])</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary mr-auto" data-dismiss="modal" type="button">@lang('Cancel')</button>
                    <button class="btn btn-danger" data-loading-text="@lang('Loading')&hellip;" type="submit">@lang('Delete')</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function() {
            const deleteLogModal = $('div#deleteLogModal'),
                deleteLogForm = $('form#deleteLogForm'),
                submitBtn = deleteLogForm.find('button[type=submit]');

            deleteLogForm.on('submit', function(event) {
                event.preventDefault();
                submitBtn.button('loading');

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(data) {
                        submitBtn.button('reset');
                        if (data.result === 'success') {
                            deleteLogModal.modal('hide');
                            location.replace("{{ route('log-viewer::logs.list') }}");
                        } else {
                            alert('OOPS ! This is a lack of coffee exception !');
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        alert('AJAX ERROR ! Check the console !');
                        console.error(errorThrown);
                        submitBtn.button('reset');
                    },
                });

                return false;
            });

            @unless (empty(log_styler()->toHighlight()))
                @php
                    $htmlHighlight = implode('|', log_styler()->toHighlight());
                @endphp

                $('.stack-content').each(function() {
                    const $this = $(this);
                    const html = $this.html().trim().replace(/({!! $htmlHighlight !!})/gm, '<strong>$1</strong>');

                    $this.html(html);
                });
            @endunless
        });
    </script>
@endsection
