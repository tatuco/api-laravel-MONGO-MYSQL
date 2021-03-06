<?php

namespace App\Http\Controllers;

use App\Core\ImageService;
use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\AccountService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AccountController extends TatucoController
{
    protected $select = ["id", "name"];
    public function __construct()
    {
        parent::__construct(new AccountService());
    }

    public function store(Request $request)
    {
        $request->merge(["config" => [
            "colores" => [
                "app_main_menu" => $request->colorMainMenu
            ]
        ]
        ]);
        $img = $request->logo[0];
        $imagen_ = str_replace('data:' . $img['tipo'] . ';base64,', '', $img['base64textString']);
        $image = ImageService::image($imagen_, 'geosam', explode("/", $img['tipo'])[1]);

        $instance_file = new UploadedFile($image['image'], $image['name']);
      //  $storagePath = Storage::disk('s3')->put("cuentas-geosam", $instance_file, 'public');
        $storagePath = "dsadasdas.jpg";
      //  $request->merge(['logo' => env('AWS_URL') . '/' . $storagePath, 'directory' => 'luis']);
        $request->merge(['logo' => env('AWS_URL') . '/' . $storagePath, 'directory' => 'luis']);
        return parent::store($request); // TODO: Change the autogenerated stub
    }

    public function update($id, Request $request)
    {
        if ($request->has("colorMainMenu"))
        {
            $request->merge(["config" => [
                "colores" => [
                    "app_main_menu" => $request->colorMainMenu
                ]
            ]
            ]);
        }
        if ($request->has("logo")) {
            $img = $request->logo[0];
            $imagen_ = str_replace('data:' . $img['tipo'] . ';base64,', '', $img['base64textString']);
            $image = ImageService::image($imagen_, 'geosam', explode("/", $img['tipo'])[1]);

            $instance_file = new UploadedFile($image['image'], $image['name']);
            $storagePath = Storage::disk('s3')->put("cuentas-geosam", $instance_file, 'public');

            $request->merge(['logo' => env('AWS_URL') . '/' . $storagePath, 'directory' => 'luis']);
        }

        return parent::update($id, $request); // TODO: Change the autogenerated stub
    }
}
