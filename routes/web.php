<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MobilityTestController;




Route::get('/', [InformationController::class, 'index'])->name('index');
Route::post('/MailSend', [InformationController::class, 'store'])->name('info.store');


// MOBILITY TEST ROUTES
Route::get('/mobility-test', [MobilityTestController::class, 'mobilityTest'])->name('mobilityTest');
Route::post('/mobilityTestsecond', [MobilityTestController::class, 'mobilitySecondStore'])->name('mobilitySecondStore');
Route::get('/mobility-test-second', [MobilityTestController::class, 'SecondTest'])->name('SecondTest');
Route::post('/mobilityTestThird', [MobilityTestController::class, 'mobilityTestThird'])->name('mobilityTestThird');
Route::get('/mobility-testTh', [MobilityTestController::class, 'ThirdTest'])->name('ThirdTest');
Route::post('/mobilityTestFour', [MobilityTestController::class, 'mobilityTestFour'])->name('mobilityTestFour');
Route::get('/mobility-testFo', [MobilityTestController::class, 'ForthTest'])->name('ForthTest');
Route::post('/mobilityTestFive', [MobilityTestController::class, 'mobilityTestFive'])->name('mobilityTestFive');
Route::get('/mobility-testFi', [MobilityTestController::class, 'FifthTest'])->name('FifthTest');
Route::post('/mobilityTestSix', [MobilityTestController::class, 'mobilityTestSix'])->name('mobilityTestSix');
Route::get('/mobility-testSi', [MobilityTestController::class, 'SixTest'])->name('SixTest');
Route::post('/mobilityTestSeven', [MobilityTestController::class, 'mobilityTestSeven'])->name('mobilityTestSeven');
Route::get('/mobility-testSe', [MobilityTestController::class, 'SevenTesT'])->name('SevenTesT');
Route::post('/mobilityTestEight', [MobilityTestController::class, 'mobilityTestEight'])->name('mobilityTestEight');
Route::get('/mobility-testEi', [MobilityTestController::class, 'EightTest'])->name('EightTest');
Route::post('/mobilityTestNine', [MobilityTestController::class, 'mobilityTestNine'])->name('mobilityTestNine');
Route::get('/mobility-testNi', [MobilityTestController::class, 'NineTest'])->name('NineTest');
Route::post('/mobilityTestTen', [MobilityTestController::class, 'mobilityTestTen'])->name('mobilityTestTen');
Route::get('/mobility-testTe', [MobilityTestController::class, 'TenTest'])->name('TenTest');


//After Checkup
Route::post('/PastYears', [MobilityTestController::class, 'PastYears'])->name('PastYears');
Route::get('/FromPastYears', [MobilityTestController::class, 'FromPastYears'])->name('FromPastYears');

Route::post('/Goal', [MobilityTestController::class, 'Goal'])->name('Goal');
Route::get('/mobilityGoal', [MobilityTestController::class, 'mobilityGoal'])->name('mobilityGoal');

Route::post('/health', [MobilityTestController::class, 'health'])->name('health');
Route::get('/mobilityHealth', [MobilityTestController::class, 'mobilityHealth'])->name('mobilityHealth');

//Result Page
Route::get('/FinalResult', [MobilityTestController::class, 'FinalResult'])->name('FinalResult');
Route::post('/results', [MobilityTestController::class, 'results'])->name('results');

Route::get('/booking', [MobilityTestController::class, 'booking'])->name('booking');
Route::get('/payment', [MobilityTestController::class, 'payment'])->name('payment');
