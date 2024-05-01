@extends('layouts.main')
@section('content')
    <title>{{ 'Collections :: Cedar' }}</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center justify-between mb-6" bis_skin_checked="1">
            <h1>Collections</h1>
            <a href="{{ route('collections.addCollection') }}" class="btn-primary">Create Collection</a>
            <h1>{{ 'Collections' }}</h1>
        </div>
        <div class="card overflow-hidden p-0" endpoints="" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <x-table-head :firstcol="$firstCol" :secondcol="$secondCol" />
                <tbody tabindex="0">
                    @foreach ($data as $collection)
                        <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                            <td class=""><a
                                    href="https://demo.statamic.com/cp/collections/news">{{ $collection->handle }}</a></td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="entries" values="" class="" bis_skin_checked="1">6
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
{"routes":[],"slugs":true,"title_formats":[],"mount":null,"dated":false,"sites":null,"template":null,"layout":null,"inject":[],"search_index":null,"revisions":false,"default_status":true,"structure":null,"sort_dir":null,"sort_field":null,"taxonomies":[],"propagate":false,"past_date_behavior":"public","future_date_behavior":"private","preview_targets":[{"label":"Entry","format":"{permalink}","refresh":true}],"origin_behavior":"select"}
