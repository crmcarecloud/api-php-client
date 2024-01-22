#!/bin/bash

PROJECT_DIRECTORY=$(dirname $(cd `dirname $0` && pwd))
docker run --rm -v $PROJECT_DIRECTORY/deps:/local -e https_proxy=$https_proxy php-server:7.4-fpm composer update --no-dev --optimize-autoloader -d /local

docker run --rm\
  --platform linux/amd64\
  -v $PROJECT_DIRECTORY:/local swaggerapi/swagger-codegen-cli-v3:3.0.46\
  generate\
  -i /local/deps/vendor/crmcarecloud/api-spec/_build/openapi.yaml\
  -l php\
  -o /local\
  -t /local/resources/php\
  -c /local/client-config.json

docker run --rm -v $PROJECT_DIRECTORY:/local php-server:7.4-fpm sed -i -e 's/OneOfEventData/mixed/g' /local/lib/Model/Event.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:7.4-fpm sed -i -e 's/AllOfVoucherReward/\\CrmCareCloud\\Webservice\\RestApi\\Client\\Model\\AllOfVoucherReward/g' /local/lib/Model/Voucher.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:7.4-fpm sed -i -e 's/OneOfPropertyRecordPropertyValue/mixed/g' /local/lib/Model/PropertyRecord.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:7.4-fpm sed -i -E 's/(self::[0-9A-Za-z_]+)\.([0-9A-Za-z_]+)/\1_\2/g' /local/lib/Model/ActionsSendBody.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:7.4-fpm sed -i -E 's/const ([0-9]+)/const ERROR_PROCESSING_\1/g' /local/lib/Model/ErrorProcessing.php
docker run --rm -v $PROJECT_DIRECTORY:/local php-server:7.4-fpm sed -i -E 's/self::([0-9]+)/self::ERROR_PROCESSING_\1/g' /local/lib/Model/ErrorProcessing.php
