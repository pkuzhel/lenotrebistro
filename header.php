<?
  function custom_header($title, $description) {
?>
    <head>
        <meta charset="UTF-8">
        <title><? echo $title; ?></title>
        <meta name="description" content="<? echo $description; ?>">
        <link rel="canonical" href="https://lenotrebistro.com/" />

        <!-- mobile setup -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-title" content="Le Notre Bistro" />

        <!-- stylesheet -->
        <link rel="stylesheet" href="./assets/css/libs/awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="./assets/css/custom.css">
        <link rel="stylesheet" href="./assets/css/style-default.css">

        <!-- Facebook -->
        <meta property="og:title" content="Restaurant" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content=".//" />
        <meta property="og:description" content="Here the excerp for this page" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0a132f">
        <meta name="msapplication-TileColor" content="#0a132f">
        <meta name="theme-color" content="#0a132f">
    </head>
<?
  };
?>
