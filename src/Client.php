<?php
declare(strict_types=1);

namespace WyriHaximus\Github;

use React\EventLoop\Factory as LoopFactory;
use WyriHaximus\Github\Resource\UserInterface;
use WyriHaximus\ApiClient\Transport\Client as Transport;
use WyriHaximus\ApiClient\Transport\Factory;
use function Clue\React\Block\await;
use function React\Promise\resolve;

class Client
{
    protected $transport;
    protected $client;

    public function __construct(Transport $transport = null)
    {
        $loop = LoopFactory::create();
        if (!($transport instanceof Transport)) {
            $transport = Factory::create($loop, [
                'resource_namespace' => 'Sync',
            ] + ApiSettings::TRANSPORT_OPTIONS);
        }
        $this->transport = $transport;
        $this->client = new AsyncClient($loop, $this->transport);
    }

    public function user(string $user): UserInterface
    {
        return await(
            $this->client->user($user),
            $this->transport->getLoop()
        );
    }
}
