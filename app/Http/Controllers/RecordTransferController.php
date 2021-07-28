<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RecordTransferController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function transfer()
    {
       
        // $json = File::get("storage/app/public/records.json");
        // dd($json);
        // $data = json_decode($json, true);
       // DB::table('countries')->insert($data);

       $path = storage_path('app/public/records.json');
       $data = json_decode(file_get_contents($path), true);
       foreach (array_chunk($data['RECORDS'], 1000) as $item)  
        {
            DB::table('records')->insert($item);
        }


    //    $insert_data = collect($data);

    //    $chunks = $insert_data->chunk(500);

    //    foreach ($chunks as $chunk) {
    //         DB::table('records')->insert($chunk->toArray());
    //    }
        
        // try {
        //     DB::beginTransaction();
            //DB::table('records')->insert($data);
            //DB::commit();
       // } catch (Exception $e) {
           // DB::rollBack();
         //   throw new Exception('Something went wrong', 401);
       // }

        return 'File transfer completed.';
    }
}
