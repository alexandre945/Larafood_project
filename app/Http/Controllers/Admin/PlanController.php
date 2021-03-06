<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use Illuminate\Support\Str;
use App\Models\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{

private $repository;

public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }

    public function index()
            {
                $plans = $this->repository->all();
                return view('admin.pages.plans.index', compact ('plans'));
            }
       public function create()
            {
               return view('admin.pages.plans.create',);
            }

       public function store(StoreUpdatePlan $request)
            {
                $data = $request->all();
                $data['url'] = Str::kebab($request->name);
                $this->repository->create($data);

                 return redirect()->route('plans.index');
            }
       public function show($url)
            {
                 $plan =  $this->repository->where('url',$url)->first();

                if (!$plan)

                return redirect()->back();

                return view('admin.pages.plans.show', compact('plan'));

            }

       public function destroy($url)
            {
                $plan = $this->repository->where('url',$url)->first();


                if (!$plan)

                return redirect()->back();

                $plan->delete();

                return redirect()->route('plans.index');

            }

       public function search(StoreUpdatePlan $request)
            {
                $plans = $this->repository->search($request->filter);

                return view('admin.pages.plans.index', compact('plans'));
            }

                public function  edit(Request $request, $url)
            {
                $plan = $this->repository->where('url',$url)->first();

                if(!$plan)
                return redirect()->back();


                return view('admin.pages.plans.edit', compact('plan'));
             }

             public function update(StoreUpdatePlan  $request, $url)
               {
                $plan = $this->repository->where('url',$url)->first();

                if(!$plan)
                return redirect()->back();


                $plan->update($request->all());
                return redirect()->route('plans.index');


               }
               public function finance()
               {
                   $plans = $this->repository->all();
                   return view('admin.pages.finance', compact ('plans'));
               }
               public function pay()
               {
                  return view('admin.pages.pay');
               }
               public function paypool( StoreUpdatePlan $request, $url)
               {
                  
                   $data = $request->all();
                    $data['url'] = Str::kebab($request->name,);
                   $this->repository->create($data);
   
                   return view('admin.pages.paypool');
               }


}
