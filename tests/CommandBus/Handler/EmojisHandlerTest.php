<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\EmojisCommand;
use ApiClients\Client\Github\CommandBus\Handler\EmojisHandler;
use ApiClients\Client\Github\Resource\EmojiInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

/**
 * @internal
 */
final class EmojisHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $emojis  = [
            'foo' => 'bar',
            'bar' => 'foo',
        ];
        $service = $this->prophesize(IteratePagesService::class);
        $service->iterate('emojis')->shouldBeCalled()->willReturn(Observable::fromArray([$emojis]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(
            EmojiInterface::HYDRATE_CLASS,
            [
                'name' => 'foo',
                'image' => 'bar',
            ]
        )->shouldBeCalled()->willReturn($this->prophesize(EmojiInterface::class)->reveal());
        $hydrator->hydrate(
            EmojiInterface::HYDRATE_CLASS,
            [
                'name' => 'bar',
                'image' => 'foo',
            ]
        )->shouldBeCalled()->willReturn($this->prophesize(EmojiInterface::class)->reveal());

        $handler        = new EmojisHandler($service->reveal(), $hydrator->reveal());
        $emojiResources = $this->await(Promise::fromObservable(unwrapObservableFromPromise($handler->handle(new EmojisCommand()))->toArray()));

        self::assertCount(2, $emojiResources);
    }
}
