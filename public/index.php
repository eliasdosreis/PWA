<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pwa</title>

    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#3498db">
    <link rel="shortcut icon" href="images/icons/icon-512x512.png">
    
    <meta name="apple-mobile-web-app-cabable" content="true">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/icons/icon-512x512.png">
    <link rel="apple-touch-startup-image" href="images/icons/icon-512x512.png">
</head>
<body>
    
    
</body>
<script>
   if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
</script>
</html>