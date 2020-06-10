<?php


namespace App\Http\Services;


use App\Core\TatucoService;
use App\Http\Repositories\SectorRepository;
use App\Models\Rack;
use App\Models\Sector;
use App\Models\TypeRack;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;
use Tymon\JWTAuth\Facades\JWTAuth;


class SectorService extends TatucoService
{

    protected $name = "sector";
    protected $namePlural = "sectors";

    public function __construct()
    {
        parent::__construct(new SectorRepository());
    }

    public function index($request)
    {
        try {

            $accountId = env("ACCOUNT_ID", 1);
            $user = JWTAuth::parseToken()->authenticate();
            $list = [];

            if ($user->account_id == $accountId) {
            $list = Sector::where("account_id", (int)$request->account_id)
                ->orderBy('created_at', 'asc')
                ->get(['account_id',
                    'type_rack_id',
                    'type_rack_name',
                    'code',
                    'width',
                    'high',
                    'norte',
                    'sur']);


            } else {
                    $list = Sector::where("account_id", $user->account_id)->orderBy('created_at', 'asc')->get(['account_id',
                        'type_rack_id',
                        'type_rack_name',
                        'code',
                        'width',
                        'high',
                        'norte',
                        'sur']);
                }
            return response()->json([
                "data" => $list
            ], 200);
        } catch (\Exception $e) {
            return parent::errorException($e);
        }
    }

    public function store(Request $request)
    {
        try {
            $data = self::generateOrderRacks($request->high, $request->width, $request->code, $request->account_id, $request->type_rack_id);
            $sector = new Sector([
                'code' => $request->code,
                'high' => $request->high,
                'width' => $request->width,
                'type_rack_id' => $request->type_rack_id,
                'type_rack_name' => $request->type_rack_name,
                'account_id' => $request->account_id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'norte' => 'Norte',
                'sur' => 'Sur',
                'racks' => $data
            ]);
            /*   $sector->id = $request->code;
               $sector->code = $request->code;
               $sector->account_id = $request->account_id;
               $sector->type_rack_id = $request->type_rack_id;
               $sector->high = $request->high;
               $sector->width = $request->width;
               $data = self::generateOrderRacks($request->high, $request->width, $request->code, $request->account_id, $request->type_rack_id);
               $sector->racks = $data;*/
            $sector->save();

            //Rack::insertAll($data);
            //  $item = $this->repository->show($sector->);
            return response()->json([
                "status" => 201,
                "data" => $sector], 201);

        } catch (\Exception $e) {
            return $this->errorException($e);
        }

        //  return parent::store($request); // TODO: Change the autogenerated stub
        /*    return self::getBoxes($request->type_rack_id, $request->code, 1, 10, 10);
            $sector = new Sector();
            $sector->code = $request->code;
            $sector->type_rack_id = $request->type_rack_id;
            $sector->save();*/
    }

    public function update($id, Request $request)
    {


    }

    public function updateImportBoxes($id, Request $request)
    {
        try {
            $sector = Sector::where("code", "=", $id)->first(["racks"]);
            $racks = collect($sector->racks);
            $rack = $request->rack_id;
            $header = $request->header;
            $body = $request->body;
            $resp = [];
            $item_aux = null;

            $headers = [];
            $new_body = [];
            $obj = new StdClass();
            for ($k = 0; $k < count($body); $k++) {
                for ($j = 0; $j < count($body[$k]); $j++) {

                    for ($i = 0; $i < count($header); $i++) {
                        $value = $body[$k][$i];
                        $property = $header[$i]["key"];
                        $obj->$property = $value;
                    }
                }
                array_push($new_body, $obj);
                $obj = new StdClass();
            }
            $result = [];
            $rack_result = null;
            foreach ($racks as $r) {
                if ($r["id"] == $rack) {
                    $new_box = [];
                    for ($i = 0; $i < count($r["boxes"]); $i++) {
                        $it = self::searchHeader($header, $new_body, $i, $r["boxes"][$i]);
                        array_push($new_box, $it);
                    }
                    $r["boxes"] = $new_box;
                    $rack_result = $r;
                }
                array_push($result, $r);
            }

            $sector->racks = $result;
            if (!$sector->save()) {
                return response()->json([
                    "message" => "Error al intentar actualizar"
                ], 500);
            }

            return response()->json([
                "data" => $rack_result
            ], 200);


        } catch (\Exception $e) {
            return parent::errorException($e);
        }
    }

