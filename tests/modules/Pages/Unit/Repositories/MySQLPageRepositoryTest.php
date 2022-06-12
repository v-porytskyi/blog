<?php

declare(strict_types=1);

namespace Tests\modules\Pages\Unit\Repositories;

use App\Models\Page;
use App\Models\PageMetaTag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Pages\Repositories\MySQLPageRepository;
use Tests\TestCase;

class MySQLPageRepositoryTest extends TestCase
{
    use RefreshDatabase;

    private MySQLPageRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = new MySQLPageRepository(new Page());
    }

    public function testShouldStoreModel(): void
    {
        $model = new Page();
        $model->route_name = 'test';
        $model->title = 'test';
        $model->description = 'test';
        $model->keywords = 'test';

        $this->assertNull($model->id);
        $this->assertNull($model->createdAt);
        $this->assertNull($model->updatedAt);

        $model = $this->repository->store($model);

        $this->assertNotNull($model->id);
        $this->assertNull($model->createdAt);
        $this->assertNull($model->updatedAt);
    }

    public function testShouldFindModelByRouteName(): void
    {
        $model = new Page();
        $model->route_name = 'test';
        $model->title = 'test';
        $model->description = 'test';
        $model->keywords = 'test';

        $this->assertNull($model->id);
        $this->assertNull($model->createdAt);
        $this->assertNull($model->updatedAt);

        $model = $this->repository->store($model);

        $this->assertNotNull($model->id);
        $this->assertNull($model->createdAt);
        $this->assertNull($model->updatedAt);

        $findModel = $this->repository->findByRouteName($model->route_name);

        $this->assertEquals($model->toArray(), $findModel->toArray());
    }

    public function testShouldAddTagsToPage(): void
    {
        $model = new Page();
        $model->route_name = 'test';
        $model->title = 'test';
        $model->description = 'test';
        $model->keywords = 'test';
        $model = $this->repository->store($model);

        $tag = new PageMetaTag();
        $tag->property = 'test';
        $tag->content = 'test';

        $model = $this->repository->addTags($model, [
            $tag
        ]);

        $this->assertCount(1, $model->getRelations());
    }
}
