<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class UsersController extends Controller
{
    //Read
    public function index(){
        //sử dụng đối tượng DB để truy vấn csdl
        /*
            DB::table("users") <=> select * from users
            orderBy("id","desc") <=> order by id desc
            paginate(4) <=> phân trang 4 bản ghi trên một trang
        */
        $data = DB::table("users")->orderBy("id","desc")->paginate(10);
        $action = url("backend/users/createPost");
        // $paginator = Paginator::make($data, $totalBrand, $perPage);
        //gọi view, truyền dữ liệu ra view
        return view("admin.UsersRead",["data"=>$data,"action"=>$action]);
    }
    //Update Get
    public function update($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("backend/users/updatePost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $record = DB::table("users")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("admin.UsersUpdate",["record"=>$record,"action"=>$action]);
    }
    public function personal($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("backend/users/personalPost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $record = DB::table("users")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("admin.Personal",["record"=>$record,"action"=>$action]);
    }
    public function personalPost($id){
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $type =request("type");
        $email =request("email");
        $username =request("username");
        $password = request("password");
        if (!request("avatar")==null) {
            $file = request("avatar");
            $file->move('../public/upload/user', $file->getClientOriginalName());
            $file_name= $file->getClientOriginalName();
            DB::table("users")->where("id","=",$id)->update(["avatar"=>$file_name,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"type"=>$type,"username"=>$username]);

        }
        DB::table("users")->where("id","=",$id)->update(["email"=>$email,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"type"=>$type,"username"=>$username]);
        //nếu password không rỗng thì update password
        if($password != ""){
            //mã hóa password
            $password = Hash::make($password);
            //update password
            DB::table("users")->where("id","=",$id)->update(["password"=>$password]);
        }
        //di chuyển đến url khác
        return redirect(url("backend/users/personal/$id/?notify=personal-success"));
    }
    //Update Post
    public function updatePost($id){
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $type =request("type");
        $email =request("email");
        $username =request("username");
        $password = request("password");
        if (!request("avatar")==null) {
            $file = request("avatar");
            $file->move('../public/upload/user', $file->getClientOriginalName());
            $file_name= $file->getClientOriginalName();
            DB::table("users")->where("id","=",$id)->update(["avatar"=>$file_name,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"type"=>$type,"username"=>$username]);

        }
        DB::table("users")->where("id","=",$id)->update(["email"=>$email,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"type"=>$type,"username"=>$username]);
        //nếu password không rỗng thì update password
        if($password != ""){
            //mã hóa password
            $password = Hash::make($password);
            //update password
            DB::table("users")->where("id","=",$id)->update(["password"=>$password]);
        }
        //di chuyển đến url khác
        return redirect(url("backend/users/?notify=update-success"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/users/createPost");
        //gọi view, truyền dữ liệu ra view
        return view("admin.UsersCreate",["action"=>$action]);
    }
    //Create Post
    public function createPost(){
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $type =request("type");
        $email =request("email");
        $username =request("username");
        $password = request("password");
        //mã hóa password
        $password = Hash::make($password);
        if (!request("avatar")==null) {
            $file = request("avatar");
            $file->move('../public/upload/user', $file->getClientOriginalName());
            $file_name= $file->getClientOriginalName();
        }
        else{
            $file_name="logo.png";
        }
        //kiểm tra xem email đã tồn tại trong csdl chưa, nếu chưa tồn tại thì mới cho update
        //Count() Đếm số bản ghi
        $check = DB::table("users")->where("username","=",$username)->Count();
        $checkemail = DB::table("users")->where("email","=",$email)->Count();
        if(!$check == 0){
            return redirect(url("backend/users/?notify=username-exists"));
        }
        elseif(!$checkemail ==0){
            return redirect(url("backend/users/?notify=email-exists"));
        }else
            DB::table("users")->insert(["avatar"=>$file_name,"email"=>$email,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"username"=>$username,"type"=>$type,"password"=>$password]);
        //di chuyển đến url khác
        return redirect(url("backend/users/?notify=creat-success"));
    }
    //Delete
    public function delete($id){
        //delete bản ghi
        DB::table("users")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/users/?notify=delete-success"));
    }
}
