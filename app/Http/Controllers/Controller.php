<?php

namespace App\Http\Controllers;

use App\Helpers\UserSystemInfoHelper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $collection = '';
    public $data = [
        'ip' => '',
        'browser' => '',
        'device' => '',
        'os' => '',
    ];

    public function __construct()
    {
        $this->data['ip'] = UserSystemInfoHelper::get_ip();
        $this->data['browser'] = UserSystemInfoHelper::get_browsers();
        $this->data['device'] = UserSystemInfoHelper::get_device();
        $this->data['os'] = UserSystemInfoHelper::get_os();
    }
}
