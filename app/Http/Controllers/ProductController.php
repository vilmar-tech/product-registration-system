<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\ModelProduct;
use App\Models\User;
use App\Models\ModelCategory;

class ProductController extends Controller
{
    
    private $objUser;
    private $objProduct;
    private $objCategory;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objProduct=new ModelProduct();
        $this->objCategory=new ModelCategory();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->objCategory->all());
        $product=ModelProduct::paginate(5);
        return view('index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $cad=$this->objProduct->create([
       'descricao'=>$request->descricao,
       'codigo'=>$request->codigo,
       'price'=>$request->price,
       'categoria'=>$request->categoria,
       'id_user'=>$request->id_user
    ]);
    if($cad){
        return redirect('products');
    }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=ModelProduct::find($id);
        return view('show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=ModelProduct::find($id);
        $users=User::all();
        return view('create',compact('product','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        ModelProduct::where(['id'=>$id])->update([
            'descricao'=>$request->descricao,
            'codigo'=>$request->codigo,
            'price'=>$request->price,
            'categoria'=>$request->categoria,
            'id_user'=>$request->id_user
        ]);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=ModelProduct::destroy($id);
        return($del)?"sim":"não";
    }
}
