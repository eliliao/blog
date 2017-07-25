<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// 範例1
// function outputItems($items) {
//     foreach ($items as $item_name) {
//         echo $item_name . '<br>';
//     }
// }

// Route::get('/', function () {

//     $members = [
//         0 => 'Stream',
//         1 => 'Sid',
//         2 => 'Jessie',
//         3 => 'Jeff',
//         4 => 'Eli',
//     ];
//     // outputItems($members);
//     // outputItems($members);
//     // outputItems($members);

//     foreach ($members as $member_name) {
//         echo $member_name . '<br>';
//     }

//     foreach ($members as $member_name) {
//         echo $member_name . '<br>';
//     }

//     foreach ($members as $member_name) {
//         echo $member_name . '<br>';
//     }

//     foreach ($members as $member_name) {
//         echo $member_name . '<br>';
//     }

//     // echo $members[2];


//     // for ($i = o; $i < count($members); $i++){

//     // return view('welcome');
// });


// 範例2
// Route::get('about', function () {

//     $members = [
//         'Stream' => [
//         	'age' => '20',
//         	'gender' => 'male',
//         	'time' => '10'     
//         ],
//         'Sid'=> [
//         	'age' => '20',
//         	'gender' => 'male',
//         	'time' => '10'
//         ],
//         'Jessie'=> [
//         	'age' => '20',
//         	'gender' => 'male',
//         	'time' => '10'
//         ],
//         'Jeff'=> [
//         	'age' => '20',
//         	'gender' => 'male',
//         	'time' => '10'
//         ],
//         'Eli'=> [
//         	'age' => '20',
//         	'gender' => 'male',
//         	'time' => '10'
//         ]
//     ];
//     foreach ($members as $members_name => $member_data) {
//         echo $members_name .'<br>' . '性別:' . $member_data['gender'] .'<br>' . 
//                              '年齡:' . $member_data['age'] . '<br>' .
//                              '時間:' . $member_data['time'] . '<br>'; 
//     }
// });

// function tripleA($number_a){
//       return $number_a * 3; 
// }

// Route::get('/function_practice', function () {
//     // echo tripleA(3); //9
//     echo tripleA(4); //12
// });


// function square($number_a){
//       return $number_a * $number_a;
// }

// Route::get('/function_practice', function () {
//     echo square(4) . ',' . square(5); // 16,25
// });



// function triangle($number_a){
//       return $number_a * $number_a * $number_a;
// }

// Route::get('/function_practice', function () {
//     echo triangle(4) . ',' . triangle(5); // 64,125
// });


// function getremainder($number_a,$number_b) {
//       $remainder = $number_a % $number_b;
//       return '餘數是' . $remainder;
// }

// Route::get('/function_practice', function () {
//     echo getremainder(9, 2); //餘數是1
//     echo '<br>';
//     echo getremainder(5, 3); //餘數是2
// });


// function checkRemainderOfNumber($number){
//      $remainder = $number % 2;

//      if ($remainder == 0) {
//         return $number . '這是偶數';
//      } else{
//         return $number . '這是奇數';
//      }

// }

// Route::get('/function_practice', function () {
//     echo checkRemainderOfNumber(9); // 這是奇數
//     echo '<br>';
//     echo checkRemainderOfNumber(4); // 這是偶數
//     echo '<br>';
//     echo checkRemainderOfNumber(6); // 這是偶數
// }); 


// // 算出陣列裡有幾個偶數
// function getEvenNumbersCount($all_numbers){ 
//     // 建立一個變數 用來紀錄偶數有幾個 total本身就是計數器
//     $total = 0;
//     // 用foreach 走訪整個陣列裡的元素 foreach唯一個功能就是走訪陣列 陣列裡面有幾個數字 
//        寫法：foreach(迴圈名稱 as $value)<= 一定是填 $value
//     foreach ($all_numbers as $number ) {
//         // 建立一個變數,紀錄單一元素/2的餘數
//         $remainder = $number % 2;
//         // 用if檢查於數是否為0 
//         if ( $remainder == 0) {
//             //如果是的話 total就加1
//             $total = $total + 1 ;
//         } 
//     }
//     //回傳整個function的結果
//     return $total ; 
// } 


// 範例3
// Route::get('/function_practice', function () {
//     $numbers_to_check = [1,2,3,4,5];

//     echo getEvenNumbersCount($numbers_to_check);

//     //有兩個偶數
// });


// function getEvenNumbersCount($all_numbers){ 
//     $total = 0;
//     foreach ($all_numbers as $number ) {
//         $remainder = $number % 2; 
//         if ( $remainder == 0) {
//             $total = $total + 1 ;
//         } 
//     }
//     return $total ; 
// } 

// Route::get('/function_practice', function () {
//     $numbers_to_check = [1,2,3,4,5];

//     echo getEvenNumbersCount($numbers_to_check);

//     //有兩個偶數
// });





// // 範例4
// function sumOfNumbers($all_numbers) {
//     $total = 0;
//     foreach ($all_numbers as $number) {
//         $total = $total + $number;
//     }
//     return $total;
// }


// Route::get('/function_practice/test1', function () {
//     $numbers = [1,2,3,4,5];

//     echo sumOfNumbers($numbers);

