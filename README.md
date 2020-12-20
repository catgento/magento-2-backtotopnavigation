# Magento Back To Top Navigation

- [Main Functionalities](#markdown-header-main-functionalities)
- [Installation](#markdown-header-installation)
- [Configuration](#markdown-header-configuration)
- [Specifications](#markdown-header-specifications)
- [Attributes](#markdown-header-attributes)


## Main Functionalities
This module adds a back to top navigation when scrolling down the page

![Image of Button in Frontend](https://github.com/catgento/magento-2-backtotopnavigation/blob/master/media/screenshot-frontend.png)


## Installation

### Type 1: Composer

- Install the module composer by running

`composer require catgento/magento-2-backtotopnavigation`

- enable the module by running

`php bin/magento module:enable Catgento_BackToTopNavigation`

- apply database updates by running

`php bin/magento setup:upgrade`

- Flush the cache by running

`php bin/magento cache:flush`

### Type 2: Zip file

- Unzip the zip file in `app/code/Catgento/BackToTopNavigation`
- Enable the module by running `php bin/magento module:enable Catgento_BackToTopNavigation`
- Apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`


## Configuration

Back to top navigation button can be enabled in Stores » Configuration » Catgento » Back to top navigation section.

- enable (design/back_to_top_navigation/enable)

- Visibility (design/back_to_top_navigation/visibility)

- Breakpoint (design/back_to_top_navigation/breakpoint)

- Button Background Color (design/back_to_top_navigation/background_color)

- Display offset (design/back_to_top_navigation/display_offset)

- Button Text Color (design/back_to_top_navigation/text_color)

![Image of Button configuration](https://github.com/catgento/magento-2-backtotopnavigation/blob/master/media/screenshot-configuration.png)



