<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\FlyersRequestController as FlyersRequest;

use App\Flyer;

use App\Http\Requests\AddPhotoRequest as AddPhotoRequest;

class FlyersController extends Controller
{
	
	
	public function __construct(){
		$this->middleware('auth', ['except' =>'show']);
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $flyers = Flyer::all();
        return view('pages.flyerList')->with(compact('flyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyersRequest $request, Flyer $flyers)
    {
        //
        
        
		
        $flyer = $request->all();
		$flyer['user_id'] = auth()->user()->id;
		$flyers->create($flyer);
		
		flash()->success('Congratulations !', "Your Flyer is successfully created !");
		
		
		return redirect()->back();
		
		//dd($flyer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($zip, $street)
    {
        //
        $street = str_replace('-', ' ', $street);
        $flyer =  Flyer::where(compact('zip','street'))->with('photos')->firstOrFail();
		
		return view('pages.show')->with(compact('flyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	
	
	
	public function addPhoto($zip, $street, AddPhotoRequest $request){
		
		
					
		$request->validate();
		
		$file = $request->file('file'); 
		$name = time().$file->getClientOriginalName();
		
		
		
		
		$file->move('public/photos/', $name);

		$img = \Image::make('public/photos/'.$name)->fit(200)->save('public/photos/tn_'.$name);
		

        $street = str_replace('-', ' ', $street);
        $flyer =  Flyer::where(compact('zip','street'))->first();
		
		return $flyer->photos()->create(array(
											'photo_path'=>'public/photos/'.$name, 
											'thumbnail_path' => 'public/photos/tn_'.$name
											));
		
		
	}
}
