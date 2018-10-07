<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     *  关联数据库admin_user
     *
     *  @return 
     */
    protected $table = 'admin_users';

    /**
     *  该模型是否被自动维护时间戳
     *
     *  @return 
     */
    public $timestamps = false;

    /**
     *  批量赋值
     *
     *  @return 
     */
    protected $guarded = [];

}
