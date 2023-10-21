<?php

namespace Modules\Website\GeneralModule\Repositories;

use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\DB;
use Modules\Website\GeneralModule\Entities\Product;
use Modules\Website\GeneralModule\Helpers\Traits\ApiPaginator;
use Modules\Website\GeneralModule\Transformers\ProductResource;
use Modules\Website\GeneralModule\Repositories\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    use ApiPaginator;

    public function index()
    {
        $data = app(Pipeline::class)
            ->send(Product::query())
            ->through([
                \Modules\Website\GeneralModule\Filters\PaginationPipeline::class,
                \Modules\Website\GeneralModule\Filters\RelationPipeline::class,
            ])
            ->thenReturn();
        $collection = ProductResource::collection($data);
        return $this->getPaginatedResponse($data, $collection);
    }

    public function store($request)
    {
        DB::beginTransaction();
        $model = Product::query()->create($request->validated());
        DB::commit();
        return ['id' => $model->id];
    }

}