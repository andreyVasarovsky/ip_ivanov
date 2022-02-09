<?php


namespace App\Http\Controllers\Admin\Fertilizer;


use App\Http\Controllers\Controller;
use App\Http\Filters\FertilizerFilter;
use App\Http\Requests\Fertilizer\FilterRequest;
use App\Models\CultureGroup;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $query = $request->validated();
//        dd($query);
        $filter = app()->make(FertilizerFilter::class, ['queryParams' => array_filter($query)]);
        $fertilizers = Fertilizer::filter($filter)->get();
        $cultureGroups = CultureGroup::all();
        return view('admin.fertilizer.index', compact('fertilizers', 'cultureGroups', 'query'));
    }
}
