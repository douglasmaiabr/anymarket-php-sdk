<?php

namespace Tests;

use Yampi\Anymarket\Anymarket;
use Yampi\Anymarket\Contracts\BrandInterface;
use Yampi\Anymarket\Contracts\CategoryInterface;
use Yampi\Anymarket\Contracts\OrderInterface;
use Yampi\Anymarket\Contracts\ProductInterface;
use Yampi\Anymarket\Contracts\SkuInterface;
use Yampi\Anymarket\Contracts\StockInterface;
use Yampi\Anymarket\Contracts\VariationInterface;
use Yampi\Anymarket\Contracts\VariationValueInterface;
use Yampi\Anymarket\Services\Environment;

class ClientTest extends TestCase
{
    protected $anymarket;

    protected function setUp(): void
    {
        parent::setUp();

        $this->anymarket = new Anymarket('TOKEN', Environment::sandbox());
    }

    public function testBrandService(): void
    {
        $this->assertInstanceOf(BrandInterface::class, $this->anymarket->brand());
    }

    public function testCategoryService(): void
    {
        $this->assertInstanceOf(CategoryInterface::class, $this->anymarket->category());
    }

    public function testOrderService(): void
    {
        $this->assertInstanceOf(OrderInterface::class, $this->anymarket->order());
    }

    public function testProductService(): void
    {
        $this->assertInstanceOf(ProductInterface::class, $this->anymarket->product());
    }

    public function testSkuService(): void
    {
        $this->assertInstanceOf(SkuInterface::class, $this->anymarket->sku());
    }

    public function testStockService(): void
    {
        $this->assertInstanceOf(StockInterface::class, $this->anymarket->stock());
    }

    public function testVariationService(): void
    {
        $this->assertInstanceOf(VariationInterface::class, $this->anymarket->variation());
    }

    public function testVariationValueService(): void
    {
        $this->assertInstanceOf(VariationValueInterface::class, $this->anymarket->variationValue());
    }
}