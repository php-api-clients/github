<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateAttestation\Request;

use ApiClients\Client\GitHub\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "bundle"
    ],
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bundle": {
        "mediaType": "generated",
        "verificationMaterial": [],
        "dsseEnvelope": []
    }
}';

    /**
     * bundle: The attestation's Sigstore Bundle.
    Refer to the [Sigstore Bundle Specification](https://github.com/sigstore/protobuf-specs/blob/main/protos/sigstore_bundle.proto) for more information.
     */
    public function __construct(public Schema\Repos\CreateAttestation\Request\ApplicationJson\Bundle $bundle)
    {
    }
}
