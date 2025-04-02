<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Event;
use SmartCms\Store\Database\Factories\ProductFactory;
use SmartCms\ViewedProducts\Services\ViewedProductService;

it('test empty session', function () {
    expect(ViewedProductService::get())->toHaveCount(0);
});

it('add viewed product to session', function () {
    $entity = ProductFactory::new()->state(['status' => 1])->create();
    Event::dispatch('cms.product.view', $entity);

    expect(ViewedProductService::get())->toHaveCount(1);
});

it('add duplicate product to session', function () {
    $entity = \SmartCms\Store\Database\Factories\ProductFactory::new()->state(['status' => 1])->create();
    Event::dispatch('cms.product.view', $entity);
    Event::dispatch('cms.product.view', $entity);

    expect(ViewedProductService::get())->toHaveCount(1);
});

it('add some products to session', function () {
    for ($i = 0; $i < 10; $i++) {
        $entity = \SmartCms\Store\Database\Factories\ProductFactory::new()->state(['status' => 1])->create();
        Event::dispatch('cms.product.view', $entity);
    }

    expect(ViewedProductService::get())->toHaveCount(10);
});
