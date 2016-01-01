#Changelog
### Changelog for v1.1.0

#### General Changes
* General Codebase standardization, including indenting, usage of syntax, and placement of divs.
* Comments base.css and removes redundant references.
* Removes Bootstrap-Theme references (as it is obsolete now)
* Wraps up plenary page completion
* Adds plenary images/speaker bios, with 90% completion.
* Adds Opening and Closing Panel Pages, including content and pictures.
* Changes PHPmyadmin hooking for new VPS
* Adds navbar collapse on scroll, using nav-collapse.js and jquery's easing
* Changes FAQ to use collapsing panels instead of messy walls of text
* Removes sidebar nav for FAQ
* Welcome section in navbar now properly displays name

#### New Footer
* New footer no longer uses a fixed, inverted bottom-of-page navbar; uses imported div section instead.
* Footer includes full-site page list, retains made-by section, and adds more information
* Footer now includes privacy terms that are agreed to on website visit.

#### New Schedule Page
* Implements new Schedule of Keynote Address and Conference Day (in test folder)
* Uses popovers to display information
* Fills all non-speaker related information of Keynote Address
* Fills all non-plenary information of Conference Day

### Changelog for v1.0.0

#### Account System added:
* Added account page, register, login, and logout page functions
* Adds buttons to navbar for login/account properties
* Adds a PHPmyAdmin table to control data
* Notification system (incomplete, needs work)
* Email Confirmation (unimplemented)

#### Google Analytics
* Added Google Analytics to all pages
* Integrates tracking system to determine country, platform, language, and other properties

#### General Changes
* Fixes Countdown
* Change Plenary page styling to tab-system (this is going to be overhauled again)
* Reworks Keynote page to mobile-compat
* Reworks about_us.php completely to make it more user-friendly and snappy
* Removes unused CSS
* Added more headshots.
* Change title page naming convention
* Adds Morning Panel Pages
* Changes (and re-aligns) background images on index.php
* Cleans up code
