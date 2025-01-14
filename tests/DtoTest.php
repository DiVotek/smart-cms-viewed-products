<?php

namespace Tests\Unit;

use SmartCms\Store\Database\Factories\ProductFactory;
use SmartCms\Viewed_products\Events\Dto\ProductEntityTransform;
use SmartCms\Viewed_products\Services\ViewedProductService;

it('test empty session', function () {
    expect(ViewedProductService::get())->toHaveCount(0);
});

it('add viewed product to session', function () {
    $entity = ProductFactory::new()->state(['status' => 1])->create();
    $transformer = new ProductEntityTransform;
    $transformer($entity);

    expect(ViewedProductService::get())->toHaveCount(1);
});

it('add duplicate product to session', function () {
    $entity = \SmartCms\Store\Database\Factories\ProductFactory::new()->state(['status' => 1])->create();

    $transformer = new ProductEntityTransform;

    $transformer($entity);
    $transformer($entity);

    expect(ViewedProductService::get())->toHaveCount(1);
});

it('add two product to session', function () {
    $entity1 = \SmartCms\Store\Database\Factories\ProductFactory::new()->state(['status' => 1])->create();
    $entity2 = \SmartCms\Store\Database\Factories\ProductFactory::new()->state(['status' => 1])->create();

    $transformer = new ProductEntityTransform;

    $transformer($entity1);
    $transformer($entity2);

    expect(ViewedProductService::getViewedProductsDTOs())->toHaveCount(2);
});
