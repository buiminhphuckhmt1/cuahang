<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use App\Models\Visit;
use App\Statistic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;


class HomeController extends Controller
{
    public function index(){

        return view("admin.Home");
    }
    // public function dashboard_post(Request $request){

    // }
    // public function dashboard_get(Request $request){
    //     $result =Category::limit(4)->select('name')->get();
    //     $data = [];
 
    //     foreach($result as $row) {
    //         $data['label'][] = $row->name;
    //         //$data['data'][] = (int) $row->post->count;
    //     }
 
    //     $data['chart_data'] = json_encode($data);
    //     return view('admin.Home', $data);
    // }
}
