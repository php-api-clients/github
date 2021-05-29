<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MarketplaceAccount
{
    public const SCHEMA_TITLE                   = 'Marketplace Account';
    public const SCHEMA_DESCRIPTION             = '';
    private ?string $url                        = null;
    private ?int $id                            = null;
    private ?string $type                       = null;
    private ?string $node_id                    = null;
    private ?string $login                      = null;
    private ?string $email                      = null;
    private ?string $organization_billing_email = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function type(): ?string
    {
        return $this->type;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function login(): ?string
    {
        return $this->login;
    }

    public function email(): ?string
    {
        return $this->email;
    }

    public function organization_billing_email(): ?string
    {
        return $this->organization_billing_email;
    }
}
