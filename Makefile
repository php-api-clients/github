generate-clients:
	ls ./etc/clients | xargs -I % ./vendor/bin/openapi-client-generator ./etc/clients/%
