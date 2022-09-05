<style>
    .page-break {
        page-break-after: always;
    }
</style>

<h1>Email: {{$user->email}}</h1>
<h1>Unique ID: {{$user->unique_id}}</h1>
<h2>Call Details</h2>
@if (isset($call_details))
    <table class="table bordered">
        @foreach ($call_details as $key => $item)
            <tr>
                <td style="text-transform:capitalize; font-weight:600">
                    @php
                        $key = str_replace('_', ' ', $key);
                    @endphp
                    {{ $key }}:</td>
                <td>{{ $item }} </td>
            </tr>
        @endforeach
    </table>
@endif
<div class="page-break"></div>

<h2>Assessment</h2>
@if (isset($treatment))
    <table class="table bordered">
        @foreach ($treatment as $key => $item)
            <tr>
                <td style="text-transform:capitalize; font-weight:600">
                    @php
                        $key = str_replace('_', ' ', $key);
                    @endphp
                    {{ $key }}:</td>
                <td>{{ $item }} </td>
            </tr>
        @endforeach
    </table>
@endif
<div class="page-break"></div>

<h2>Treatment</h2>
@if (isset($assessment))
    <table class="table bordered">
        @foreach ($assessment as $key => $item)
            <tr>
                <td style="text-transform:capitalize; font-weight:600">
                    @php
                        $key = str_replace('_', ' ', $key);
                    @endphp
                    {{ $key }}:</td>
                <td>{{ $item }} </td>
            </tr>
        @endforeach
    </table>
@endif
