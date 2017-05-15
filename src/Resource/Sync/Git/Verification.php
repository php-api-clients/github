<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\Verification as BaseVerification;
use ApiClients\Client\Github\Resource\Git\VerificationInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Verification extends BaseVerification
{
    public function refresh(): Verification
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (VerificationInterface $verification) {
            return $verification->refresh();
        }));
    }
}
