# Kitchenmess WordPress theme

A light, fast block theme for [kitchenmess.com](https://www.kitchenmess.com), built to win brand partnerships and earn from affiliate links.

- **Brand:** Kitchenmess pink `#F287B7` and plum `#763978` from the 2016 brand book, the brush-script logo and round KM icon, Montserrat (the free stand-in for Gotham) for text and Cormorant Garamond for elegant headlines.
- **Fast:** no page builder, no jQuery, fonts and logos served from the theme itself, emoji scripts removed.
- **Recipe-first:** works with WP Recipe Maker (styled to match), shows a quick answer under each recipe title, has an FAQ pattern and an author box on every post.
- **Brand deals:** a full Work With Me media kit page, a Kitchen tools affiliate page, a gear shelf, and an affiliate disclosure page.

## What's inside

| Folder | What it does |
| --- | --- |
| `theme.json` | Colours, fonts, sizes and spacing. Change the palette here. |
| `templates/` | Page layouts: home, single post, page, wide page, archive, search, 404. |
| `parts/` | Header (logo and menu) and footer. |
| `patterns/` | Ready-made sections you can insert from the editor under **Patterns → Kitchenmess**. |
| `assets/css/theme.css` | Styles for the sections and the WP Recipe Maker card. |
| `assets/fonts/` | Self-hosted fonts (SIL Open Font License). |
| `assets/images/` | Logos and placeholder photos. Replace placeholders with your own photos in the editor. |

## Install on a staging site

Always try a new theme on a staging copy first. Most hosts (SiteGround, Kinsta, WP Engine, Bluehost, Hostinger, Cloudways) make one in one click from the hosting dashboard.

1. On GitHub, click **Code → Download ZIP**.
2. In the staging site's admin go to **Appearance → Themes → Add New → Upload Theme**, choose the zip and click **Install Now**. Do not activate yet.
3. Install these plugins if you don't have them: **WP Recipe Maker**, **Yoast SEO** (already installed), a contact form (WPForms Lite or Fluent Forms) and your newsletter plugin (Kit, MailerLite or Mailchimp).
4. Activate the Kitchenmess theme and click through the site. Your posts and pages are kept; only the design changes.

## Set up the pages

| Page | How |
| --- | --- |
| Home | Uses the home template automatically (hero, recipes, gear shelf, supper club, newsletter). Edit it under **Appearance → Editor → Templates → Front Page**. |
| Work with me | Edit the existing page, choose the **Wide page (no title)** template, delete the old content and insert the pattern **Work with me (full media kit page)**. Fill in your real numbers and prices. |
| Kitchen tools | New page with slug `kitchen-tools`, template **Wide page (no title)**, pattern **Kitchen tools page**. Paste your affiliate links into the buttons. |
| Affiliate disclosure | New page with slug `affiliate-disclosure`, pattern **Affiliate disclosure page**. |
| Recipes | The menu links to `/recipes/`. Either set **Settings → Reading → Posts page** to a page called Recipes, or change the menu link. |

## Writing a recipe post

1. Fill in the **Excerpt** (in the post sidebar) with a 2 to 3 sentence answer: what it is, how long it takes, the key trick. It appears under the title in italics. AI search tools quote this.
2. Insert **Gear strip (in a post)** for the "What you'll need" section, and paste affiliate links into the "Check price" links.
3. Add the WP Recipe Maker card. Add equipment in the card with affiliate links (WPRM Premium).
4. Insert **Recipe questions (FAQ)** and write 3 to 5 real questions.
5. Add the tag `has-affiliate-links` to show the affiliate notice at the top of the post automatically.

Links with the CSS class `aff` automatically get `rel="sponsored nofollow noopener"` and open in a new tab.

## Before going live

- Replace the placeholder photos, brand names, stats (00K) and prices (HK$ —) in the patterns.
- Set the menu links in **Appearance → Editor → Navigation** if your page slugs differ.
- Test the home page, one recipe post and Work With Me on a phone.
- Run [PageSpeed Insights](https://pagespeed.web.dev/) on staging and compare with the live site.
- Turn off Elementor and Penci plugins on staging once nothing uses them, then retest.

## Fonts and licences

Montserrat and Cormorant Garamond are under the SIL Open Font License (see `assets/fonts/`). The brand book's Gotham and Madina Script are commercial fonts; Madina Script lives only in the logo image, and Montserrat stands in for Gotham on the web.
