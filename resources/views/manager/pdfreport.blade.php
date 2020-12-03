<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        @include('partial.reporttable')

        <div style="text-align: right">
            Approval
            <br />
            <br />
            <br />
            <br />
            {{ $manager->nama }}<br />
            Manajer
        </div>
    </body>
</html>