//     // 總和：15
// });



// // 回家作業1 未解完過程
// //1000cc的水每天漏一半，求第幾天水量少於50cc 請用一個邏輯印出是第幾天
// function dividedBy($all_numbers) {
//     $total = 0;
//     foreach ($all_numbers as $number) {
//         $total = $total + $number;
//     }
//     return $total;
// }


// Route::get('/function_practice/homework1', function () {
//     $numbers = [1,2,3,4,5];

//     echo dividedBy($numbers);

//     // 第5天
// });

// // 回家作業1 解法1
// function dividedBy($DivideNumbers){ 
//     $total = 0;
//     foreach ($DivideNumbers as $number ) {
//         $Divide = $number / 2; 
//         if ( $Divide > 50) {
//             $total = $total + 1 ; // $total++;
//         } 
//     }
//     return $total ; 
// } 

// Route::get('/function_practice/homework1', function () {
//      $numbersValue = [1000,500,250,125,62.5,31.25];

//      echo dividedBy($numbersValue);


// // 回家作業1 解法2
// function dividedByCopy($DivideNumbers){ 
//     foreach ($DivideNumbers as $key => $number ) {
//         $Divide = $number / 2; 
//         if ( $Divide < 50) {
//             return $key + 1 ;
//         } 
//     }
// } 

// Route::get('/function_practice/homework1', function () {
//     $numbersValue = [1000,500,250,125,62.5,31.25];

//     echo dividedBy($numbersValue);


// // // 回家作業1 解法3
// function dividedByStream($ml) {
//     $ml = 1000;
//     for ($index = 1 ; ; $index++ ) { 
//         $ml = $ml / 2;
//         if ( $ml < 50) {
//             return $index ;
//         } 
//     }
// }

// // // 回家作業1 解法4
// function dividedByFor($DivideNumbers) {
//     for ($index = 0 ; $index < count($DivideNumbers); $index++ ) { 
//         $Divide = $DivideNumbers[$index] / 2;
//         if ( $Divide < 50) {
//             return $index + 1 ;
//         } 
//     }
// }

//6/8上課 for的用法 將數字加起來 計算器
// function steps($max) {
//     $total = 0; //計算加總的起始值
//     for ($i = 1; $i <= $max; $i++) {  //給一個起始值,每次跑完迴圈變數都加1,最大值不可超過5
//         $total = $total + $i; //起始值的變化
//     }
//     return $total;
// }

//     echo steps(5); // 15  1+2+3+4+5

// Route::get('/function_practice/homework1', function () {

// });


// //6/16 課堂 自動用除法排列組合的計數器
// function steps($max) {  
//     $arr_numbers = [];  //因為要求的是陣列,所以要先定義出一個空的array
//     for ($i = 1; $i < $max; $i++) {  //用for解題, 變數從1開始計算,跑完一次迴圈就加1,數值要小於 $max
//         $arr_numbers[] = $max; // 加入一個數值到array內,這個值就是 $max
//         $max /= 2; //變數max每走一次迴圈就要除2

//         if ($max <= 10) { //如果變數小於或等於10
//             return $arr_numbers; //就可以回拋資料顯示
//         }
//     }
// }



// Route::get('/function_practice/homework2', function () {
//     $max = 1000; //最大值1000
//     dd(steps($max)); // [1000,500,250,125,62.5,31.25, ...]
// });




//6/16 課堂練習1 自動用乘法排列組合的計數器
// 最大值200 自動排列[1,2,4,8,16, ...]

// function multiplied($max) {
//     $arr_numbers = [];

//     for ($i = 1 ; $i < $max ; $i *= 2) { 
//         $arr_numbers[] = $i;
//     }
//     return $arr_numbers;
// }


// Route::get('/function_practice/homework3', function () {
//     $max = 200; 
//     dd(multiplied($max)); 
// });





//6/16 課堂練習1 自動用減法排列組合的計數器
// 最大值100 自動排列[100,90,80,70, ...]

// function Subtraction($max){
//     $arr_numbers = [];

//     for ($number = $max ; $number >= 10 ; $number -= 10) {
//         $arr_numbers[] = $number;
//     }

//     return $arr_numbers;
// }

// Route::get('/function_practice/homework4', function () {
//     $max = 100; 
//     dd(Subtraction($max)); 
// });




//6/16 回家作業 自動用乘法排列組合的計數器
//1 * 3 * 5 * 7 * .... 乘到多少的時候會大於 100000



// function stepMultiply($max) {
//     $multiple_result = 1; // 乘績
//     $multiplyer = 1;      // 被乘數
    

//     for ($i=0 ; ; $i++ ) {
//         $multiple_result *= $multiplyer;
//         $multiplyer += 2;

//         if ($multiple_result > $max) {
//             return $i;
//         }
//     }            
// }

// Route::get('/function_practice/homework5', function () {
//     $max = 100000;

//     dd(stepMultiply($max)); // 1 * 3 * 5 * 7 * .... 乘到多少的時候會大於 1000 (ans:11)
// });

// ---------------------

Route::get('task','TaskController@index');

Route::get('task/{id}','TaskController@show');

Route::get('articles','ArticlesController@index');

Route::get('articles/{id}','ArticlesController@show');


