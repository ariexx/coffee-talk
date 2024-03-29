<html>

<body
    style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
<table
    style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
    <thead>
    <tr>
        <th style="text-align:left;">{{config('app.name')}}</th>
        <th style="text-align:right;font-weight:400;">{{now()->format('d M Y - H:i')}}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="height:35px;"></td>
    </tr>
    <tr>
        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
            <p style="font-size:14px;margin:0 0 6px 0;"><span
                    style="font-weight:bold;display:inline-block;min-width:150px">Order status</span><b
                    style="color:green;font-weight:normal;margin:0">Success</b></p>
            <p style="font-size:14px;margin:0 0 6px 0;"><span
                    style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span> {{$orderNumber}}
            </p>
            <p style="font-size:14px;margin:0 0 0 0;"><span
                    style="font-weight:bold;display:inline-block;min-width:146px">Order total</span> {{rupiah($totalPrice)}}
            </p>
        </td>
    </tr>
    <tr>
        <td style="height:35px;"></td>
    </tr>
    <tr>
        <td style="width:50%;padding:20px;vertical-align:top">
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                    style="display:block;font-weight:bold;font-size:13px">Name</span> {{$customer['name']}}</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                    style="display:block;font-weight:bold;font-size:13px;">Email</span> {{$customer['email']}}</p>
            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                    style="display:block;font-weight:bold;font-size:13px;">Table Number</span> {{$customer['table_number']}}
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Items</td>
    </tr>
    <tr>
        <td colspan="2" style="padding:15px;">
            @foreach($items as $item)
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                    <span
                        style="display:block;font-size:13px;font-weight:normal;">{{$item['name']}}</span>
                    {{rupiah($item['price'])}} <b style="font-size:12px;font-weight:300;"> {{$item['quantity']}}x</b>
                </p>
            @endforeach
        </td>
    </tr>
    </tbody>
    <tfooter>
        <tr>
            <td colspan="2" style="padding:15px;">
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold; text-align: center; align-content: center;">
                    <span
                        style="display:block;font-size:13px;font-weight:normal;">Scan QR untuk pembayaran</span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" width="150" height="150" alt="QR Code Payment">
                    {{--                <img src="{{asset('storage/qr-code/' . $qrCode)}}" alt="QR Code Payment">--}}
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                <strong style="display:block;margin:0 0 10px 0;">Regards</strong> {{config('app.name')}}<br> Medan, Indonesia<br><br>
            </td>
        </tr>
    </tfooter>
</table>
</body>

</html>
