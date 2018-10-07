<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据库的信息
        //单条件查询   通过名字关键字查询
        $uname = $request->input('uname');
        
        $rs = User::where('uname','like','%'.$uname.'%')
                        ->paginate($request->input('num',10));

        //后台管理的浏览页面
        return view('admin.user.index',[
            'title'=>'管理用户浏览',
            'request'=>$request,
            'uname'=>$uname,
            'rs'=>$rs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //后台管理添加页面
        return view('admin.user.create',['title'=>'管理员添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取提交的数据
        $rs = $request->except('_token','upwd2','profile','uploadfile');

        // 加入时间
        $rs['addtime'] = time();

        //密码加密  hash
        $rs['upwd'] = encrypt($request->input('upwd'));


        //头像上传
        if ($request->hasFile('profile')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀名
            $hz = $request->file('profile')->getClientOriginalExtension();

            //移动到指定文件
            $request->file('profile')->move('./uploads/',$name.'.'.$hz);


            $rs['profile'] = '/uploads/'.$name.'.'.$hz;
        }

        

        // dd($rs);

        User::create($rs);

        
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

        //通过id获取数据
        $res = User::find($id);

        return view('admin.user.edit',[
            'res'=>$res
        ]);
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
        //获取传过来的信息
        $rs = $request->except('_token','_method');

        //头像上传
        if ($request->hasFile('profile')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀名
            $hz = $request->file('profile')->getClientOriginalExtension();

            //移动到指定文件
            $request->file('profile')->move('./uploads/',$name.'.'.$hz);


            $rs['profile'] = '/uploads/'.$name.'.'.$hz;
        }


        try{
           
            $res = User::where('id',$id)->update($rs);


            if($res){

                return redirect('/admin/user')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //获取id信息
        
    }
}
