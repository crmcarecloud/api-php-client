#!/bin/bash

PROJECT_DIRECTORY=$(dirname $(cd `dirname $0` && pwd))
docker run --rm -v $PROJECT_DIRECTORY/deps:/local -e https_proxy=$https_proxy php-server:5.6 composer update --no-dev --optimize-autoloader -d /local

docker run --rm -v $PROJECT_DIRECTORY:/local swaggerapi/swagger-codegen-cli-v3:3.0.26 generate -i /local/deps/vendor/crmcarecloud/api-spec/_build/openapi.yaml -l php -o /local -t /local/resources/php -c /local/client-config.json

docker run --rm -v $PROJECT_DIRECTORY:/local php-server:5.6 sed -i -e 's/OneOfEventData/mixed/g' /local/lib/Model/Event.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:5.6 sed -i -e 's/AllOfVoucherReward/\\CrmCareCloud\\Webservice\\RestApi\\Client\\Model\\AllOfVoucherReward/g' /local/lib/Model/Voucher.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:5.6 sed -i -e 's/OneOfPropertyRecordPropertyValue/mixed/g' /local/lib/Model/PropertyRecord.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:5.6 sed -i -E 's/(self::[0-9A-Za-z_]+)\.([0-9A-Za-z_]+)/\1_\2/g' /local/lib/Model/ActionsSendBody.php
