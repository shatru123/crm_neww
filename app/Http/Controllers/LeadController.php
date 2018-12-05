<?php

namespace App\Http\Controllers;

use App\models\Lead;
use App\User;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    
    public function index()
    {
        //
            $leads=Lead::all();

        return view('admin.leads.index',compact('leads'));
    }

   
    public function create()
    {
        $users=User::pluck('name', 'id');
        return view('admin.leads.create',compact('users'));
    }

    public function edit($id)
    {
        $lead=Lead::findOrFail($id);
        $users=User::pluck('name', 'id');
        return view('admin.leads.edit',compact('lead','users'));

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:10',
            'alt_mobile' => 'required|min:10',
            'address' => 'required',
        
        ]);
        //
        $input=$request->all();
        
         $leads=new Lead();
        $leads->create($input);

        return redirect('/admin/leads');



    }



    public function show(Lead $driver)
    {
        //
    }

    


    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:10',
            'alt_mobile' => 'required|min:10',
            'address' => 'required',

        ]);

        $input=$request->all();
      

        Lead::whereId($id)->first()->update($input);

        return redirect('/admin/leads');
    }

    
    public function destroy($id)
    {
    
        $leads = Lead::findOrFail($id);


        $leads->delete();

        return redirect('/admin/leads');
    }

}
