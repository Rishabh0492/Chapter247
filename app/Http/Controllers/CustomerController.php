<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DataTables;
use DB;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('customers.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email|unique:users,email']);

        $input = $request->all();
        $customer = Customer::create($input);
        return redirect()
            ->route('getCustomerList')
            ->with('success', 'Customer created successfully');

    }

    /**
     * list all customers.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getCustomerData(Request $request)
    {
        try {
        $customers = DB::table('customers')->select('*');
        return Datatables::of($customers)->addIndexColumn()->editColumn('created_at', function ($customers)
        {
            return $customers->created_at;
        })
        ->addColumn('action', function ($customers)
        {
            $btn = ' <a href="customer/delete/'.$customers->id.' " data-toggle="tooltip"  data-id="' . $customers->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

            return $btn;
        })->rawColumns(['action'])
            ->make(true);
            } catch (Exception $e) {
        report($e);

        return false;
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
        $customer=Customer::find($id);
        $customer->delete();
        return redirect()
            ->route('getCustomerList')
            ->with('success', 'Customer Delete successfully');

    }
}

