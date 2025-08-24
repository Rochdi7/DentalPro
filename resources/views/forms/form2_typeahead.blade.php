@extends('layouts.main')

@section('title', 'TypeAhead')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'TypeAhead')

@section('css')
@endsection

@section('content')
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row mb-0">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Demo</label>
                            <div class="col-lg-5 col-md-9 col-sm-12">
                                <div class="typeahead">
                                    <input class="form-control" id="pc-typeahead-1" type="text" dir="ltr"
                                        placeholder="States of USA" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ URL::asset('build/js/plugins/type-ahead.min.js') }}"></script>
    <script>
        var states = [
            'Alabama',
            'Alaska',
            'Arizona',
            'Arkansas',
            'California',
            'Colorado',
            'Connecticut',
            'Delaware',
            'Florida',
            'Georgia',
            'Hawaii',
            'Idaho',
            'Illinois',
            'Indiana',
            'Iowa',
            'Kansas',
            'Kentucky',
            'Louisiana',
            'Maine',
            'Maryland',
            'Massachusetts',
            'Michigan',
            'Minnesota',
            'Mississippi',
            'Missouri',
            'Montana',
            'Nebraska',
            'Nevada',
            'New Hampshire',
            'New Jersey',
            'New Mexico',
            'New York',
            'North Carolina',
            'North Dakota',
            'Ohio',
            'Oklahoma',
            'Oregon',
            'Pennsylvania',
            'Rhode Island',
            'South Carolina',
            'South Dakota',
            'Tennessee',
            'Texas',
            'Utah',
            'Vermont',
            'Virginia',
            'Washington',
            'West Virginia',
            'Wisconsin',
            'Wyoming'
        ];
        var example1 = new TypeAhead(document.getElementById('pc-typeahead-1'), states);
    </script>
    <!-- [Page Specific JS] end -->
@endsection
