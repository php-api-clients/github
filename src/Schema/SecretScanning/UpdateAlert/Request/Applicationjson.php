<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\SecretScanning\UpdateAlert\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":["false_positive","wont_fix","revoked","used_in_tests",null],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolution_comment":{"type":["string","null"],"description":"An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","resolution":"generated_resolution","resolution_comment":"generated_resolution_comment"}';
    /**
     * state: Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     * resolution: **Required when the `state` is `resolved`.** The reason for resolving the alert.
     * resolution_comment: An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.
     */
    public function __construct(public string $state, public ?string $resolution, public ?string $resolution_comment)
    {
    }
}
