<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newrecord;
class newrecordcontroller extends Controller
{
    
    public function index()
    {
        //
        $posts=newrecord::all();
        return view('customers',compact('posts'));
    }

    
    public function create()
    {
        //
    }
    public function showextra()
    {
        $posts=newrecord::all();
        return view('users.checkout',compact('posts'));
    }
    
    public function store(Request $request)
    {
        
        $post=new newrecord([
        'firstname'=>$request->get('firstname'),
         'middlename'=>$request->get('middlename'),
        'lastname'=>$request->get('lastname'),
        'city'=>$request->get('city'),
        'state'=>$request->get('state'),
        'zip'=>$request->get('zip'),
        'optional'=>$request->get('optional'),
        'email'=>$request->get('email'),
        'profession'=>$request->get('profession'),
        'age'=>$request->get('age'),
        'type'=>$request->get('type'),
        'guestno'=>$request->get('guestno'),
        'noroom'=>$request->get('noroom'),
       'alloted'=>$request->get('alloted'),
        'spa'=>$request->get('spa'),
        'ac'=>$request->get('ac'),
        'parking'=>$request->get('parking'),
        'food'=>$request->get('food'),
        'transport'=>$request->get('transport')
             ]);
        $post->save();
        
        //
/*
        return redirect('confirmin',);
*/
        return view('confirm.in',compact('post'));
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
        
        /* $record = DB::table('newrecords')->get();

        return view('confirm.in')->with('users', $record);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        dd($id);
//        //
////        $post=newrecord::find($id);
////        return view('updatein',compact('post'));
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$new)
    {
        //
         $post=new newrecord([
        'firstname'=>$request->get('firstname'),
        'middlename'=>$request->get('middlename'),
        'lastname'=>$request->get('lastname'),
        'city'=>$request->get('city'),
        'state'=>$request->get('state'),
        'zip'=>$request->get('zip'),
        'optional'=>$request->get('optional'),
        'email'=>$request->get('email'),
        'profession'=>$request->get('profession'),
        'age'=>$request->get('age'),
        'type'=>$request->get('type'),
        'guestno'=>$request->get('guestno'),
        'noroom'=>$request->get('noroom'),
       'alloted'=>$request->get('alloted'),
        'spa'=>$request->get('spa'),
        'ac'=>$request->get('ac'),
        'parking'=>$request->get('parking'),
        'food'=>$request->get('food'),
        'transport'=>$request->get('transport')
             ]);
//        $new->save();
//    
        $post->save();
       
                return view('confirm.in',compact('post'));

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
        $post=newrecord::find($id);
        $post->delete();
        return view('confirm.out');
    }
    
    public function edit(newrecord $new)
    {

        //
//        $post=newrecord::find($new);
        return view('update.updatein',compact('new'));
    }
}
