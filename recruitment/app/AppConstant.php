<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppConstant
 *
 * @author tho
 */
namespace App;
class AppConstant {
    //put your code here
    const USER_TYPE_ADMIN = 'admin';
    const USER_TYPE_MEMBER = 'user';
    const USER_TYPE_LEADER = 'leader';

    public static $USER_TYPES = [
        self::USER_TYPE_ADMIN => "Admin",
        self::USER_TYPE_LEADER => "Leader",
        self::USER_TYPE_MEMBER => 'User',
    ];
    
    const DEFAULT_ROW_ON_PAGE = 2;
    public static $ROW_ON_PAGE = [
        2 => '2',
        10 => '10',
        15 => '15',
        20 => '20'
    ];
}
