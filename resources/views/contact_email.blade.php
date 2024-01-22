@component('mail::message')
    <h1 style="text-align: center;">
        Thank you For Contacting Us!</h1>
    <table class="table" style="text-align: left;">
        <tr>
            <th style="border-bottom:0; color:black" scope="col">Name</th>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th style="border-bottom: 0; color: black" scope="col">Email</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th style="border-bottom:0; color:black" scope="col">Message</th>
            @if (isset($data['message']))
                <td>{{ $data['message'] }}</td>
            @else
                Null
            @endif
        </tr>
    </table>
    <div style="font-size: 16px; color: black;  margin-top:10px;">
        <strong>Regards,</strong><br>
        <strong>{{ config('app.name') }}</strong>
    </div>
@endcomponent
