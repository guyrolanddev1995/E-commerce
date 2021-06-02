<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\CustomerFormRequest;
use App\User;
use Illuminate\Http\Request;
use \Carbon\Carbon;

class CustomerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $this->disableCustomerCompte($users);

        $this->setPageTitle('Clients', 'Liste des clients');
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setPageTitle('Ajouter un client', '');
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {
       User::create([
          'nom' => $request->nom,
          'prenom' => $request->prenom,
          'email' => $request->email,
          'password' => \Hash::make("$request->nom@$request->prenom"),
          'phone' => $request->phone,
          'pays' => $request->pays,
          'ville' => $request->ville,
          'commune' => $request->commune,
          'quartier' => $request->quartier,
          'activate_date' => $request->activate_date,
          'expire_date' => $request->expire_date
       ]);

       return $this->responseRedirect('admin.customers.index', 'Client ajouté avec succèss' ,'success',false, false);
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
    public function edit(User $customer)
    {
        $this->setPageTitle('Modification du client', $customer->nom);
       return view('admin.users.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, User $customer)
    {
        $code = $request->code ? $request->code : $customer->code;
        $customer->update([
          'code' => $code,
          'nom' => $request->nom,
          'prenom' => $request->prenom,
          'email' => $request->email,
          'phone' => $request->phone,
          'pays' => $request->pays,
          'ville' => $request->ville,
          'commune' => $request->commune,
          'quartier' => $request->quartier,
          'activate_date' => $request->activate_date,
          'expire_date' => $request->expire_date
        ]);

        return $this->responseRedirectBack('Client mise à jour avec succèss', 'success', false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

   public function activeCustomerCompte($id)
   {
       $customer = User::find($id);

       if($this->CompareDates($customer->expire_date))
       {
            return $this->responseRedirect('admin.customers.index','Impossible d\'activer le compte car le compte a expiré'); 
       }

       if($customer->code != null){
            $code = $customer->code;
       }else{
           $code = \Str::random(12);
       }

       $customer->update([
           'code' => $code,
           'status' => true
       ]);

       return $this->responseRedirectBack('Compte Client activé avec succèss', 'success', false, false);
   }

   /**
    * Verifie la date d'expiration du compte Client
    * @param Array|int $users
    * @return void
    */
   private function disableCustomerCompte($users)
   {
        foreach($users as $user)
        {
            if($this->CompareDates($user->expire_date))
            {
                $customer = User::find($user->id);
                $customer->update([
                    'status' => 0
                ]);
            }
        }
   }

   private function CompareDates($date)
   {
        if(Carbon::create($date)->lt(Carbon::now()))
        {
            return true;
        }
        else
        {
            return false;
        }
   }
}
