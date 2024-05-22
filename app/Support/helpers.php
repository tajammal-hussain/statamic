<?php

use Carbon\Carbon;

function custPrint($data, $die = null)
{
    echo "<pre>";
    print_r($data);
    $die ? false : die;
}

function getCurrentTime()
{
    $mytime = Carbon::now();
    return $mytime->toDateTimeString();
}

/**
 * Delete a record from a dynamic model
 *
 * @param string $modelName
 * @param array $conditions
 * @return \Illuminate\Http\RedirectResponse
 */
function deleteContent($modelName, $conditions)
{
    $modelClass = "App\\Models\\$modelName";

    try {
        if (!class_exists($modelClass)) : throw new \Exception("Model $modelName does not exist.");
        endif;

        (new $modelClass)::where($conditions)->first()->delete();

        $res = ['success' => 'Record deleted successfully.'];
    } catch (\Exception $e) {
        $res = ['error', 'Something went wrong: ' . $e->getMessage()];
    }
    return $res;
}
