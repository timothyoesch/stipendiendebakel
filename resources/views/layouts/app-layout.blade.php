<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->
    <title>Stipendiendebakel aufräumen: Jetzt unterzeichnen!</title>
    <meta name="title" content="Stipendiendebakel aufräumen: Jetzt unterzeichnen!">
    <meta name="description" content="Die Bildungsdirektion unter Silvia Steiner hat bei den Stipendien geschlampt und treibt unzählige Menschen in den Ruin: So nicht!">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:title" content="Stipendiendebakel aufräumen: Jetzt unterzeichnen!">
    <meta property="og:description" content="Die Bildungsdirektion unter Silvia Steiner hat bei den Stipendien geschlampt und treibt unzählige Menschen in den Ruin: So nicht!">
    <meta property="og:image" content="{{url()->current()}}/images/og/og.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url()->current()}}">
    <meta property="twitter:title" content="Stipendiendebakel aufräumen: Jetzt unterzeichnen!">
    <meta property="twitter:description" content="Die Bildungsdirektion unter Silvia Steiner hat bei den Stipendien geschlampt und treibt unzählige Menschen in den Ruin: So nicht!">
    <meta property="twitter:image" content="{{url()->current()}}/images/og/og.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#f38cbc">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#f38cbc">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#F38CBC">

    @vite("resources/css/app.scss")
</head>
<body>
    {{ $slot }}
@vite("resources/js/app.js")
</body>
</html>
