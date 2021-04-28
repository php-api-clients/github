<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\CreateStatusCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class CreateStatusHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @param RequestService $requestService
     * @param Hydrator       $hydrator
     */
    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator = $hydrator;
    }

    /**
     * @param  CreateStatusCommand $command
     * @return PromiseInterface
     */
    public function handle(CreateStatusCommand $command): PromiseInterface
    {
        $json = [
            'state' => $command->getState(),
        ];

        $targetUrl = $command->getTargetUrl();
        if ($targetUrl !== null) {
            $json['target_url'] = $targetUrl;
        }
        $description = $command->getDescription();
        if ($description !== null) {
            $json['description'] = $description;
        }
        $context = $command->getContext();
        if ($context !== null) {
            $json['context'] = $context;
        }
        unset($targetUrl, $description, $context);

        return $this->requestService->request(
            new Request(
                'POST',
                \str_replace('/commits/', '/statuses/', $command->getCommit()->url()),
                [],
                new JsonStream($json)
            )
        )->then(function ($status) {
            return $this->hydrator->hydrate(StatusInterface::HYDRATE_CLASS, $status->getBody()->getParsedContents());
        });
    }
}
