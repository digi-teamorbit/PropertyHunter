<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Formcategory;
use App\Documentlibrary;
use Illuminate\Http\Request;
use Image;
use File;
use DB;

class DocumentlibraryController extends Controller
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 40;

            if (!empty($keyword)) {
                $documentlibrary = Documentlibrary::where('doc_title', 'LIKE', "%$keyword%")
                ->orWhere('file', 'LIKE', "%$keyword%")
                ->orWhere('Type', 'LIKE', "%$keyword%")
                ->orWhere('form_category', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $documentlibrary = Documentlibrary::paginate($perPage);
            }

            return view('admin.documentlibrary.index', compact('documentlibrary'));
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $form_category = Formcategory::pluck('name', 'id');
            return view('admin.documentlibrary.create',compact('form_category'));
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'doc_title' => 'required',
		
			
		]);

            $documentlibrary = new documentlibrary($request->all());
            $documentlibrary->form_category = $request->input('item_id'); 


            if ($request->hasFile('file')) {

                $file = $request->file('file');
                //make sure yo have image folder inside your public
                $resume_path = 'uploads/documentlibrarys/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

               //$request->file->move(public_path($resume_path) . DIRECTORY_SEPARATOR. $profileImage);
               $request->file->move(public_path('uploads/documentlibrarys/'), $profileImage);

                $documentlibrary->file = $resume_path.$profileImage;
            }
           $documentlibrary->save();

            return redirect('admin/documentlibrary')->with('flash_message', 'Documentlibrary added!');
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $documentlibrary = Documentlibrary::findOrFail($id);
            return view('admin.documentlibrary.show', compact('documentlibrary'));
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $documentlibrary = Documentlibrary::findOrFail($id);
             $form_category = Formcategory::pluck('name', 'id');
            return view('admin.documentlibrary.edit', compact('documentlibrary','form_category'));
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'doc_title' => 'required',
			
			
		]);
            $requestData = $request->all();
            $requestData['form_category'] = $request->input('item_id');
            

        if ($request->hasFile('file')) {
            
            $documentlibrary = documentlibrary::where('id', $id)->first();
            $image_path = public_path($documentlibrary->file); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }


             $file = $request->file('file');
            $fileNameExt = $request->file('file')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/documentlibrarys/');

            $request->file->move($pathToStore, $fileNameToStore);

             $requestData['file'] = 'uploads/documentlibrarys/'.$fileNameToStore;               
        }


            $documentlibrary = Documentlibrary::findOrFail($id);
             $documentlibrary->update($requestData);

             return redirect('admin/documentlibrary')->with('flash_message', 'Documentlibrary updated!');
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
        $model = str_slug('documentlibrary','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Documentlibrary::destroy($id);

            return redirect('admin/documentlibrary')->with('flash_message', 'Documentlibrary deleted!');
        }
        return response(view('403'), 403);

    }
}
