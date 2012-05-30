=== JJ NextGen JQuery Carousel ===
Contributors: JJ Coder
Donate link: http://www.redcross.org.nz/donate
Tags: image, picture, photo, widgets, gallery, images, nextgen-gallery, jquery, jcarousel, carousel, javascript
Requires at least: 2.8
Tested up to: 3.1
Stable tag: 1.1.8

Allows you to pick a gallery from the 'NextGen Gallery' plugin to use as a 'JQuery JCarousel'.

== Description ==

The 'JJ NextGen JQuery Carousel' allows you to create a 'JCarousel' (http://sorgalla.com/projects/jcarousel/) as a widget or as a shortcode.
This plugin uses the 'NextGen Gallery' plugin for its images.

Requirements:

- NextGen Gallery Plugin (http://wordpress.org/extend/plugins/nextgen-gallery/)

NextGen Gallery Integration:

- This plugin uses the original width and height of the image uploaded so make sure the images are the correct dimensions when uploaded.
- If a width and height are defined under the configuration all images will be resized to those dimensions (Highly recommended).
- Alt & Title Text Field: Provide a full url here and the image will link to this. Only works if alt field starts with either of these; /, http, or ftp.
- Description Field: Will be used as image alt text. If alt text is present but not a valid url alt text will be used instead for image alt text.

You can specify the following parameters:

NOTE: sc means shortcode:

- Title: Title. Leave blank for no title. (sc: title="My Carousel")
- Gallery: Leave blank to use all galleries or choose a gallery to use. (sc: gallery="galleryid")
- Order: Order to display results in. You can choose; Random, Latest First, Oldest First, or NextGen Sortorder. Random will still work when a page is cached. (sc: order="random"|"asc"|"desc"|"sortorder")
- Shuffle: If order is random and this is true will shuffle images with javascript. Useful if your are caching your pages. (sc: shuffle="true"|"false")
- Max pictures: The maximum amount of pictures to use. (sc: max_pictures="6")
- HTML id: HTML id to use. Defaults to 'jcarousel'. Needs to be different for multiple instances on same page. (sc: html_id="jcarousel")
- Skin class: Class of skinning to use. Defaults to use the tango skin. (sc: skin_class="jcarousel-skin-tango")
- Image width: Width of image. Defaults to 75. (sc: width="200")
- Image height: Height of image. Defaults to 75. (sc: height="150")
- Image gap: Gap between images. (sc: gap="5")

JCarousel settings:

Please check the JCarousel home page for more details (http://sorgalla.com/projects/jcarousel/#Configuration).

- vertical: Specifies wether the carousel appears in horizontal or vertical orientation. Changes the carousel from a left/right style to a up/down style carousel. (sc: vertical="setting")
- rtl: Specifies whether the carousel appears in RTL (Right-To-Left) mode. (sc: rtl="setting")
- start: The index of the item to start with. (sc: start="setting")
- offset: The index of the first available item at initialisation. (sc: offset="setting")
- size: Size of existing elements if size is not passed explicitly uses the number of total items. (sc: size="setting")
- scroll: The number of items to scroll by. (sc: scroll="setting")
- visible: If passed, the width/height of the items will be calculated and set depending on the width/height of the clipping, so that exactly that number of items will be visible. (sc: visible="setting")
- animation: The speed of the scroll animation as string in jQuery terms ("slow" or "fast") or milliseconds as integer (See jQuery Documentation). If set to 0, animation is turned off. (sc: animation="setting")
- easing: The name of the easing effect that you want to use (See jQuery Documentation). (sc: easing="setting")
- auto: Specifies how many seconds to periodically autoscroll the content. If set to 0 (default) then autoscrolling is turned off. (sc: auto="setting")
- wrap: Specifies whether to wrap at the first/last item (or both) and jump back to the start/end. Options are "first", "last", "both" or "circular" as string. If set to null, wrapping is turned off (default). (sc: wrap="setting")

Shortcode Examples:

- [jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="1"]
- [jj-ngg-jquery-carousel title="Hello" html_id="about-jcarousel" gallery="1" vertical="true"]
- [jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="2" width="150" height="100" visible="2" scroll="1" auto="3"]

Try out my other plugins:

- JJ NextGen JQuery Slider (http://wordpress.org/extend/plugins/jj-nextgen-jquery-slider/)
- JJ NextGen JQuery Cycle (http://wordpress.org/extend/plugins/jj-nextgen-jquery-cycle/)
- JJ NextGen Unload (http://wordpress.org/extend/plugins/jj-nextgen-unload/)
- JJ NextGen Image List (http://wordpress.org/extend/plugins/jj-nextgen-image-list/)
- JJ SwfObject (http://wordpress.org/extend/plugins/jj-swfobject/)

== Installation ==

Please refer to the description for requirements and how to use this plugin.

1. Copy the entire directory from the downloaded zip file into the /wp-content/plugins/ folder.
2. Activate the "JJ NextGen JQuery Carousel" plugin in the Plugin Management page.
3. Refer to the description to use the plugin as a widget and or a shortcode.

== Frequently Asked Questions ==

Question: 

- How do you make a new skin?

Answer:
 
- Make a copy of the skins/tango folder located in the plugin folder.
- Rename folder to something else.
- Copy folder to a location where you can create a link to it in the head of your html page. Don't put in plugins folder or your changes could be lost in updates.
- In skin.css file replace all '.jcarousel-skin-tango' selectors with your own eg, 'jcarousel-skin-custom'.
- Make your modifications to skin.css.
- Import your new skin.css file in to your html page.
- Use the 'Skin class' field in the widget or the shortcode skin_class to assign your new skin class eg, 'jcarousel-skin-custom'.

Question:

- How do you make carousel scroll in the other direction?

Answer:

- Make scroll parameter a negative number eg -1 or -2 etc. Note: make sure auto is set to number of seconds for auto scrolling.

Question:

- How can I use plugin inside normal PHP code?

Answer:

- echo do_shortcode('[jj-ngg-jquery-carousel html_id="about-jcarousel" gallery="2" width="150" height="100" visible="2" scroll="1" auto="3"]');

Question:

- Doesn't work after upgrade? or Doesn't work with this theme?
  
Answer:

- Please check that you don't have two versions of jQuery loading, this is the problem most of the time. Sometimes a theme puts in <br> tags at the end of newlines aswell.

== Screenshots ==

1. Horizontal carousel.
2. Vertical carousel.

== Changelog ==

- 1.1.8: rtl fix.
- 1.1.7: FAQ.
- 1.1.6: Donate to Christchurch Quake.
- 1.1.5: Gap fixes.
- 1.1.4: Readme.
- 1.1.3: Readme.
- 1.1.2: New shuffle field. If order is random and this is true will shuffle images with javascript. Useful if you are caching your pages. This use to be always on in previous verions but some people want images to load in order so if not caching the page no need to be turned on.
- 1.1.1: Fix.
- 1.1.0: Optimisation.
- 1.0.9: FAQ about how to make carousel scroll in other direction.
- 1.0.8: NextGen images that are excluded now don't show up.
- 1.0.7: Images attribute border="0" added. before_title, after_title, before_widget, after_widget enabled for widgets. No styling on ul and li now in widget.
- 1.0.6: Widget header is now a h2 tag. Widget output fix.
- 1.0.5: FAQ update with how to create a new skin.
- 1.0.4: Better support for NextGen galleries already created. Alt text is now checked to see if its a url. If its not a url alt text will be used for image alt instead of description if it exists.
- 1.0.3: Tidy up.
- 1.0.2: Unobstrusive js not required so now faster to load.
- 1.0.0: First version.

== Contributors ==
