<?php
require "vendor/autoload.php"
$auth0 = new Auth0([
  'domain' => 'spartanmarket.auth0.com',
  'client_id' => 'u2QctT5e9vshDRm7UD4TcUFURremsHrf',
  'client_secret' => 'YOUR_CLIENT_SECRET',
  'redirect_uri' => 'https://mahavirv.xyz/callback.php',
  'audience' => 'https://spartanmarket.auth0.com/userinfo',
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_access_token' => true,
  'persist_refresh_token' => true,
]);

>