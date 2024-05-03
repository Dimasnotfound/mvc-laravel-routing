<?php

// login regis
route('/','get', function () { return view('login'); });
route('registrasi', 'get', function () { return view('registrasi'); });

// dashboard
route('dashboard', 'post',  'dashboardController::index');

// Tambah data
route('tambahData', 'get',  'dashboardController::tambahData');
route('pegawai.tambah', 'post',  'dashboardController::tambahData');

// Edit Data
route('editData', 'get',  'dashboardController::editData');
route('editData', 'post',  'dashboardController::editData');

// Delete Data
route('deleteData', 'get',  'dashboardController::deteleData');