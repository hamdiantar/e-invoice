<?php

return [
  'allowed_domains' => [
      env('FRONTEND_URL', 'http://localhost:4200'),
      env('BACKEND_URL', 'http://127.0.0.1:8000'),
  ]
];
