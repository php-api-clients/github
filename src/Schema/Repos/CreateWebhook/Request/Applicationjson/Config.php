<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateWebhook\Request\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Config
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"token":{"type":"string","examples":["\\"abc\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/webhook","content_type":"\\"json\\"","secret":"\\"********\\"","insecure_ssl":"generated_insecure_ssl","token":"\\"abc\\"","digest":"\\"sha256\\""}';
    /**
     * url: The URL to which the payloads will be delivered.
     * content_type: The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     * secret: If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     */
    public function __construct(public ?string $url, public ?string $content_type, public ?string $secret, public ?string $insecure_ssl, public ?string $token, public ?string $digest)
    {
    }
}
