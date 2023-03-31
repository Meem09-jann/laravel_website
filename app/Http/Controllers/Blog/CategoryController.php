<?php

namespace App\Http\Controllers\Blog;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Constants\Ticon;

use App\Models\Blog\Blog;
use App\Models\Blog\Writer;
use App\Models\Blog\Category;
use App\Models\Blog\BlogCatLink;
use App\Models\Blog\Admin;
use Session;

class CategoryController extends Controller
{


    //GENERATE HEADER ATTRIBUTE
    public function headerAttributeGenerate($header){
        $data=new Ticon();
        //EXTRACT VISITORS IP
        $visitorsIp =$data->getVisitorsIp();
        //FETCH VISITOR'S COUNTRY USING IP
        $visitorsCountry = $data->ip_info( $visitorsIp , "countrycode" );
        //SEND POP ORDER BASED ON COUNTRY
        if($visitorsCountry == "Bangladesh" )
        {
            $data->showAwsBanner = 1;
        }
        else
        {
            $data->showAwsBanner = 0;
        }
        $data->alert= 'abc';
        $data->cls_header = $header;
        $data->user_lan=$data->prefer_language();
        return $data;
    }

    //CATEGORY SLUG PROCESSING
    function slug($text)
    {
        $text=preg_replace('~[^\\pL\d]+~u','-',$text);
        $text=trim($text,'-');
        
        $text=iconv('utf-8','us-ascii//TRANSLIT',$text);
        
        $text=strtolower($text);
        $text= preg_replace('~[^-\w]+~', '', $text);
        if(empty($text))
        {
            return 'n-a';
        }
        return $text;
    }

    //NEW CATEGORY CREATE BY ADMIN
    function categoryCreate(Request $req)
    {
        $req->validate([
        'categoryName'=>'required|unique:categories,categoryName',
        ]);

        $data= new Category;
        $data->categoryName=ucfirst($req->categoryName); //->uNmae(db)=->name(input)      
        $data->categorySlug=$this->slug( $data->categoryName);    
        $data->save();
        session()->flash('message','Item added successfully');
        return redirect()->back();//page url
    }

    //CATEGORY EDIT PAGE SHOW
    function categoryEditPageShow(Request $req, $id)
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");      
        $identity="Category Edit";
        $category= Category::find($id);
        return view('ticon/blog/category/categoryUpdate',['identity'=>$identity,'category'=>$category, 'data'=>$data]);
    }
    
    //CATEGORY UPDATE BY ADMIN
    function categoryUpdate(Request $req, $id)
    {
        $req->validate([
        'categoryName'=>'required|unique:categories,categoryName,'.$id,       
        ]);
        $category=Category::find($id);
        $category->categoryName=ucfirst($req->categoryName);
        $category->categorySlug=$this->slug( $category->categoryName);
        $category->update();
        session()->flash('message','Item updated successfully');
        return redirect('/blog/admin/categories');
    }

    //CATEGORY DELETE VIEW
    function categoryDeletePageShow(Request $req, $id)
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");      
        $identity="Category Delete";
        //FETCHING SPECIFIC CATEGORY
        $category= Category::find($id);
        return view('ticon/blog/category/categoryDelete',['identity'=>$identity,'category'=>$category, 'data'=>$data]);
    }

    //CATEGORY DELETE BY ADMIN
    public function deleteCategory($id)
    {
        //CATEGORY DELETE
        $posts=Category::find($id)->delete();
        session()->flash('dltmessage','Item deleted successfully');
        return redirect('/blog/admin/categories');
    }

}
