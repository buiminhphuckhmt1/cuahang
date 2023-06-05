<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class CategoryController extends Controller
{
    //Read
    public function index(){
        //sử dụng đối tượng DB để truy vấn csdl
        /*
            DB::table("categorys") <=> select * from categorys
            orderBy("id","desc") <=> order by id desc
            paginate(4) <=> phân trang 4 bản ghi trên một trang
        */
        $data = DB::table("categories")->where("parent_id","=",0)->orderBy("id","desc")->paginate(10);
        $action = url("backend/categorys/createPost");
        // $paginator = Paginator::make($data, $totalBrand, $perPage);
        //gọi view, truyền dữ liệu ra view
        return view("admin.CategorysRead",["data"=>$data,"action"=>$action]);
    }
    public function getCategoriesSub($category_id){

        $result = DB::table("categories")->where("parent_id","=",$category_id)->orderBy("id","desc");
        //tra ve ket qua
        return $result;
    }
    //Update Get
    public function update($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("backend/categorys/updatePost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $data = DB::table("categories")->where("parent_id","=",0)->where("id","!=",$id)->orderBy("id","desc")->paginate(10);
        $record = DB::table("categories")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("admin.CategorysUpdate",["data"=>$data,"record"=>$record,"action"=>$action]);
    }
    //Update Post
    public function updatePost($id){
        $parent_id =request("parent_id");
        $name =request("name");
        //di chuyển đến url khác
        $check = DB::table("categories")->where("id","!=",$id)->where("name","=",$name)->Count();
        if(!$check == 0){
            return redirect(url("backend/categorys/update/$id/?notify=name-exists"));
        }else
            DB::table("categories")->where("id","=",$id)->update(["name"=>$name,"parent_id"=>$parent_id]);
        return redirect(url("backend/categorys/?notify=update-success"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/categorys/createPost");
        //gọi view, truyền dữ liệu ra view
        return view("admin.CategorysCreate",["action"=>$action]);
    }
    //Create Post
    public function createPost(){
        $parent_id =request("parent_id");
        $name =request("name");
        $check = DB::table("categories")->where("name","=",$name)->Count();
        if(!$check == 0){
            return redirect(url("backend/categorys/?notify=name-exists"));
        }else
            DB::table("categories")->insert(["name"=>$name,"parent_id"=>$parent_id]);
        return redirect(url("backend/categorys/?notify=creat-success"));
    }
    //Delete
    public function delete($id){
        //delete bản ghi
        DB::table("categories")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/categorys/?notify=delete-success"));
    }
}
