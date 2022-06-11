<div><div class="container w-1/2 float-left px-4 mx-auto">
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>
</div>

<div class="container w-1/2 float-right px-4 mx-auto">
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart2->container() !!}
    </div>
</div>
</div>
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
<script src="{{ $chart2->cdn() }}"></script>

{{ $chart2->script() }}