<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB, DataTables;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * AJAX | GET
     * route: users-yajra
     * name: users-yajra
     * */
    public function yajra(Request $request)
    {
        $resources = User::all();

        return DataTables::of($resources)
            ->addColumn('actions', function ($resource) {
                return '<a href="'.route('users.edit', $resource->id).'" class="btn btn-success px-3">Edit</button>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        // dd($user);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['resource'] = User::findOrFail($id);

        return view('users.edit', $data);
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
        $resource = User::findOrFail($id);
        $resource->update([
            'email' => $request['email'],
            'name' => $request['name']
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = User::findOrFail($id);
        $resource->delete();

        return redirect()->back();
    }

    /**
     * AJAX | POST
     * route: users.list
     * url: users-list
     */
    public function list(Request $request)
    {
        $data = User::where('name', 'like', "%{$request['keyword']}%")->get();

        return response()->json($data);
    }

    /**
     * AJAX | POST
     * route: users.datatable.manual
     * name: users.datatable.manual
     */
    public function manualDatatable(Request $request)
    {
        $limit = $request['length'];
        $offset = $request['start'];

        $count_query = "SELECT COUNT(*) AS count FROM users";
        $count = DB::select(DB::raw($count_query))[0]->count;

        $data_query = "
            SELECT * FROM users
            LIMIT {$offset},{$limit}
        ";
        $data = DB::select(DB::raw($data_query));
        foreach ($data as $index => $resource) {
            $resource->actions = '<a href="'.route('users.edit', $resource->id).'" class="btn btn-success px-3">Edit</button>';
        }

        return json_encode([
            'draw' => $request['draw'],
            'data' => $data,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
        ]);
    }
}
