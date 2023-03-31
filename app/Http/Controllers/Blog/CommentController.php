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
use App\Models\Blog\Comment;
use App\Models\Blog\Admin;

use Session;
class CommentController extends Controller
{

//COMMENT CREATE
    function commentAdd(Request $req, $blogId)
    {

      $req->validate([
      'commentUserName'=>'required',
      'commentUserEmail'=>'required',
      'commentMsg'=>'required',
      ]);      

      //COMMENTER PROCESSING
      $data= new Comment;
      $data->name=ucfirst($req->commentUserName);
      $data->email=$req->commentUserEmail;
      $data->subject=$req->commentSubject;
      $data->website=$req->commentWebsite;
      $data->body=$req->commentMsg;
      $data->blog_id=$blogId;
      $data->save();
    
      //COMMENT BLOG RELATION PROCESSING
      // $cmnt= new BlogCmntLink;
      // $cmnt->comment_id= $data->id;
      // $cmnt->blog_id= $blogId;
      // $cmnt->save();

      //BACK TO THE CURRENT BLOG DETAILS USING SESSION
      Session::has('item');                   
      $item=Session::get('item');                  
      $blogSlug=$item->blogSlug;

      session()->flash('message','Your comment has been submited successfully for admin approvel!');
      return redirect()->back();//page url
    }

//COMMENT STATE CHANGE BY ADMIN
    function commentStateChange(Request $req, $id, $state)
    {   
        $cmntId=$id;
        $data=Comment::find($id);
        $data->state=$state;
        $data->update();
        session()->flash('message','State changed successfully');
        return redirect('/blog/admin/comments');
   
    }

//COMMENT DELETE  BY ADMIN
    function commentDelete(Request $req, $id)
    {   
      Comment::find($id)->delete();
      session()->flash('dltmessage','Comment deleted successfully');
      return redirect('/blog/admin/comments');
        
    }
    
}
