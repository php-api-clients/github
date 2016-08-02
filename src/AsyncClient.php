<?php declare(strict_types=1);

namespace ApiClients\Github;

use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use ApiClients\Foundation\Transport\Client as Transport;
use ApiClients\Foundation\Transport\Factory;
use function React\Promise\resolve;

class AsyncClient
{
    protected $transport;

    public function __construct(LoopInterface $loop, Transport $transport = null)
    {
        if (!($transport instanceof Transport)) {
            $transport = Factory::create($loop, [
                'resource_namespace' => 'Async',
            ] + ApiSettings::TRANSPORT_OPTIONS);
        }
        $this->transport = $transport;
    }

    public function user(string $user): PromiseInterface
    {
        return $this->transport->request('users/' . $user)->then(function ($json) {
            return resolve($this->transport->getHydrator()->hydrate('User', $json));
        });
    }
}
