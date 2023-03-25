<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPing\Hook;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"contentType":"\\"json\\"","insecureSsl":"generated_insecure_ssl_null","secret":"\\"********\\"","url":"https:\\/\\/example.com\\/webhook"}';
    /**
     * contentType: The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     * secret: If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     * url: The URL to which the payloads will be delivered.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('content_type')] public ?string $contentType, #[\EventSauce\ObjectHydrator\MapFrom('insecure_ssl')] public ?string $insecureSsl, public ?string $secret, public ?string $url)
    {
    }
}
