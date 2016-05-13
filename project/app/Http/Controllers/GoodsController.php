<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     * 商品的列表页
     */
    public function getIndex()
    {
        echo '用户的列表显示页面';
    }

    /**
     * 商品的添加
     */
    public function getAdd()
    {
        echo '商品的添加操作';
    }

    /**
     * 商品的插入操作
     */
    public function postInsert()
    {
        
    }
}
