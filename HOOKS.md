# ClearFrame hooks and class names

A plugin or child theme gives each site its look with these. Nothing here prints inline styles. Change colors, fonts and spacing through the CSS custom properties in `assets/clearframe.css`.

## Action hooks

Each runs with no arguments, in this order on a page.

| Hook | Where |
|---|---|
| `clearframe_before_header` | before `<header id="masthead">` |
| `clearframe_header_start` | first thing inside the header's inner wrapper |
| `clearframe_header_end` | last thing inside the header's inner wrapper |
| `clearframe_after_header` | after the header |
| `clearframe_before_content` | after the header, before `<main>` |
| `clearframe_after_content` | after `</main>`, before the footer |
| `clearframe_before_footer` | before `<footer id="colophon">` |
| `clearframe_footer_start` | first thing inside the footer's inner wrapper |
| `clearframe_footer_end` | last thing inside the footer's inner wrapper |
| `clearframe_after_footer` | after the footer |

## Filters

| Filter | Value | Default |
|---|---|---|
| `clearframe_site_branding` | HTML string for the logo, site title and tagline | custom logo, title link, tagline |
| `clearframe_footer_text` | HTML string for the footer text | the site owner's copyright, and "Built on ClearFrame" only when the site owner turns it on |

Output of both filters passes through `wp_kses_post()`.

## Theme options (Customizer, Footer)

- Name in the copyright line (empty uses the site title).
- Show "Built on ClearFrame" (off by default; the link carries `rel="nofollow"` and points to the Theme URI).

## Stable class names

Header: `cf-header`, `cf-header__inner`, `cf-branding`, `cf-site-logo`, `cf-site-title`, `cf-site-tagline`, `cf-nav`, `cf-nav__toggle`, `cf-menu`.
Content: `cf-main`, `cf-page-header`, `cf-page-title`, `cf-entry`, `cf-entry--summary`, `cf-entry__header`, `cf-entry__title`, `cf-entry__meta`, `cf-entry__content`, `cf-entry__image`, `cf-entry__thumb`, `cf-entry__footer`.
Comments and search: `cf-comments`, `cf-comment-list`, `cf-search`, `cf-search__field`, `cf-button`.
Footer: `cf-footer`, `cf-footer__inner`, `cf-footer__widgets`, `cf-widget`, `cf-footer-nav`, `cf-footer__text`, `cf-copyright`, `cf-credit`.

## Custom properties

`--cf-color-text`, `--cf-color-muted`, `--cf-color-bg`, `--cf-color-surface`, `--cf-color-accent`, `--cf-color-accent-contrast`, `--cf-color-border`, `--cf-font-body`, `--cf-font-heading`, `--cf-font-size`, `--cf-line-height`, `--cf-space-s`, `--cf-space-m`, `--cf-space-l`, `--cf-width-content`, `--cf-width-wide`, `--cf-radius`.
