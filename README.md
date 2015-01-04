[![Code Quality](https://scrutinizer-ci.com/g/ffuenf/Aoe_Backup/badges/quality-score.png)][scrutinizer-quality]
[![Build Status](https://scrutinizer-ci.com/g/ffuenf/Aoe_Backup/badges/build.png)][scrutinizer-status]

[scrutinizer-status]: https://scrutinizer-ci.com/g/ffuenf/Aoe_Backup/build-status
[scrutinizer-quality]: https://scrutinizer-ci.com/g/ffuenf/Aoe_Backup

[![AOE](http://www.aoe.com/typo3conf/ext/aoe_template/i/aoe-logo.png)](http://www.aoe.com)

# Aoe_Backup Magento Module

This module will create a backup of the database and the media folder and will upload it (Currentl only S3 is supported).

## License
[OSL v3.0](http://opensource.org/licenses/OSL-3.0)

## Contributors
* [Fabrizio Branca](https://github.com/fbrnc) (AOE)

## Requirements
* n98-magerun
* aws cli
* rsync
* php-cli
* gnupg (pecl extension)

## Setup
* Create S3 bucket
* create AWS key that has read and write access to that S3 bucket
* make sure cron is running (use Aoe_Scheduler to verify)
