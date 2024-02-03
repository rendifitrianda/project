<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
  public function testCollection()
  {
    $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
    $collection = collect($list_bike);

    // Sorting
        
    // Take
    // Skip



    dd($collection->count());
    dd($list_bike, $collection);
  }
}
