<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use Illuminate\Http\Request;
use App\Models\Models\Finance;

class FinanceController extends Controller
{
    private $repository;
    
    public function __construct(Finance $finance)
        {
            $this->repository = $finance;
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->repository->all();
        return view('admin.pages.paypool', compact ('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function create()
    {
        
         $this->repository->all();
           
            return view('admin.pages.pay');  
        
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       public function store(StoreUpdatePlan $request)
       
    {
        $name = $request->name;
        if(!$name){
            $data = $request->all();
            $this->repository->create($data);
        return redirect()->route('plans-finance');
        }else{
            return redirect()->route('plans-finance')->with('mensagem', 'usuario nâo exite');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finance = $this->repository->where('id',$id)->first();
        
        

        return view('admin.pages.editar', compact('finance'));
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
        $finance = $this->repository->find($id);
        
        $finance->update($request->all());

        return redirect()->route('plans-finance');
           
    }

    /**
     * Remove the specified resource from storage.
     ** 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $finance = (new Finance())->find($id)->delete();
        
        return redirect()->route('plans-finance');
    }
}