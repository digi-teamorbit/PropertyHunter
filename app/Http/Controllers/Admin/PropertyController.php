<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Property;
use App\imagetable;
use Illuminate\Http\Request;
use Image;
use File;
use DB;

class PropertyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $property = Property::where('category', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")
                ->orWhere('Short_description', 'LIKE', "%$keyword%")
                ->orWhere('Property price', 'LIKE', "%$keyword%")
                ->orWhere('Permit Number', 'LIKE', "%$keyword%")
                ->orWhere('Licence Number', 'LIKE', "%$keyword%")
                ->orWhere('Registration Number', 'LIKE', "%$keyword%")
                ->orWhere('BEDROOMS', 'LIKE', "%$keyword%")
                ->orWhere('BATHROOMS', 'LIKE', "%$keyword%")
                ->orWhere('SIZE', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $property = Property::paginate($perPage);
            }

            return view('admin.property.index', compact('property'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $items = Category::pluck('name', 'id');
            return view('admin.property.create',compact('items'));
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $property = new property($request->all());

            $property->category = $request->input('item_id'); 
            $property->rating = $request->input('rating');


             $file = $request->file('image');
           
            //make sure yo have image folder inside your public
            $destination_path = 'uploads/propertys/';
            $profileImage = date("Ymdhis").".".$file->getClientOriginalExtension();
           
            Image::make($file)->save(public_path($destination_path) . DIRECTORY_SEPARATOR. $profileImage);

            $property->image = $destination_path.$profileImage;
            $property->save();
            
            if(! is_null(request('images'))) {
                
                $photos=request()->file('images');
                foreach ($photos as $photo) {
                    $destinationPath = 'uploads/propertys/';
                   
                    $filename = date("Ymdhis").uniqid().".".$photo->getClientOriginalExtension();
                    //dd($photo,$filename);
                    Image::make($photo)->save(public_path($destinationPath) . DIRECTORY_SEPARATOR. $filename);
                  
                    DB::table('product_imagess')->insert([
                        
                        ['image' => $destination_path.$filename, 'product_id' => $property->id]
                       
                    ]);
                    
                }
            
            }

            /*if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $property_path = 'uploads/propertys/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($property_path) . DIRECTORY_SEPARATOR. $profileImage);

                $property->image = $property_path.$profileImage;
            }*/
            
           // $property->save();
              
            return redirect('admin/property')->with('flash_message', 'Property added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $property = Property::findOrFail($id);
            return view('admin.property.show', compact('property'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $items = Category::pluck('name', 'id');
            $product_images = DB::table('product_imagess')
                          ->where('product_id', $id)
                          ->get();

            $property = Property::findOrFail($id);
            return view('admin.property.edit', compact('property','items','product_images'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            $requestData['category'] = $request->input('item_id');
            $requestData['rating'] = $request->input('rating');

        if ($request->hasFile('image')) {
            
            $property = property::where('id', $id)->first();
            $image_path = public_path($property->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/propertys/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/propertys/'.$fileNameToStore;               
        }

            if(! is_null(request('images'))) {
                
                $photos=request()->file('images');
                foreach ($photos as $photo) {
                    $destinationPath = 'uploads/propertys/';
                   
                    $filename = date("Ymdhis").uniqid().".".$photo->getClientOriginalExtension();
                    //dd($photo,$filename);
                    Image::make($photo)->save(public_path($destinationPath) . DIRECTORY_SEPARATOR. $filename);
                  
                    DB::table('product_imagess')->insert([
                        
                        ['image' => $destinationPath.$filename, 'product_id' => $id]
                       
                    ]);
                    
                }
        
            }
       
            $property = Property::findOrFail($id);
             $property->update($requestData);




             return redirect('admin/property')->with('flash_message', 'Property updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('property','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Property::destroy($id);

            return redirect('admin/property')->with('flash_message', 'Property deleted!');
        }
        return response(view('403'), 403);

    }
}
