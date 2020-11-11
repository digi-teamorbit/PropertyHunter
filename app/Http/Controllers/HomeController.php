<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get();   
        
        $cms_about = DB::table('pages')->where('id', 3)->first();
        $cms_home2 = DB::table('pages')->where('id', 2)->first();
        $residency = DB::table('pages')->where('id', 6)->first();
        $commercial = DB::table('pages')->where('id', 7)->first();
        $pop = DB::table('pages')->where('id', 8)->first();


        $products = DB::table('products')->get()->take(10);

        return view('welcome', compact('banner', 'cms_about','cms_home2','residency','commercial','pop'));
    }
    

    public function contactUsSubmit(Request $request)
    {
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->fname;
        $inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
       // $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }

        public function About(){
            $cms_about = DB::table('pages')->where('id', 3)->first();
            return view('about',compact('cms_about'));

        }  public function Blog(){
            $blog =DB::table('blogs')->get();
            return view('blog',compact('blog'));

        }  public function BlogDetail($id){

            $BlogDetail=DB::table('blogs')->where('id',$id)->first();

            return view('Blogdetail',compact('BlogDetail'));

        }  public function Property(){

                $type=$_GET['name'];

                if($type=='Residential'){

                     $property = DB::table('properties')->where('category', '=', 1)->get()->toArray();
                   // dd($property);

                }else{

                $property = DB::table('properties')->where('category', '=', 2)->get()->toArray();
              }
            return view('properties',compact('property'));

        }  public function Properties($id){
            $PropertyDetail=DB::table('properties')->where('id',$id)->first();
            $images = DB::table('product_imagess')->where('product_id',$id
        )->get();
//dd($images);
            return view('propertiesDetail',compact('PropertyDetail','images'));

        } 

        public function Document(){

            $cate =DB::table('formcategories')->get();
            return view('documentlibrary',compact('document','cate'));

        }


         /*public function Residential(){

            $property = DB::table('properties')->where('category', '=', 2)->get()->toArray();
            return view('Residential',compact('property'));

        }*/ /*public function propertydetail(){
            return view('propertyDetail');

        } */ /*public function Search(){
            return view('search');

        }  */

}
