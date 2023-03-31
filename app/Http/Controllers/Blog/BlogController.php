<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Constants\Ticon;

use App\Models\Blog\Blog;
use App\Models\Blog\Writer;
use App\Models\Blog\Category;
use App\Models\Blog\Comment;
use App\Models\Blog\BlogCatLink;
use App\Models\Blog\Admin;
use App\Models\Blog\Blog_Tag;
use App\Models\Blog\Tag;


use Session;

class BlogController extends Controller
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

    //BLOG SLUG CREATE FUNCTION
    function createSlug($text)
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

    //TICON BLOG PAGE
    public function blogsShow()
  	{
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //FEATCHING ALL BLOGS 
      $blogs=Blog::orderBy('id', 'DESC')->get();

      //FOR CATEGORY WISE TOTAL BLOG SHOW
      $categories= Category::get();

      //LANGUAGE CHANGE
      if( $data->user_lan =='kr'){

          $identity = "블로그";
          return view ('ticon/blog/blog',['data'=>$data,'identity'=>$identity,'blogs'=>$blogs, 'categories'=>$categories]);

      }else{
          $identity = "Blog";
          return view ('ticon/blog/blog',['data'=>$data,'identity'=>$identity,'blogs'=>$blogs, 'categories'=>$categories]);
      }


    }

    //TICON BLOG CATEGORY PAGE
    function blogsShowByCategory($catSlug)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //REQUESTED SPECIFIC CATEGORY  BY SLUG
      $selectedCategory= Category::where('categories.categorySlug',$catSlug)->first();

      //FOR CATEGORY WISE TOTAL BLOG SHOW
      $totalApproveBlogs=Blog::where('blogs.state',"Approve")->count();
      $categories= Category::get();

      //LANGUAGE CHANGE
      if( $data->user_lan =='kr'){
        $identity = "블로그";
        return view('ticon/blog/categoryFilter',['identity'=>$identity,'data'=>$data,'selectedCategory'=>$selectedCategory, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);

      }else{
          $identity = "Blog";
          return view('ticon/blog/categoryFilter',['identity'=>$identity,'data'=>$data,'selectedCategory'=>$selectedCategory, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);
      }

    }


    //TICON BLOG WRITER PAGE  
    function blogsShowByWriter( $writerId)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");
      
      //REQUESTED SPECIFIC WRITER
      $selectedWriter= Writer::where('writers.id',$writerId)->first();

      //FOR CATEGORY WISE TOTAL BLOG SHOW
      $totalApproveBlogs=Blog::where('blogs.state',"Approve")->count();
      $categories= Category::get();

      //LANGUAGE CHANGE
      if( $data->user_lan =='kr'){

          $identity = "블로그";
          return view('ticon/blog/writerFilter',['identity'=>$identity,'data'=>$data,'selectedWriter'=>$selectedWriter,'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);

      }else{
          $identity = "Blog";
          return view('ticon/blog/writerFilter',['identity'=>$identity,'data'=>$data,'selectedWriter'=>$selectedWriter, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);
      }
    }


    //TICON BLOG WRITER PAGE  
    function blogsShowByTag( $tagSlug)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //REQUESTED SPECIFIC CATEGORY  BY SLUG
      $selectedTag= Tag::where('tags.tagSlug',$tagSlug)->first();

      //FOR CATEGORY WISE TOTAL BLOG SHOW
      $totalApproveBlogs=Blog::where('blogs.state',"Approve")->count();
      $categories= Category::get();

      //LANGUAGE CHANGE
      if( $data->user_lan =='kr'){
        $identity = "블로그";
        return view('ticon/blog/tagFilter',['identity'=>$identity,'data'=>$data,'selectedTag'=>$selectedTag, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);

      }else{
          $identity = "Blog";
          return view('ticon/blog/tagFilter',['identity'=>$identity,'data'=>$data,'selectedTag'=>$selectedTag, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);
      }
    }


    //TICON BLOG DETAILS PAGE
    function blogDetailShow(Request $req, $blogSlug)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");
      
      $blog=Blog::where('blogs.blogSlug',$blogSlug)->first();
      if(empty($blog)){
        session()->flash('dltmessage','Opps! Blog does not exist');
        return redirect(('/blog'));
      }
      
      //CURRENT BLOG IN TO SESSION
      //AFTER COMMENT WILL RETURN TO THIS SPECIFIC BLOG DETAILS PAGE
      $req->session()->put('item', $blog);
      //FOR CATEGORY WISE TOTAL BLOG SHOW
      $totalApproveBlogs=Blog::where('blogs.state',"Approve")->count();
      $categories= Category::get();

      //LANGUAGE CHANGE
      if( $data->user_lan =='kr'){
          // $identity = $blog->title;
          $identity = "Blog";
          return view('ticon/blog/details',['identity'=>$identity,'data'=>$data,'blog'=>$blog, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);

      }else{
          // $identity = $blog->title;
          $identity = "Blog";
          return view('ticon/blog/details',['identity'=>$identity,'data'=>$data,'blog'=>$blog, 'categories'=>$categories,'totalApproveBlogs'=>$totalApproveBlogs]);
      }

    }


    //BLOG ADD PAGE SHOW
    function addBlogPageShow(Request $req)
    {
      //WRITERS STATUS CHECK
      $writer= Auth::guard('writer')->user()->user_type;
      if($writer != "active"){
        session()->flash('dltmessage','Opps! You are not allow to add new Blogs');
        return redirect('/blog/writer/dashboard');
      }
      else{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");
        $identity = "Blog Add";

        $categories= Category::get();
        return view('ticon/blog/blogadd',['identity'=>$identity,'categories'=>$categories,'data'=>$data]);
      }
    }
  

    //BLOG ADD BY WRITER
    function addNewBlog(Request $req)
    {
      //FORM VALIDATION
      $req->validate([
      'title'=>'required|unique:blogs,title',
      'blogImage'=>'required|mimes:jpeg,jpg,png|dimensions:width=800,height=400',
      'intro'=>'required|max:300',
      'details'=>'required',
      'categories'=>'required',
      ]);

      //WRITER ID BY AUTH SESSION
      $writerId= Auth::guard('writer')->user()->id;
      //DATA GENERATING FOR NEW BLOG
      $blog= new Blog;
      $blog->title=$req->title;
      $blog->intro=$req->intro;
      $blog->tag=$req->tags;
      $blog->details=$req->details;
      $blog->writer_id=$writerId;
      $blog->blogSlug=$this->createSlug( $blog->title);
      //IMAGE PROCESSING
      $image=$req->file('blogImage');
      $image_name=$image->getClientOriginalName();
      $image_new_name= time().'-'.$image_name;
      $folder="ticon-blog_cover_image/";
      $image->move($folder, $image_new_name);
      $imageUrl= $folder. $image_new_name;
      $blog->coverImage=$imageUrl;
      //BLOG SAVING TO DATA BASE
      $blog->save();


      //TAG DATA PROCESSSING
      if($req->has('tags'))
      {
        $tags = explode(",", $req->tags);
        $tags_id = null;
        
        foreach ($tags as $tag){
          $tag_model = Tag::where('tagName', $tag)->first();

          if($tag_model){
            $tags_id=$tag_model->id;
          }else{
            $tagSlug=$this->createSlug($tag);
            $tags_id= Tag::create(['tagName'=>$tag,'tagSlug'=>$tagSlug ])->id;
          }
          //ADDING RELATION TO PIVOT TABLE BLOG_TAG
          $blog->tags()->attach($tags_id);
          //Blog_Tag::create(['blog_id'=> $blog->id,'tag_id'=>  $tags_id ]);
        }
      }

      //CATEGORY DATA PROCESSSING
      if(count($req->categories)>0)
      {
        foreach($req->categories as $category)
        {
          //ADDING PIVOT RELATION
          $blog->categories()->attach($category);
        }
      }

      session()->flash('message','Your blog has been submited successfully for review');
      return redirect('/blog/writer/blogs');//page url
    }


    //BLOG UPDATE PAGE SHOW
    function blogEditPageShow(Request $req, $blogId)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");
      $identity = "Blog";

      $categories= Category::get();
      $blog= Blog::find($blogId);
      //FETCHING PREVIOUS CATEGORY OF THIS BLOG
      $currentBlogCategories=$blog->categories->toArray();
      //FEACTHING ONLY ID COLUMN
      $categoryIdArray=array_column($currentBlogCategories,"id");
      return view('ticon/blog/blogedit',['identity'=>$identity,'blog'=>$blog,'categories'=>$categories,'categoryIdArray'=>$categoryIdArray,'data'=>$data]);
    }


    //BLOG UPDATE BY WRITER
    function blogUpdate(Request $req, $blogId)
    {
      //FORM VALIDATION
      $req->validate([
        'details'=>'required',
        'categories'=>'required',
        'intro'=>'required|max:300',
        'title'=>'required|unique:blogs,title,'.$blogId,
      ]);

      $blog=Blog::find($blogId);
      $blog->title=$req->title;
      $blog->intro=$req->intro;
      $blog->details=$req->details;
      $blog->blogSlug=$this->createSlug( $blog->title);

      //UPDATE NEW IMAGE
      if($req->blogImage != null){
        $req->validate([
          'blogImage'=>'required|mimes:jpeg,jpg,png|dimensions:width=800,height=400',
        ]);

        //OLD IMAGE PATH
        $path=$req->oldImage;
        //CHECK IF OLD IMAGE EXIST
        if(File::exists(public_path($path))){
          //DELETE IF OLD IMAGE EXIST
          File::delete(public_path( $path));
        } 
        //NEW IMAGE PROCESSING
        $image=$req->file('blogImage');
        $image_name=$image->getClientOriginalName();
        $image_new_name= time().'-'.$image_name;
        $folder="ticon-blog_cover_image/";
        $image->move($folder, $image_new_name);
        $imageUrl= $folder. $image_new_name;
        //SET NEW IMAGE URL TO DATA
        $blog->coverImage=$imageUrl;
      }
      //UPATEING BLOG
      $blog->update();
      $currentBlogId=$blogId;

      //CATEGORY PROSSESING 
      //NEWLLY SELECTED CATEGORIES
      $newCategories=$req->categories;
      //EXISTING CATEGORIES
      $existingCategories=$blog->categories;
      //ARRAY OF EXISTING CATEGORIES TO AVOID ADDING
      $categoriesToAvoid=array();
      //AVOID OR DELETE OLD CATEGORIES
      foreach($existingCategories as $oldCategory)
      {
        //CHECK IF ANY OLD CATEGORY NOT EXIXIT IN NEWLLY SELECTED CATEGORIES
        if(!in_array($oldCategory->id, $newCategories)){
          //IF OLD CATEGORY NOT FOUND IN NEWLLY SELECTED THEN DELETE OLD ONE
          $blog->categories()->detach($oldCategory->id);
        }else{
          //IF OLD CATEGORY FOUND IN NEWLLY SELECTED THEN PUSH OLD ONE TO AVOIDABLE ARRAY
          array_push($categoriesToAvoid, $oldCategory->id);
        }
      }
      //NEW CATEGORY RELATION ADDING
      if(count($newCategories)>0)
      {
        foreach($newCategories as $category)
        {
          //CHECK IF CATEGORY NOT IN AVOIDABLE ARRAY  
          if(!in_array($category, $categoriesToAvoid))
          { 
            $blog->categories()->attach($category);
          } else { 
            //Avoid 
          }
        }
      }

      //TAG DATA PROCESSSING
      $existingTags=$blog->tags->toArray();
      $tagNameArray=array_column($existingTags,"tagName");
      $tagsToAvoid=array();

      if($req->has('tags'))
      {
        $newTags = explode(",", strtolower($req->tags));
        $tags_id = null;
        
        foreach($tagNameArray as $oldTag)
        {
          //CHECK IF ANY OLD CATEGORY NOT EXIXIT IN NEWLLY SELECTED CATEGORIES
          if(!in_array($oldTag, $newTags)){
            //IF OLD TAG NOT FOUND IN NEWLLY SELECTED THEN DELETE OLD ONE $blog->tags()->attach($tags_id);
            //Blog_Tag::where('blog_id',$currentBlogId)->where('category_id', $oldTag->id)->delete();
          }else{
            //IF OLD TAG FOUND IN NEWLLY SELECTED THEN PUSH OLD ONE TO AVOIDABLE ARRAY
            array_push($tagsToAvoid, $oldTag);
          }
        }

        foreach ($newTags as $tag)
        {
          // dd($tag);
          $tag_model = Tag::where('tagName', $tag)->first();
          //CHECK IF THIS TAG ALREADY EXIXIT IN TAG MODEL
          if($tag_model && (!in_array($tag, $tagsToAvoid))){
            //ADDING PIVOT RELATION
            $blog->tags()->attach($tag_model->id);
            //Blog_Tag::create(['blog_id'=> $blog->id,'tag_id'=>$tag_model->id ]);
          } 
          elseif(!$tag_model && (!in_array($tag, $tagsToAvoid)))
          {
            //CREATE NEW TAG AND SET ID TO ADD RELATION
            $tagSlug=$this->createSlug($tag);
            $tags_id= Tag::create(['tagName'=>strtolower($tag),'tagSlug'=>$tagSlug ])->id;
            //ADDING PIVOT RELATION
            $blog->tags()->attach($tags_id);
          }
        }
      }

      session()->flash('message','Blog updated successfully');
      return redirect('/blog/writer/blogs');
    }


    //BLOG STATE CHANGE BY ADMIN
    function blogStateChange(Request $req, $id,$state)
    {
        // dd($state);
        $blogId=$id;
        $blog=Blog::find($id);
        $blog->state=$state;
        $blog->update();
        session()->flash('message','State changed successfully');
      return redirect('/blog/admin/blogs');
    }


    //BLOG DELETE PAGE SHOW
    function blogDeletePageShow( Request $req, $id)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");
      $identity = "Blog";

      $blogs= Blog::where('blogs.id',$id)->get();
      return view('ticon/blog/blogdelete',['identity'=>$identity,'blogs'=>$blogs,'data'=>$data ]);
    }


    //BLOG DELETE BY ADMIN
    function deleteBlog(Request $req ,$blogId)
    { 
      $posts=Blog::find($blogId);
      $blog->categories()->detach();
      $blog->tag()->detach();
      $posts->delete();
      session()->flash('dltmessage','Blog deleted successfully');
      return redirect('/blog/admin/blogs');
    }


    //BLOG SEARCH BY ADMIN
    public function search(Request $req)
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");
      $identity = "Blog";

      $items=Blog::where('state','like','%'.$req->input('search').'%')->orWhere('title','like','%'.$req->input('search').'%')->paginate(8);

      return view('ticon/blog/admin/search',['identity'=>$identity,'items'=>$items,'data'=>$data]);
    }

}
