<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class ServiceUnavailable extends Error
{
    public function __construct(public int $status, public Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable $error)
    {
    }
}
