# ScrollSeer

## Description

ScrollSeer is a plugin for WordPress sites which tracks users' scroll events in Google Analytics. It will send event information every time a user scrolls to a certain threshold. By default, it records progress in 20% intervals. It will also record how long before the user reached that point on the page.

## Requirements

* WordPress 2.6 or higher
* jQuery 1.7 or higher
* Google Analytics tracking code
	* Both Universal Analytics or Classic Analytics are supported

## Installation

Download the repository as a ZIP file, then visit your Admin dashboard in WordPress and select __Plugins > Add New > Upload__. Activate the plugin, and events will be tracked immediately afterward.

## FAQ

**Q: Where can I view the scroll data?**
A: You can view it under __Content > Events__. It can also be tracked in Real Time Analytics under the Events tab in that section.

**Q: Where can I view the scroll timing data?**
A: It's under __Content > Site Speed > User Timings.__

**Q: Can I track scroll events in both Universal Analytics and Classic Analytics at the same time?**
A: Yes, you can. As long as both tracking codes are set up properly, it should record scroll events in both automatically.

## Credits

The code comes almost exclusively from [Rob Flaherty](https://twitter.com/robflaherty) and his work on [Scroll Depth](http://scrolldepth.parsnip.io/). This wraps it into a more WordPress-friendly package.