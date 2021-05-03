<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SPL_HASH = '00000000084e1e620000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    private ?string $referrer = null;
    private ?int $count = null;
    private ?int $uniques = null;
    public function referrer() : ?string
    {
        return $this->referrer;
    }
    public function count() : ?int
    {
        return $this->count;
    }
    public function uniques() : ?int
    {
        return $this->uniques;
    }
}
