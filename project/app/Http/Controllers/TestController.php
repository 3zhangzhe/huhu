<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * 请求的相关操作
     */
    public function getRequest(Request $request)
    {   
        //获取请求的路径
        $path = $request->path();
        //检测是否为某个字符串开始的请求
        $isUser = $request->is('test/*');
        //获取完整的url请求地址
        $url = $request->url();
        //获取请求方式
        $method = $request->method();
        //检测是否为get
        $isGet = $request->isMethod('get');
        //
    }

    /**
     * 针对参数的获取
     */
    public function getParams(Request $request)
    {
        //提取参数  
        // $id = $request->input('id');
        //获取getid参数
        // $id = \Input::get('id');// \Input::post('username');
        //设置默认值
        // $isVip = $request->input('isVip', 'no');
        //检测是否将某个参数传递过来
        // $res = $request->has('id');
        //获取所有的请求参数
        // $all = $request->all();
        //提取部分参数
        // $bufen = $request->only(['username','password']);//only只有的意思   
        //区分
        // $bufen = $request->except(['username']);// except  除了我    beside除了我 ...还有

        // dd($bufen);
    }

    /**
     * 显示用户的添加页面  
     * 注意双拼词的访问形式  http://www.lamp136.com/test/user-add
     */
    public function getUserAdd()
    {
        return view('user');
    }

    /**
     * 用户的添加操作
     */
    public function postInsert(Request $request)
    {
        //使用闪存 保存数据
        // $request->flash();
        // $request->flashOnly('nickname');
        // $request->flashExcept('nickname');
        if(!$request->has('username')){
            return back()->withInput();
        }
        dd($request->all());
    }
}
