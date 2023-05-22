
namespace App\Http\Controllers\Front;
<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileLight extends Controller
{
    //

    public function plight(){
        return view('front.plight');
    }
}
?>
