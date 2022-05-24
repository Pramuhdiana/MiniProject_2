<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\DosenModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DosenController extends BaseController
{

    public function __construct()
    {
        $this->DosenModel = new DosenModel();
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        $data = [
            'riwayat' => $this->DosenModel->alldata(),
        ];
        return view('v_dosen', $data);
    }
}
