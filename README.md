# ClearFrame

A small, calm WordPress theme. Classic PHP templates with `theme.json` for colors, layout and fonts, one stylesheet, no page builder and no bundled plugins. Style it with the `--cf-*` custom properties and the stable `cf-*` classes, and extend it with the action and filter hooks listed in [HOOKS.md](HOOKS.md).

Built and maintained by [ClearSky Digital](https://cscloud.digital).

## Download and install

1. Open the [Releases page](../../releases) of this repository and download `clearframe.zip` from the latest release.
2. In WordPress, go to Appearance, Themes, Add New Theme, Upload Theme, choose the zip and install it.
3. Activate ClearFrame. Set the menus under Appearance, Menus, and the site owner name and optional credit under Appearance, Customize.

Requires WordPress 6.4 or later and PHP 7.4 or later.

## Build the zip yourself

From a clean checkout (the build refuses when a tracked file has uncommitted changes):

```
python scripts/build-release.py
```

The zip is made from the files git tracks, minus the names in `.distignore`, so nothing untracked can end up in the package. It holds one `clearframe/` folder.

## License

GNU General Public License, version 2 or later. Copyright (C) 2026 ClearSky Digital LLC (https://cscloud.digital). See [LICENSE](LICENSE).
