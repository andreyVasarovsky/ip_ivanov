<?php


namespace App\Http\Controllers\Admin\Fertilizer;


use App\Http\Controllers\Controller;
use App\Http\Filters\FertilizerFilter;
use App\Http\Requests\Fertilizer\FilterRequest;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(FertilizerFilter::class, ['queryParams' => array_filter($data)]);
        $fertilizers = Fertilizer::filter($filter)->get();

        return view('admin.fertilizer.index', compact('fertilizers'));
    }
}
