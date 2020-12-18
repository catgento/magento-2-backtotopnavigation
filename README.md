# Mage2 Module Catgento BackToTopNavigation

    ``catgento/module-backtotopnavigation``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
This module adds a back to top navigation when scrolling down the page

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Catgento`
 - Enable the module by running `php bin/magento module:enable Catgento_BackToTopNavigation`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require catgento/module-backtotopnavigation`
 - enable the module by running `php bin/magento module:enable Catgento_BackToTopNavigation`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - enable (design/back_to_top_navigation/enable)

 - Button Background Color (design/back_to_top_navigation/background_color)

 - Display offset (design/back_to_top_navigation/display_offset)

 - text_color (design/back_to_top_navigation/text_color)

 - visibility (design/back_to_top_navigation/visibility)


## Specifications




## Attributes



