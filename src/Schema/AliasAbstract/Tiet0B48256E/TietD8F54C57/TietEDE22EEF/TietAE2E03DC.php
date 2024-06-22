<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0B48256E\TietD8F54C57\TietEDE22EEF;

use ApiClients\Client\GitHub\Schema;

abstract readonly class TietAE2E03DC
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The attestation\'s Sigstore Bundle.
Refer to the [Sigstore Bundle Specification](https://github.com/sigstore/protobuf-specs/blob/main/protos/sigstore_bundle.proto) for more information.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "mediaType": "generated",
    "verificationMaterial": [],
    "dsseEnvelope": []
}';

    public function __construct(public string|null $mediaType, public Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\VerificationMaterial|null $verificationMaterial, public Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\DsseEnvelope|null $dsseEnvelope)
    {
    }
}
