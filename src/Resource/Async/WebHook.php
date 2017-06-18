<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\WebHook as BaseWebHook;

class WebHook extends BaseWebHook
{
    public function refresh(): WebHook
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
