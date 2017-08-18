<?php

namespace Tests\Unit;

use App\Task;
use tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskpadTest extends TestCase
{
	use DatabaseTransactions;

    public function testIncompleteTasks()
    {
        $first = factory(Task::class)->create(['completed' => false]);
        $second = factory(Task::class)->create(['completed' => true]);
        $third = factory(Task::class)->create(['completed' => true]);

        $tasks = Task::Incomplete();

        $this->assertCount(1, $tasks);
	}
}
