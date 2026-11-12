# Khalid Alabri — Coaching Website

**Live site:** https://irbala.github.io/kldmohd/

A small Arabic (right-to-left) website for Khalid Alabri, a certified trainer in social development and self-improvement. Visitors can read about him, see photos from his talks and events, send a message, and go to his Salla store to book sessions.

## Pages

| Page | What's on it |
|---|---|
| `index.html` | Introduction, a link to book through Salla, photos and social media links |
| `Contact.html` | A contact form (embedded Google Form) |
| `album.html` | Photo album of talks, events and certificates |

## How it's built

Hand-written HTML and CSS, with no page builder, frameworks or JavaScript.

- `styles.css` holds the styles for all three pages. Colours are set once as variables at the top.
- The layout is responsive: three photo columns on desktop, two on phones.
- Semantic structure (`header`, `nav`, `main`, `footer`), alt text on every photo, and `lang="ar" dir="rtl"` on every page.

## Run it locally

Download or clone the repo and open `index.html` in a browser.