    static function searchHeader($headers, $body, $count, $item)
    {
        if ($count < count($body)) {
            foreach ($headers as $header) {
                $key = $header["key"];
                $value = $body[$count]->$key;
                if ($key !== "rack_id")
                    $item[$key] = $value;
            }
        }

        return $item;
    }

    static function updateRack($sectorId, Request $request)
    {
        $sector = Sector::where("code", "=", $sectorId)->first(["racks"]);
        $collection = collect($sector->racks);
        $box = [
            "id" => $request->id,
            "width" => $request->width,
            "long" => $request->long,
            "probe" => $request->probe,
            "id_sector_box" => $request->id_sector_box
        ];

        $rack = $request->rack_id;
        //  $object_rack = null;

        $collection = $collection->map(function ($item) use ($box, $rack) {
            if ($item["id"] == $rack) {
                $boxes = collect($item["boxes"]);
                $boxes = $boxes->map(function ($it) use ($box) {
                    if ($it["id"] == $box["id"]) {
                        $it["width"] = $box["width"];
                        $it["long"] = $box["long"];
                        $it["probe"] = $box["probe"];
                        $it["id_sector_box"] = $box["id_sector_box"];
                    }
                    return $it;
                });
                $item["boxes"] = $boxes->all();
            }
            return $item;
        });

        $sector->racks = $collection->all();
        // $sector->racks = $collection;
        $sector->rack_id = $request->rack_id;
        /***
         * retornar id del rack
         */
        if (!$sector->save()) {
            return response()->json([
                "message" => "Error, intente mas tarde"
            ], 500);
        }
        $rack_obj = $collection->first(function ($item) use ($rack) {
            if ($item["id"] == $rack) {
                return $item;
            }
        });
        return response()->json([
            "message" => "Actualizado con Exito!",
            "data" => $rack_obj
        ], 200);
    }

    public function findRacks($id)
    {
        try {
            $racks = Sector::where("code", "=", $id)->first(["racks", "code"]);
            return response()->json([
                "data" => $racks
            ]);
        } catch (\Exception $e) {
            return parent::errorException($e);
        }
        ///return Sector::findRacks($id);
    }

    static function generatorRecorrido($alto, $ancho)
    {
        $total = $alto * $ancho;
        $cont = 1;
        $obj = [];
        $recorrido = [];
        for ($i = 0; $i <= $total; $i++) {
            if ($cont <= $alto) {
                if ($cont == 1) {
                    $obj["inicio"] = $i;
                }
                if ($cont == $alto) {
                    $obj["fin"] = $i;
                    array_push($recorrido, $obj);
                    $cont = 1;
                }
                $cont++;
            } else {
                $cont = 1;
                $obj["inicio"] = $i;
            }
        }
        return $recorrido;
    }

