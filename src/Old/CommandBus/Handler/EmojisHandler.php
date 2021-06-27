<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\EmojisCommand;
use ApiClients\Client\Github\Resource\EmojiInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class EmojisHandler
{
    private IteratePagesService $service;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $service, Hydrator $hydrator)
    {
        $this->service  = $service;
        $this->hydrator = $hydrator;
    }

    public function handle(EmojisCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate('emojis')
                ->flatMap(static function ($emojis) {
                    $structuredEmojis = [];

                    foreach ($emojis as $name => $image) {
                        $structuredEmojis[] = [
                            'name' => $name,
                            'image' => $image,
                        ];
                    }

                    return observableFromArray($structuredEmojis);
                })->map(function ($emoji) {
                    return $this->hydrator->hydrate(EmojiInterface::HYDRATE_CLASS, $emoji);
                })
        );
    }
}
