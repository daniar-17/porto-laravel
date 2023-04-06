<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function main()
    {
        $datas = collect([
            (object) ['id'=>1, 'name'=>'BWA_MERN', 'sertifikat'=>'BWA_MERN.jpg'],
            (object) ['id'=>2, 'name'=>'BWA_Ecommerce', 'sertifikat'=>'BWA_Ecommerce.jpg'],
            (object) ['id'=>3, 'name'=>'Dicoding_Javascript', 'sertifikat'=>'Dicoding_Javascript.jpg'],
            (object) ['id'=>4, 'name'=>'Dicoding_Devops', 'sertifikat'=>'Dicoding_Devops.jpg'],
            (object) ['id'=>5, 'name'=>'Dicoding_AWS', 'sertifikat'=>'Dicoding_AWS.jpg'],
            (object) ['id'=>6, 'name'=>'Rakamin_Backend', 'sertifikat'=>'Rakamin_Backend.jpg'],
            (object) ['id'=>7, 'name'=>'Rakamin_Fullstack', 'sertifikat'=>'Rakamin_Fullstack.jpg'],
            (object) ['id'=>8, 'name'=>'Hacktiv8', 'sertifikat'=>'Hacktiv8.jpg'],
            (object) ['id'=>9, 'name'=>'BNSP', 'sertifikat'=>'BNSP.jpg'],
        ]);
        return view('main', compact('datas'));
    }
    //Last Line
}