    static function generateOrderRacks($alto, $ancho, $sector, $account_id, $type_rack)
    {
        $resp = [];
        $cant_columns = 2;
        $total = $alto * $ancho;
        $cont_lote = 1;
        $cant_x_lote = $cant_columns * $alto;
        $cantidad_lotes = 1;
        $cont_column = 1;
        $column_current = 1;
        $pasillo = 1;
        $racks_x_pasillo = 1;
        $boxes = self::getBoxes($type_rack, $sector);
        for ($i = 1; $i <= $total; $i++) {
            /**
             * si el contador de la cantidad de racks por lote
             * es menor a la cantidad de racks que tiene cada lote
             * entonces pertenece al mismo lote, se pushea y suma uno
             * al contador de racks por lote $cont_lote
             */
            if ($cont_lote <= $cant_x_lote) {
                /**
                 *  si el contador de columnas es menor o igual al alto del sector
                 * entonces pertenece a la primera columna, sumamos un rack al contador $cont_column
                 */
                if ($cont_column <= $alto) {
                    $rack = [
                        "id" => $i,
                        "sector_id" => $sector,
                        "hall" => $pasillo,
                        "lot" => $cantidad_lotes,
                        "columna" => $column_current,
                        "account_id" => $account_id,
                        "boxes" => $boxes
                    ];
                    $cont_column++;
                } else {
                    /**
                     * pertenece a la siguiente columns, hay que iniciar en 1 la variable $cont_column
                     * para volver a contar los racks de la siguiente columna
                     */

                    if ($racks_x_pasillo == 1) {
                        $pasillo++;
                    }
                    $racks_x_pasillo++;

                    $column_current = 2;
                    $rack = [
                        "id" => $i,
                        "sector_id" => $sector,
                        "hall" => $pasillo,
                        "lot" => $cantidad_lotes,
                        "columna" => $column_current,
                        "account_id" => $account_id,
                        "boxes" => $boxes
                    ];
                    $cont_column++;
                }

                array_push($resp, $rack);
                $cont_lote++;
            } else {
                /**
                 * si no, quiere decir que es un lote nuevo, hay igualar a 0
                 * la variable contadora $cont_lote = 0 para inicializar el conteo
                 * por lote y sumamos un lote.
                 */
                $cont_lote = 1;
                $cantidad_lotes++;
                $column_current = 1;
                $cont_column = 1;
                $rack = [
                    "id" => $i,
                    "sector_id" => $sector,
                    "hall" => $pasillo,
                    "lot" => $cantidad_lotes,
                    "columna" => $column_current,
                    "account_id" => $account_id,
                    "boxes" => $boxes
                ];
                array_push($resp, $rack);
                $cont_column++;
                $cont_lote++;
                $racks_x_pasillo = 1;
            }

        }

        return $resp;

    }

    static function getBoxes($type, $sector /*$rack, $width, $long*/)
    {
        $resp = [];
        $type_ = TypeRack::where("id", $type)->select(["quantity", "floors"])->first();
        $count_sector = 1;
        for ($i = 1; $i <= $type_->floors; $i++) {
            for ($j = 1; $j <= $type_->quantity; $j++) {
                $box = [
                    "id" => $sector . $type_->floors > 1 ? $i : "" . $j,
                    "id_sector_box" => $sector . $count_sector,
                    "piso" => (string)$i,
                    "width" => '',
                    "long" => '',
                    "probe" => null
                ];
                array_push($resp, $box);
                $count_sector++;
            }
        }
        /*   switch ($type) {
               case 1:
                   for ($i = 1; $i <= 26; $i++) {
                       $box = [
                           "id" => $sector . $i,
                           "width" => '',
                           "long" => '',
                           "probe" => null
                       ];
                       array_push($resp, $box);
                   }
                   break;
               case 2:
                   for ($i = 1; $i <= 33; $i++) {
                       $box = [
                           "id" => $sector . $i,
                           "width" => '',
                           "long" => '',
                           "probe" => null
                       ];
                       array_push($resp, $box);
                   }
                   break;
               case 3:
                   for ($i = 1; $i <= 4; $i++) {
                       for ($j = 1; $j <= 50; $j++) {
                           $box = [
                               "id" => $sector . $i . $j,
                               "piso" => (string)$i,
                               "width" => '',
                               "long" => '',
                               "probe" => null
                           ];
                           array_push($resp, $box);

                       }

                   }
                   break;

           }*/
        return $resp;
    }

    public function updateReferences($id, Request $request)
    {
        try {
            /* $item = Sector::find($id);
             if (!$item)
                 return response()->json([
                     "message" => "No Encontrado"
                 ], 404);

             if (!$item = $this->repository->update($id, $request))
                 return response()->json([
                     "message" => "Error al intentar actualizar las referencias del Sector"
                 ], 500);

             return response()->json([
                 "message" => "Actualizado con exito!",
                 "item" => $item
             ], 200);*/
            $sector = Sector::where("code", "=", $id)->first();
            if (!$sector) {
                return response()->json([
                    "message" => "No encontrado"
                ], 404);
            }

            $sector->norte = $request->norte;
            $sector->sur = $request->sur;
            if (!$sector->save()) {
                return response()->json([
                    "message" => "Error, Intente mas tarde!"
                ], 500);
            }
            return response()->json([
                "message" => "Actualizado con Exito!",
                "data" => $sector
            ], 200);
        } catch (\Exception $e) {
            return parent::errorException($e);
        }
    }

}