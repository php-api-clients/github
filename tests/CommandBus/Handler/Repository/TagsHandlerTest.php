<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\TagsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\TagsHandler;
use ApiClients\Client\Github\Resource\Async\Repository\Tag;
use ApiClients\Client\Github\Resource\Repository\TagInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class TagsHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $tagArray = ['foo' => 'bar'];
        $tag      = $this->prophesize(Tag::class)->reveal();

        $command = new TagsCommand('api-clients/github');

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate('repos/api-clients/github/tags')
            ->shouldBeCalled()
            ->willReturn(Observable::fromArray([[$tagArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(TagInterface::HYDRATE_CLASS, $tagArray)->shouldBeCalled()->wilLReturn($tag);

        $tagsHandler = new TagsHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        self::assertSame($tag, $this->await(Promise::fromObservable($this->await($tagsHandler->handle($command)))));
    }
}
