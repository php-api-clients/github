<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\WebHook;

use ApiClients\Client\Github\Resource\WebHook\Config as BaseConfig;

class Config extends BaseConfig
{
    public function refresh(): Config
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
