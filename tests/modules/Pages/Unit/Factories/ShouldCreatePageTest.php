<?php

declare(strict_types=1);

namespace Tests\modules\Pages\Unit\Factories;

use App\Models\Page;
use Database\Factories\PageFactory;
use Database\Factories\PageMetaTagFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShouldCreatePageTest extends TestCase
{
    use RefreshDatabase;

    public function testShouldSuccessfullyStorePage(): void
    {
        /** @var Page $page */
        $page = PageFactory::new()->create();
        $this->assertDatabaseHas('pages', $page->toArray());
    }

    public function testShouldSuccessfullyStorePageWithMetaTags(): void
    {
        /** @var Page $page */
        $page = PageFactory::new()
            ->has(PageMetaTagFactory::times(3), 'tags')
            ->create();

        $this->assertDatabaseHas('pages', $page->toArray());
        $this->assertDatabaseCount('pages_og_meta_tags', $page->tags()->get()->count());
    }
}
