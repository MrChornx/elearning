<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    protected $table = "posts";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    public function subject(){
        return $this->belongsTo('App\Subject', 'subject_id');
    }

    public function files(){
        return $this->hasMany('App\File', 'post_id');
    }


//    public function documentation(Request $request){
//        //var_dump($request->file('pirobebi'));
//        //var_dump($request->file('tarifebi'));
//        if(!empty($request->file('pirobebi'))){
//            $request->file('pirobebi')->move(
//                base_path() . '/public/documents/pdf/',"AGREEMENT_2016.pdf"
//            );
//        }
//        if(!empty($request->file('pirobebi_cgc'))){
//            $request->file('pirobebi_cgc')->move(
//                base_path() . '/public/documents/pdf/',"AGREEMENT_2016_CGC.pdf"
//            );
//        }
//        if(!empty($request->file('tarifebi'))){
//            $request->file('tarifebi')->move(
//                base_path() . '/public/documents/pdf/',"paketebi_arxebi.pdf"
//            );
//        }
//        return Redirect::to(url()."/upload_documents")->with('docmsg','დოკუმენტაცია წარმატებით აიტვირთა');
//
//    }



}
