<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice Pdf</title>
    <link rel="stylesheet" href="/assets/stylesheets/bootstrap.css">
    <link rel="stylesheet" href="/assets/stylesheets/invoice.css">
  </head>
  <body class="invoice py-2">
    <div class="container">
        @yield('pdf')
    </div>
  </body>
</html>