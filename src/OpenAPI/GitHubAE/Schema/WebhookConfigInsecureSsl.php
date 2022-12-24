<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookConfigInsecureSsl
{
    public const SCHEMA_JSON = '{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]}';
    public const SCHEMA_TITLE = 'webhook-config-insecure-ssl';
    public const SCHEMA_DESCRIPTION = '';
}
