<?php
$routes = [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  'dang-ky' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'index'
  ],
  'danh-sach' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'showPhieuDangKy'
  ],
  'cap-nhat' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'suaphieu'
  ]
  ,
  'add' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'createPhieuDangKy'
  ],
  'delete' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'delete'
  ],
  'update' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'updatePhieuDangKy'
  ]
  ,
  'Register' => [
    'controller' => 'AcountController',
    'action' => 'register'
  ],
  'login' => [
    'controller' => 'AcountController',
    'action' => 'login'
  ],
  'logout' => [
    'controller' => 'AcountController',
    'action' => 'logout'
  ],
  'fileUpload' => [
    'controller' => 'AcountController',
    'action' => 'fileUpload'
  ],
  'updateFile' => [
    'controller' => 'AcountController',
    'action' => 'updateFile'
  ]
];
?>