<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TreeStructure;
use Vendor\BlueM\Tree; 
use App\Http\Requests\ValidatedRequest;

class TreeStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tree_structures = TreeStructure::all();
        $tree = new \BlueM\Tree($Tree_structures->toArray());
        $nodes = $tree->getNodes();

    
        

        return view('treestructure.index', [
            'nodes' => $nodes,
            'tree' => $tree,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidatedRequest $request)
    {    

        // $request = $request->validate(['name' => 'required|max:30',]);

            TreeStructure::create($request->all());
    
            return redirect(route('TreeStructure.index'));
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
      
    }

    public function Myupdate(ValidatedRequest $request)
    {
        
        // $request = $request->validate(['name' => 'required|max:30',]);

        $old_name=$request->input('old_name');
        $update=TreeStructure::find($old_name);
        $update->update($request->all());
        return redirect(route('TreeStructure.index'));
    }

    public function Myupdate_2(Request $request)
    {
        $old_parent=$request->input('old_parent');
        $parent=$request->input('parent');
        
        if ($old_parent !== $parent) 
        {
            $update=TreeStructure::find($old_parent);
            $update->update($request->all());
        }

        return redirect(route('TreeStructure.index'));

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

    public function MyDestroy(Request $request)
    {

        $id_node=$request->input('id_node');
        $tree = TreeStructure::find($id_node);
        $tree->delete();

        
        return redirect(route('TreeStructure.index'));

    }
}
