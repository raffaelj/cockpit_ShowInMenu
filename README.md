# ShowInMenu for Cockpit CMS

**This addon is not compatible with Cockpit CMS v2.**

See also [Cockpit CMS v1 docs](https://v1.getcockpit.com/documentation), [Cockpit CMS v1 repo](https://github.com/agentejo/cockpit) and [Cockpit CMS v2 docs](https://getcockpit.com/documentation/), [Cockpit CMS v2 repo](https://github.com/Cockpit-HQ/Cockpit).

---

With the version 0.9.3 (Sept. 2019) of [Cockpit CMS][1], the feature to display Collections, Singletons and Forms in the system menu was dropped.

This addon re-enables that function.

If I missed something, feel free to file an issue or to ask about it in the [related discussion on discourse][2].

Related commits:

* [re-work cockpit menu][3]
* [remove menu entries][4]

## Features

* add a toggle in the settings of Collections, Singletons and Forms to enable the key `in_menu`
* display activated items in the menu when clicking on the logo at the top left
* changed the design to the new menu style
* display the correct icon (in the original/old version, they all had the default icon)

## Installation

Copy this repository into `/addons` and name it `ShowInMenu` or

```bash
cd path/to/cockpit
git clone https://github.com/raffaelj/cockpit_ShowInMenu.git addons/ShowInMenu
```

[1]: https://github.com/agentejo/cockpit/
[2]: https://discourse.getcockpit.com/t/menu-rework-and-show-in-system-menu-removed-in-latest-next-branch/990
[3]: https://github.com/agentejo/cockpit/commit/97c374c4e3e9845512523464efcf0ab5a7eb6f65
[4]: https://github.com/agentejo/cockpit/commit/825fd730ddbc28898520a885c0bdc94cd893bae9
