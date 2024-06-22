<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8EA83230\TietFF947D7F\Tiet4FFBD303;

abstract readonly class TietF22B5455
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "attestations": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "bundle": {
                        "type": "object",
                        "properties": {
                            "mediaType": {
                                "type": "string"
                            },
                            "verificationMaterial": {
                                "type": "object",
                                "properties": {},
                                "additionalProperties": true
                            },
                            "dsseEnvelope": {
                                "type": "object",
                                "properties": {},
                                "additionalProperties": true
                            }
                        },
                        "description": "The attestation\'s Sigstore Bundle.\\nRefer to the [Sigstore Bundle Specification](https:\\/\\/github.com\\/sigstore\\/protobuf-specs\\/blob\\/main\\/protos\\/sigstore_bundle.proto) for more information."
                    },
                    "repository_id": {
                        "type": "integer"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "attestations": [
        {
            "bundle": {
                "mediaType": "generated",
                "verificationMaterial": [],
                "dsseEnvelope": []
            },
            "repository_id": 13
        },
        {
            "bundle": {
                "mediaType": "generated",
                "verificationMaterial": [],
                "dsseEnvelope": []
            },
            "repository_id": 13
        }
    ]
}';

    public function __construct(public array|null $attestations)
    {
    }
}
