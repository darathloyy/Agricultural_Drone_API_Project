<?php

namespace App\Http\Controllers;

use App\Http\Resources\FarmProvinceResource;
use App\Http\Resources\FarmResource;
use App\Http\Resources\MapResource;
use App\Http\Resources\ProvinceResource;
use App\Models\Farm;
use App\Models\Map;
use App\Models\Province;
use Database\Seeders\MapSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\map;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maps = Map::all();
        if (count($maps) === 0) {
            return response()->json(['massege' => 'No data in database'], 200);
        };
        return response()->json(['massege' => 'success', 'data' => $maps], 200);
    }

    public function farm($id)
    {
        $maps = Farm::find($id);
        $maps = new FarmProvinceResource($maps);
        return response()->json(['massege' => 'success', 'data' => $maps], 200);
    }

    public function mapProvinceFarm($id)
    {
        $map = Farm::find($id)->maps;
        $map = MapResource::collection($map);
        return response()->json(['massege' => 'success', 'data' => $map], 200);
    }
    /**
     * Display list map by input name of province and specific id of farm ===============================================.
     */

    public function show(string $province_name, string $farm_id)
    {
        $province = Province::where("name", $province_name)->get();
        if ($province->count() > 0) {
            $province = new ProvinceResource($province[0]);
            $farms = FarmProvinceResource::collection($province["farms"]);
            foreach ($farms as $farm) {
                if ($farm["id"] == $farm_id) {
                    $farm = new FarmResource($farm);
                    $maps = MapResource::collection($farm["maps"]);
                    if (count($maps) > 0) {
                        return response()->json(['message' => 'successful', "data" => $maps], 200);
                    }
                }
            }
        }
        return response()->json(["message" => "Map not Found"], 401);
    }
    /**
     * Delete list map by input name of province and specific id of farm ===============================================.
     */

    public function deleteMap(string $province_name, string $farm_id)
    {
        $province = Province::where("name", $province_name)->get();
        if ($province->count() > 0) {
            $province = new ProvinceResource($province[0]);
            $farms = FarmProvinceResource::collection($province["farms"]);
            foreach ($farms as $farm) {
                if ($farm["id"] == $farm_id) {
                    $farm = new FarmResource(Farm::find($farm_id));
                    $maps = MapResource::collection($farm["maps"]);
                    if (count($maps) > 0) {
                        foreach ($maps as $map) {
                            $map->delete();
                        }
                        return response()->json(['message' => 'successful'], 200);
                    }
                }
            }
        }
        return response()->json(["message" => "Map not Found"], 401);
    }

    /**
     * Store a newly taken mapping image for farm 7 in Kampong Cham.
     */
    public function store(Request $request, string $province_name, string $farm_id)
    {
        // return $request;
        $province = Province::where("name", $province_name)->get();
        if ($province->count() > 0) {
            $province = $province[0];
            $farms = $province["farms"];
            foreach ($farms as $farm) {
                if ($farm["id"] == $farm_id) {
                    $validator = Validator::make($request->all(), [
                        'name' => 'required',
                        'image' => 'required',
                        'drone_id' => 'required'
                    ]);
                    if ($validator->fails()) {
                        return response()->json([
                            'errors' => $validator->errors(),
                        ], 400);
                    }
                    $map = Map::create([
                        'name' => $request->input("name"),
                        'image' => $request->input("image"),
                        'farm_id' => $farm_id,
                        'drone_id' => $request->input("drone_id"),
                    ]);
                    return response()->json(['massege' => 'successful', 'data' => $map], 200);
                }
            }
        }
        return response()->json(["message" => "Map not Found"], 401);
    }

    /**
     * Display the specified resource.
     */
    // public function show(Map $map)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Map $map)
    {
        //
    }
}
