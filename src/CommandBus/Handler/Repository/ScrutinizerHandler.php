<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ScrutinizerCommand;
use ApiClients\Client\Scrutinizer\AsyncClientInterface;
use ApiClients\Client\Scrutinizer\Github\AsyncClientInterface as ScrutinizerGithubAsyncClientInterface;
use Clue\React\Buzz\Message\ResponseException;
use React\Promise\PromiseInterface;
use function React\Promise\reject;
use function React\Promise\resolve;

final class ScrutinizerHandler
{
    /**
     * @var ScrutinizerGithubAsyncClientInterface
     */
    private $scrutinizer;

    /**
     * @param AsyncClientInterface $client
     */
    public function __construct(AsyncClientInterface $client)
    {
        $this->scrutinizer = $client->github();
    }

    /**
     * @param  ScrutinizerCommand $command
     * @return PromiseInterface
     */
    public function handle(ScrutinizerCommand $command): PromiseInterface
    {
        return $this->scrutinizer->repository(
            $command->getLogin(),
            $command->getName()
        )->then(null, function ($throwable) {
            if (!($throwable instanceof ResponseException)) {
                return reject($throwable);
            }

            if ($throwable->getCode() !== 404) {
                return reject($throwable);
            }

            return resolve(false);
        });
    }
}
