=== Theme Instructions ===
MICRO THEME INSTALLATION INSTRUCTIONS:
http://www.themeover.com/install-a-micro-theme-with-microthemer-or-microloader/
FIND MORE STEP BY STEP TUTORIALS AT: 
http://www.themeover.com/support/microthemer-tutorials/
GET SUPPORT AT: 
http://www.themeover.com/forum/


== Contents ==
1. Merging "Blank WooCommerce" into the Microthemer UI
2. Overriding CSS Styles Utilizing The !important Declaration

== 1. Merging "Blank WooCommerce" into the Microthemer UI  ==
As of Microthemer 1.1.4, multiple Micro Themes and Plugin Styles can be loaded into the Microthemer UI without overwriting each other. When Themeover creates Blank Slate Micro Themes for WooThemes specifically designed for WooCommerce (e.g. Wootique) you won't need to download or merge Blank WooCommerce because the blank theme will already contain sections for WooCommerce. But if you're using WooCommerce with a non-Woo Theme, you'll want to merge Blank WooCommerce with your current set up in the Microthemer UI. Here's how you do that:
1. Download "Blank WooCommerce" from themeover.com (go to Plugin Styles repository)
2. Install the zip package via Microthemer's "Manage Themes" page. See instructions here if you haven't done that before: http://www.themeover.com/install-a-micro-theme-with-microthemer-or-microloader/
4. Go to the Microthemer UI and import the "Blank WooCommerce" Micro Theme. Make sure that you choose "Merge" as the import method.
5. That's it. The Blank WooCommerce Sections will appear in the Microthemer UI underneath the sections that were present before the import.

== 2. Overriding CSS Styles Utilizing The !important Declaration ==
Themes by WooThemes tend to make use of the "!important" CSS declaration. For those of you that haven't come across the !important declaration, it can be appended to a CSS property value to make the style rule carry more priority that usual (e.g. to ensure that a style rule of "color:red" overrides a style rule of "color:blue"). Normally the CSS selector part of a CSS style rule determines this priority. The more specific a CSS selector, the more priority the style rule has. The !important rule disrupts this convention by trumping all other rules. The only way to override a style with !important is to add your own style rule with !important.

Fortunately, Microthemer makes it very easy to add !important to all your style rules so that you won't bump into problems when trying to override certain styles defined in Wootique's style.css. Just go to Microthemer's "Preferences" page and enable the "Auto-add !important to CSS Styles" option. It's much much better if you do this at the very start. It you enable !important at a later date you may find that your previously entered (and forgotten) styles override Wootique's default styles in undesirable ways.


== Changelog ==
1.2 The media query code was invalid. This has now been fixed.

1.1. Various CSS selector updates to make this plugin pack compatible with Woo Commerce 2.0.20 