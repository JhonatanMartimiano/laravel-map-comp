<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{$data->title}}</title>
</head>

<table border="0" cellpadding="0" cellspacing="0" style="max-width: 700px; padding: 0 10px;">
    <tr>
        <td>
            <div style="font-size: 16px; margin-bottom: 25px; padding-bottom: 5px; border-bottom: 1px solid #EEEEEE;">
                {{$slot}}
                <p style="margin: 25px 0; text-align: justify;">Atenciosamente, <br>Equipe {{$data->siteName}}.</p>
            </div>
            <div style="font-size: 14px; color: #888888; font-style: italic;">
                <p style="margin: 0 0 2px 0;">{{$data->siteName}} - {{$data->siteTitle}}</p>
            </div>
        </td>
    </tr>
</table>

</html>
