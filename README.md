# Diglin_Addinfotoemail #

This Magento module allows to display additional information about one or more products into the sales emails.

## Features

With this module, you can define for each product an additional information that you would like it appears when a customer receive an email after to have create/update a new invoice/order/creditmemo from frontend or backend.

In this email will appear, in place where you decide to put it, a list of products and for each product the additional comment that you wrote about the product.

## Installation

- You must place in the sales emails template (e.g. app/locale/en_US/templates/email/sales/invoice_new.html) the following text: {{layout area="frontend" handle="sales_email_order_products_comments" order=$order}}

### Via Magento Connect
- You can install the current stable version via [MagentoConnect](http://www.magentocommerce.com/magento-connect/additional-product-information-into-sales-emails-9872.html)

### Via modman
- Install [modman](https://github.com/colinmollenhour/modman)
- Use the command from your Magento installation folder: `modman clone https://github.com/diglin/Diglin_Addinfotoemail.git`

### Manually
- You can copy the files from the folders of this repository to the same folders of your installation

## Documentation

To use it, find in each product edit page, the Additional Options tab and fill the field "Additional comment in Mail". HTML and normal text are accepted. From Magento 1.4 and above, you should have a Wysiwyg editor button.

## Test

To test it, create a new invoice from the backend with a customer account which has your email address and confirm that the customer should get a confirmation of the email, and you should see all information about the product in the email that you should receive.

## Uninstall

- Via Magento connect, use the uninstall action to remove the files of this module
- Or delete the files and folders manually:
  - app/etc/modules/Diglin_Addinfotoemail.xml
  - app/code/community/Diglin/Addinfotoemail
  - app/design/frontend/default/default/layout/addinfotoemail.xml
  - app/design/frontend/default/default/template/email/order/items/comments.phtml
  - all locale files Diglin_Addinfotoemail.csv in your locale folder: app/locale/xx_YY/
  - Don't forget to remove the text that you have added into your email templates. See in the documentation above for an example
  - And finally, if you want to have a clean database, you have to remove the attribute with the code "comment_email" in the table "eav_attribute". It's not mandatory and reserved for developers skills.

## Author

* Sylvain Rayé
* http://www.sylvainraye.com/
* [@sylvainraye](https://twitter.com/sylvainraye)
* [Follow me on github!](https://github.com/diglin)

## Donation

[Invite me for a drink](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Y66QHLU5VX5BC)